@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Uploaded Excel Files</div>
                    <div>
                        <a href="{{ route('upload-excel.create') }}" class="btn btn-sm btn-primary">Upload New File</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">File Name</th>
                                <th scope="col">Uploaded At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($uploadedFiles as $uploadedFile)
                            <tr>
                                <th data-cell="id" scope="row">{{ $loop->iteration }}</th>
                                <td data-cell="name">
                                    <a href="{{ route('upload-excel.show', $uploadedFile->id) }}">{{ $uploadedFile->original_name }}</a>

                                    </td>
                                <td data-cell="uploaded_at">{{ $uploadedFile->created_at->diffForHumans() }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center">
                                    No filese uploaded yet. Click <a href="{{ route('upload-excel.create') }}">here</a> to upload a file.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $uploadedFiles->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection