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
                    <a href="{{ route('users.create') }}" class="btn btn-info d-none disabled d-lg-block m-l-15"><i
                            class="fa fa-plus-circle"></i> Create New</a>
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
                <h4 class="card-title">Add New User</h4>
                <p class="card-text">
                    <form action="{{ route('users.store') }}" class="row" enctype="multipart/form-data" method="post">
                        <div class="form-group col-md-4">
                            @csrf
                          <label for="">User Name</label>
                          <input type="text" name="name" id="" value="{{ old('name') }}" class="form-control" placeholder="User Name" >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="image">User Image</label>
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="" placeholder="User Profile image" aria-describedby="fileHelpId">

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        </div>

                        <div class="form-group col-md-4">
                            <label for="">User Email</label>
                            <input type="email" name="email" id="" value="{{ old('email') }}" class="form-control" placeholder="User email" >
                          </div>

                          <div class="form-group col-md-4">
                            <label for="">User Phone</label>
                            <input type="text" name="phone" id="" value="{{ old("phone") }}" class="form-control" placeholder="User phone" >
                          </div>

                          <div class="form-group col-md-4">
                            <label for="">User DOB</label>
                            <input type="date" name="dob" value="{{ old('dob') }}" id="" class="form-control" placeholder="User dob" >
                          </div>

                          <div class="form-group col-md-4">
                            <label for="">User National Id</label>
                            <input type="text" name="national_id" value="{{ old("national_id") }}" id="" class="form-control" placeholder="National Id" >
                          </div>

                          <div class="form-group col-md-4">
                            <label for="">User ID Image</label>
                            <input type="file" name="id_image" value="{{ old('id_image') }}" id="" class="form-control" placeholder="User Id Image" >
                          </div>

                          <div class="form-group col-md-4">
                            <label for="">User Address</label>
                            <input type="text" name="address" id="" value="{{ old('address') }}" class="form-control" placeholder="User address" >
                          </div>

                          <div class="form-group col-md-4">
                            <label for="">User KRA PIN</label>
                            <input type="text" name="kra_pin" id="" value="{{ old('kra_pin') }}" class="form-control" placeholder="User KRA PIN" >
                          </div>



                          <div class="form-group col-md-4">
                            <label for="">User gender</label>
                            <select name="gender" id="" >
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="">User Role</label>
                            <select name="role" id="" >
                                <option value="admin">Admin</option>
                                <option value="user">user</option>
                                <option value="registrar">Land registrar</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
        .my-flex{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            align-items: center;
            /* background: green */
        }
        .card-img-top{
            height: 10rem;
            width: 80%;
            border: 1px sold black;
            border-radius: 2rem;

        }
        .special-buttons{
            display: flex;
            justify-content: space-around
        }
        .modal-dialog{
            background: rgb(237, 226, 226);
        }
    </style>
@endpush
