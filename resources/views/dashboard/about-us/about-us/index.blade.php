@extends('layouts.SupUserMaster')
@section('title', 'About Us ~ About Us - Techno Apogee Limited')
@section('SupUserContent')

    <div class="pagetitle">
        <h1>About Us</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Administrator.index') }}">Dashboard</a></li>
                
                <li class="breadcrumb-item active">About Us</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="float-right">
                <a href="{{ route('SupUser.AboutUsIndexShow') }}" onclick="alert('Update page showing!');" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover datatable table-sm">
                <thead>
                    <tr>
                        
                        <th>Image</th>
                        <th>Description</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="{{ asset('public/image/about-us/about-us') }}/{{ $backAbout->image }}" alt="about us" height="100%" width="100%">
                        </td>
                        <td>{!! $backAbout->description !!}</td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    

   






@include('dashboard.about-us.about-us.partials.modal')
@endsection
@section('js')
@include('dashboard.about-us.about-us.partials.js')
@endsection