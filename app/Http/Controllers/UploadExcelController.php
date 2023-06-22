<?php

namespace App\Http\Controllers;

use App\Imports\ExcelImport;
use App\Models\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Excel;
use Illuminate\Http\Request;

class UploadExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $uploadedFiles = UploadedFile::latest()->paginate();
        return view('upload-excel.index', compact('uploadedFiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('upload-excel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => ['required', 'mimes:xlsx', 'max:20480'],
        ], [
            'file.required' => 'Please select a file to upload.',
        ]);

        $originalName = $request->file('file')->getClientOriginalName();
        $name = $request->file('file')->store('uploads', 'public');
        
        $uploadedFile = UploadedFile::create([
            'name' => $name,
            'original_name' => $originalName,
        ]);

        $filePath = $request->file('file')->store('temp');
        if ($uploadedFile) {
            Excel::import(new ExcelImport, $filePath);
            Storage::delete($filePath);
            return redirect()->route('products.index');
        }

        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $uploadedFile = UploadedFile::findOrFail($id);

        return view('upload-excel.view', compact('uploadedFile'));
    }
}
