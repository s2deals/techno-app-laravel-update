@extends('layouts.SupUserMaster')
@section('title', 'update user - Techno Apogee Limited')
@section('SupUserContent')

    <div class="pagetitle">
        <h1>Users</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Administrator.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('SupUser.ListUsers') }}">Users</a></li>
                <li class="breadcrumb-item active">User Update</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Update
                            <div class="float-right">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addusermodal">
                                    + User
                                </button>
                            </div>

                        </h5>

                        @if (Session::get('adminuserupdate'))
                            <div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show"
                                role="alert">
                                {{ Session::get('adminuserupdate') }}
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (Session::get('adminuserupdateerr'))
                            <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show"
                                role="alert">
                                {{ Session::get('adminuserupdateerr') }}
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('Administrator.UpdateUserDonePo') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                
                                <label for="">Name</label>
                                <input type="text" name="upd_name" id="upd_name" class="form-control"
                                    value="{{ $usersInfo->name }}">
                                    <br>
                                    @error('upd_name')
                                        <span style="color: red;">{{ $messages }}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="upd_username" id="upd_username" class="form-control"
                                    value="{{ $usersInfo->username }}">
                                    <br>
                                    @error('upd_username')
                                        <span style="color: red;">{{ $messages }}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="upd_image" class="form-control" placeholder="image" id="upd_image">
                                <br>
                                @error('upd_image')
                                        <span style="color: red;">{{ $messages }}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Update Password</label>
                                <input type="text" name="upd_pass" id="upd_pass" class="form-control"
                                    value="" placeholder="new password">
                                    <br>
                                    @error('upd_pass')
                                        <span style="color: red;">{{ $messages }}</span>
                                    @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="">User Role <span style="color: red">*</span></label>
                                <select name="user_role" id="user_role" class="form-control">
                                    <option value="{{ $usersInfo->role_int }}.{{ $usersInfo->role }}" selected>{{ $usersInfo->role }}</option>
                                    <option value="{{ __('0') }}.{{ __('user') }}">User</option>
                                    <option value="{{ __('1') }}.{{ __('admin') }}">Admin</option>
                                </select>
                                <br>
                                @error('user_role')
                                        <span style="color: red;">{{ $messages }}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="" style="text-align:center; color:rebeccapurple;">user active or not</label>
                                <select name="is_active" id="is_active" class="form-control">
                                    <option value="{{ $usersInfo->is_active }}" selected>Select Active or Not</option>
                                    <option value="{{ __('1') }}">{{ __('Active') }}</option>
                                    <option value="{{ __('0') }}">{{ __('Deactive') }}</option>
                                </select>
                                @error('is_active')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror
                                <br>
                            </div>
                            <div class="form-group">
                                <label for="" style="text-align:center; color:red;">Manual email verification</label>
                                <select name="email_verify" id="email_verify" class="form-control">
                                    <option value="{{ $usersInfo->email_verified }}" selected>Select Verify or Not</option>
                                    <option value="{{ __('1') }}">{{ __('Verify') }}</option>
                                    <option value="{{ __('0') }}">{{ __('Reject') }}</option>
                                </select>
                                @error('email_verify')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror
                                <br>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <input type="hidden" name="user_id" value="{{ $usersInfo->id }}">
                                <button type="submit" class="btn btn-outline-warning text-black">UPDATE</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{ URL::previous() }}" class="btn btn-success float-right"><-- Return</a>
                        </h4>

                        <span>
                            image
                        </span>
                        <img src="{{ asset('public/image/users') }}/{{ $usersInfo->user_image }}" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    @include('dashboard.users.partials.modal')
@endsection
@section('js')
    @include('dashboard.users.partials.js')
@endsection
