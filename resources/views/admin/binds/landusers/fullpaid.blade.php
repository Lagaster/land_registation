@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Confirm Land Land Transfer</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('binds.buyer') }}">Binds</a></li>


                        <li class="breadcrumb-item active">Confirm</li>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Confirm All Completed Paid land </h4>
                        <p class="card-text">
                            <table id="example23" class="table table-hover table-inverse">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>User</th>
                                        <th>Title Deed</th>
                                        <th>Plot No.</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($landusers as $landuser)
                                        <tr>
                                            <td scope="row">{{ $landuser->user->name }}</td>
                                            <td scope="row">{{ $landuser->land->title_deed }}</td>
                                            <td scope="row">{{ $landuser->land->plot_no }}</td>
                                            <td scope="row">{{ $landuser->status }}</td>
                                            <td>
                                                <form action="{{ route('confirm.land.transfer.update',$landuser) }}" method="post">
                                                    <button type="submit" class="btn btn-info">confirm</button>
                                                </form>
                                            </td>
                                        </tr>

                                        @endforeach
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
@endsection
