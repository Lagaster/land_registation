@extends('layouts.admin')
@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">System User Create</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>

                        <li class="breadcrumb-item active">User show</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="card border-success col-md-12">
                <div class="card-body">
                    <h4 class="card-title">Edit Profile Info</h4>
                    <p class="card-text">
                        @if (!auth()->user()->isUser())
                            <form action="{{ route('users.update', $user) }}" class="row" enctype="multipart/form-data"
                                method="post">
                                @method('PUT')
                                <div class="form-group col-md-4">
                                    @csrf
                                    <label for="">User Name</label>
                                    <input type="text" name="name" id="" value="{{ $user->name }}"
                                        class="form-control" placeholder="User Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="image">User Image</label>
                                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                        name="image" id="" placeholder="User Profile image"
                                        aria-describedby="fileHelpId">

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">User Email</label>
                                    <input type="email" name="email" id="" value="{{ $user->email }}"
                                        class="form-control" placeholder="User email">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">User Phone</label>
                                    <input type="text" name="phone" id="" value="{{ $user->phone }}"
                                        class="form-control" placeholder="User phone">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">User DOB</label>
                                    <input type="date" name="dob" value="{{ $user->dob }}" id=""
                                        class="form-control" placeholder="User dob">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">User National Id</label>
                                    <input type="text" name="national_id" value="{{ $user->national_id }}" id=""
                                        class="form-control" placeholder="National Id">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">User ID Image</label>
                                    <input type="file" name="id_image" value="{{ $user->id_image }}" id=""
                                        class="form-control" placeholder="User Id Image">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">User Address</label>
                                    <input type="text" name="address" id="" value="{{ $user->address }}"
                                        class="form-control" placeholder="User address">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="">User KRA PIN</label>
                                    <input type="text" name="kra_pin" id="" value="{{ $user->kra_pin }}"
                                        class="form-control" placeholder="User KRA PIN">
                                </div>



                                <div class="form-group col-md-4">
                                    <label for="">User gender</label>
                                    <select name="gender" id="">
                                        <option value="{{ $user->gender }}" selected>{{ strtoupper($user->gender) }}
                                        </option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">User Role</label>
                                    <select name="role" id="">

                                        <option value="{{ $user->role }}" selected>{{ strtoupper($user->role) }}
                                        </option>
                                        <option value="admin">Admin</option>
                                        <option value="user">user</option>
                                        <option value="registrar">Land registrar</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        @else
                            <form action="{{ route('user.update',$user) }}" method="post" enctype="multipart/form-data" >
                              @method('PUT')
                              @csrf
                                <div class="row">

                                    <div class="form-group col-md-4">
                                        <label for="image">Profile Image</label>
                                        <input type="file"
                                            class="form-control-file @error('image') is-invalid @enderror" name="image"
                                            id="" placeholder="User Profile image"
                                            aria-describedby="fileHelpId">

                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="">User Email</label>
                                        <input type="email" name="email" id="" value="{{ $user->email }}"
                                            class="form-control" placeholder="User email">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="">User Phone</label>
                                        <input type="text" name="phone" id="" value="{{ $user->phone }}"
                                            class="form-control" placeholder="User phone">
                                    </div>

                                </div>
                                <div class="row password-updated ">
                                    <div class="col-md-12 text text-warning ">If You need to update password</div>
                                    <div class="col-md-12 row">
                                        {{--  previous password  --}}
                                        <div class="form-group col-md-4">
                                            <label for="">Previous Password</label>
                                            <input type="password" name="old_password" id="old_password"
                                                value="" 
                                                class="form-control @error('old_password') is-invalid @enderror"
                                                placeholder="Previous Password">
                                                 @error('old_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        {{--  new password  --}}
                                        <div class="form-group col-md-4">
                                            <label for="">New Password</label>
                                            <input type="password" name="password" id="" value=""
                                            class="form-control @error('password') is-invalid @enderror"
                                                placeholder="New Password">
                                                 @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        {{--  confirm password  --}}
                                        <div class="form-group col-md-4">
                                            <label for="">Confirm Password</label>
                                            <input type="password" name="confirm_password" id="" value=""
                                            class="form-control @error('confirm_password') is-invalid @enderror" 
                                                placeholder="Confirm Password">
                                                 @error('confirm_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>

                                </div>



                                <button type="submit" class="btn btn-info">Update</button>



                            </form>
                        @endif


                    </p>
                </div>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->

        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection
@push('styles')
    <style>
        .my-flex {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            align-items: center;
            /* background: green */
        }

        .card-img-top {
            height: 10rem;
            width: 80%;
            border: 1px sold black;
            border-radius: 2rem;

        }

        .special-buttons {
            display: flex;
            justify-content: space-around
        }

        .modal-dialog {
            background: rgb(237, 226, 226);
        }
        .password-updated{
          background-color: #f5f5f5;
          padding: 1rem;
        }
        button[type="submit"]{
          margin-top: 1rem;
          padding: 0.5rem 1rem;
        }
    </style>
@endpush
