@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Buyer Binds Requests</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">binds</li>
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
                    <h4 class="card-title">Binds Data Export</h4>
                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Land Plot No</th>
                                    <th>Title Deed</th>
                                    <th>Land Owner</th>
                                    <th>Send On</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Land Plot No</th>
                                    <th>Title Deed</th>
                                    <th>Land Owner</th>
                                    <th>bind On</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($binds as $bind)
                                <tr>
                                    <td>{{ $bind->land->plot_no }}</td>
                                    <td>{{ $bind->land->title_deed }}</td>
                                    <td>
                                        @if ($bind->land->land_owner())
                                            <a class="text text-primary text-bold" href="{{ route('users.show',$bind->land->land_owner()->id) }}">{{ $bind->land->land_owner()->name }}</a>
                                        @endif

                                    </td>
                                    <td>
                                        {{ $bind->created_at->format("d/m/Y") }}
                                    </td>
                                    <td>
                                        {{ strtoupper($bind->status) }}
                                    </td>
                                    <td>

                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                        <i class="fa fa-arrow-down" aria-hidden="true">More</i>
                                                    </button>
                                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                                <a href="{{ route('binds.edit',$bind->id) }}" class="dropdown-item bg-warning"><i class="fa fa-pencil" aria-hidden="true">Edit</i></a>

                                                <form action="{{ route('binds.destroy',$bind->id) }}" method="post">
                                                    <button type="submit" class="dropdown-item bg-danger"><i class="fa fa-trash" aria-hidden="true">Delete</i></button>
                                                </form>
                                                <h6 class="dropdown-header">Process</h6>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item bg-success" href="#">Process Payments</a>
                                            </div>
                                        </div>
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
