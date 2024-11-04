@extends('layouts.SupUserMaster')

@section('title', 'File Index - Techno Apogee')
@section('SupUserContent')
@include('dashboard.summernote.summernote')

<div class="pagetitle">
    <h1>Files</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Administrator.index') }}">Dashboard</a></li>
            
            <li class="breadcrumb-item active">File Index</li>
        </ol>
    </nav>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (Session::get('filearchivedone'))
                    <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show"
                        role="alert">
                        {{ Session::get('filearchivedone') }}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
            <div class="card">
                <div class="card-header">
                    <div>
                        <a href="{{ route('SupUserDownload.insertDown') }}" class="btn btn-primary">+ Files</a>
                    </div>
                    
                </div>
                <div class="card-body">
                    <table class="table table-border datatable">
                        <thead>
                            <th>#</th>
                            <th>Blog</th>
                            <th>Product</th>
                            <th>Project</th>
                            <th>File Category</th>
                            <th>File Name</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            
                            @foreach ($downloadFileList as $Download)
                            <tr>
                                <td>{{ $Download->id }}</td>
                                <td>{{ $Download->blog_id }}</td>
                                <td>{{ $Download->project_id }}</td>
                                <td>{{ $Download->product_id }}</td>
                                <td>{{ $Download->file_category }}</td>
                                <td>{{ $Download->file_name }}</td>
                                <td>
                                    <a href="{{ route('SupUserDownload.Archive',['archive_id'=>$Download->id,'file_name'=>$Download->file_name]) }}" class="btn btn-danger btn-sm"><i class="bi bi-archive"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#summernote').summernote({
        placeholder: 'Type something about this file...',
        tabsize: 2,
        height: 200
    });
</script>
@include('dashboard.download.partials.modal')
@endsection
@section('js')
@include('dashboard.download.partials.js')
@endsection