@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Seller Bids Requests</h4>
          
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">bids</li>
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
                    {{--  <h4 class="card-title">Bids Data Export</h4>
                    <h6 class="">Export data to Copy, CSV, Excel, PDF & Print</h6>  --}}
                    <h6 class="text text-info card-subtitle" >
                        Bids made on your lands
                    </h6>
                    <div class="table-responsive m-t-1">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Land Plot No</th>
                                    <th>Title Deed</th>
                                    <th>
                                        Bid By
                                    </th>
                                    <th>Bid On</th>
                                    <th>Status</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Land Plot No</th>
                                    <th>Title Deed</th>
                                    <th>
                                        Bid By
                                    </th>
                                    <th>bid On</th>
                                    <th>Status</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($binds as $bind)
                                <tr>
                                    <td>{{ $bind->land->plot_no }}</td>
                                    <td>{{ $bind->land->title_deed }}</td>
                                    <td>
                                        <a class="text text-info" href="{{ route('users.show',$bind->user) }}">
                                            {{ $bind->user->name }}
                                        </a>
                                    </td>

                                    <td>
                                        {{ $bind->created_at->format("d/m/Y") }}
                                    </td>
                                    <td>
                                        {{ strtoupper($bind->status) }}
                                    </td>
                                    <td>
                                        {{ $bind->description }}
                                    </td>
                                    <td>
                                       <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                                    <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                                </button>
                                        <div class="dropdown-menu" aria-labelledby="triggerId">


                                            {{-- <x-bind-accept>
                                            </x-bind-accept> --}}
                                            <form action="{{ route('binds.action',$bind) }}" class="dropdown-item" method="post">
                                                @csrf
                                                <input type="hidden" name="status"  value="approved" >
                                                <button type="submit" class="btn btn-success btn-block">Approved</button>
                                            </form>
                                            <div class="dropdown-divider"></div>
                                            <form action="{{ route('binds.action',$bind) }}" class="dropdown-item" method="post">
                                                @csrf
                                                <input type="hidden" name="status"  value="rejected" >
                                                <button type="submit" class="btn btn-danger btn-block">Reject</button>
                                            </form>
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
