@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 mb-3">
        @forelse($products as $product)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Product-{{ $loop->iteration }}</h5>
                    <ul class="list-group">
                        @foreach($product->attributes as $attribute)
                        <li class="list-group-item">
                            <b>{{ ucwords(str_replace('_', ' ', $attribute->name)) }}</b>:
                            <span class="float-end">{{ $attribute->pivot->value ?? 'N/A' }}</span>
                    </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">No Products uploaded</h5>
                    <div class="card-text">
                        Click <a href="{{ route('upload-excel.create') }}">here</a> to upload a new file.
                    </div>
                </div>
            </div>
        </div>
        @endforelse
    </div>
    {{ $products->links('vendor.pagination.bootstrap-5') }}
</div>
@endsection