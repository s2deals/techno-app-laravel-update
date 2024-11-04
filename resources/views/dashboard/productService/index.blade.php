@extends('layouts.SupUserMaster')

@section('title', 'Index Product and Service - Techno Apogee Limited')
@section('SupUserContent')
@include('dashboard.summernote.summernote')

    <div class="pagetitle">
        <h1>Index Product & Service</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Administrator.index') }}">Dashboard</a></li>
                
                <li class="breadcrumb-item active">Product & Service</li>
            </ol>
        </nav>
    </div>
    
    
    <hr>
                        @if (Session::get('ProSerSucc'))
                            <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show"
                                role="alert">
                                {{ Session::get('ProSerSucc') }}
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
    
    <table class="table table-hover datatable table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Slug</th>
                <th scope="col">image</th>
                <th scope="col">Parent</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productServiceStatus as $key => $productService)
                <tr>
                    <td>{{ $productService->id }}</td>
                    <td><a href="{{ route('SupUserProduct.SubMenuShow',['menu_slug'=>$productService->__proserslug]) }}">{{ $productService->__proserslug }}</a></td>
                    <td><img src="{{ asset('public/image/productservice') }}/{{ $productService->__proserheadimage }}" height="55px" width="55px" alt="{{ $productService->__prosername }}"></td>
                    <td>{{ $productService->__prosermenuselect }}</td>
                    <td>
                        <div class="button-group">
                            <a href="{{ route('SupUserProduct.SubMenuShow',['menu_slug'=>$productService->__proserslug]) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                            <a href="{{ route('SupUser.ProductServiceUpdateGetlink',['product_id'=>$productService->id,'product_slug'=>$productService->__proserslug]) }}" class="btn btn-warning btn-sm" onclick="alert('Make sure you check this!')"><i class="bi bi-pencil-square"></i></a>
                            <button type="button" value="{{ $productService->id }}" class="btn btn-danger delteProDuctService btn-sm"><i class="bi bi-archive"></i></button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



<script>
    $('#summernote').summernote({
        placeholder: 'Type something about project...',
        tabsize: 2,
        height: 200
    });
</script>



@include('dashboard.productService.partials.modal')
@endsection
@section('js')
@include('dashboard.productService.partials.js')
@endsection