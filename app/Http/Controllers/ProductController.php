<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('attributes')->latest()->paginate(16);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'attributes' => ['required', 'array', 'min:1'],
            'attributes.*.name' => ['required'],
            'attributes.*.value' => ['required'],
        ]);
        if (count($validated)) {
            $product = Product::create();
            foreach ($validated['attributes'] as $attribute) {
                $attr = Attribute::firstOrCreate([
                    'name' => $attribute['name'],
                ]);

                $product->attributes()->attach($attr, ['value' => $attribute['value']]);
            }
        }

        return redirect()->route('products.index');
    }
}
