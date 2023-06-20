@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-xl-7">
            <div class="card">
                <div class="card-header">Upload Excel</div>
                <div class="card-body">
                    <form action="{{ route('upload-excel.store') }}" method="post" id="uploadExcelForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="file">Select excel file</label>
                            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                            @error('file')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" form="uploadExcelForm" class="btn btn-primary">Upload</button>
                </div>
            </div>    
        </div>
        </div>
    </div>
@endsection