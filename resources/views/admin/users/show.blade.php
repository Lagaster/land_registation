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
                <h4 class="text-themecolor">System User</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>

                        <li class="breadcrumb-item active">User show</li>
                    </ol>
                    <a href="{{ route('users.create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i
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
            <div class="col-4">
                <div class="card border-dark my-flex">
                  <img class="card-img-top  " src="{{ $user->user_profile() }}" alt="">
                  <div class="card-body">
                    <h4 class="card-title text text-center">{{ $user->name }} <a href="mailto:{{ $user->email }}">{{ $user->email }}</a> </h4>
                    <h4 class=" text text-center" > <span class="badge badge-info">{{Str::upper($user->role)  }}</span> </h4>
                    <p class="card-text">

                        <div>Phone:  <span class=" text text-bold" >{{ $user->phone }} </span>  </div>
                        <div>Address:  <span class=" text text-bold" >{{ $user->address }} </span> </div>
                        <div>Gender:  <span class=" text text-bold" >{{ $user->gender }}</div>
                        <div>National Id:  <span class=" text text-bold" >{{ $user->national_id }} </span> </div>
                        <div>DOB:  <span class=" text text-bold" >{{ $user->dob }} </span> </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modelId">
                          View More
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">

                                            {{ $user->name ." Profile Info" }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        KRA PIN {{ $user->kra_pin }}
                                        <div>
                                            <img src="{{ $user->national_id_Image()}}" alt="National Id Image">
                                        </div>
                                    </div>
                                    <div class="modal-footer">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>
                    <div>
                        <div class="special-buttons" >
                            <div>
                                                            <a class="btn btn-outline-purple" href="{{ route('users.edit',$user) }}">Edit User</a>

                            </div>
                            <div>
                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modelDeleteId">
                              Delete User
                            </button>
                            </div>
                            <!-- Button trigger modal -->


                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="modelDeleteId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete User Account</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        <h2 class="text text-center text-danger" >Warning!!</h2>
                                        <h4>
                                            THis Action is permanent and can not ne reversed once done.
                                        </h4>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                        <form action="{{ route('users.destroy',$user) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Lands Owns</h4>
                        <p class="card-text">
                            <table class="table table-hover table-bordered table-responsive">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Title Deed</th>
                                        <th>Size</th>
                                        <th>Since</th>
                                        <th>Until</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($user->lands as $land)
                                        <tr>
                                            <td scope="row">{{ $land->title_deed }}</td>
                                            <td>{{ $land->size . "Hectares"}}</td>
                                            <td>{{ $land->pivot->start }}</td>
                                            <td>{{ $land->pivot->end}}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td  rowspan="4" >
                                                No record yet
                                            </td>
                                        </tr>

                                        @endforelse


                                    </tbody>
                            </table>
                        </p>
                    </div>
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
