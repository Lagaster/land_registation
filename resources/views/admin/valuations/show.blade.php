@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Valuations</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
                    <li class="breadcrumb-item active"> <a href="{{route('valuationReports.index')}}">valuations</a> </li>
                </ol>
                <a type="button" href="{{route('valuationReports.create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Info box Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- <h3 class="">Rounded Chair</h3>
                    <h6 class="card-subtitle">globe type chair for rest</h6> --}}
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            {{-- <h3 class="box-title m-t-40">General Info</h3> --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Verified by:</td>
                                            <td> {{$valuationReport->verifiedBy->name}} </td>
                                        </tr>
                                        <tr>
                                            <td>Valuated at:</td>
                                            <td> {{$valuationReport->verified_at}} </td>
                                        </tr>
                                        <tr>
                                            <td>Land Price</td>
                                            <td> {{ number_format($valuationReport->landprice) }} </td>
                                        </tr>
                                        <tr>
                                            <td>Improvement</td>
                                            <td> {{ number_format($valuationReport->improvement) }} </td>
                                        </tr>
                                        <tr>
                                            <td>Total </td>
                                            <td> {{ number_format($valuationReport->total) }} </td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td> {{$valuationReport->status}} </td>
                                        </tr>
                                        <tr>
                                            <th>Download file</th>
                                            <td><a class="btn btn-primary round-info" href="/storage/valuations/{{ $valuationReport->file }}">View</a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            {{-- <h3 class="box-title m-t-40">General Info</h3> --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Land Title Deed</td>
                                            <td>{{ $valuationReport->land->title_deed }}</td>
                                        </tr>
                                        <tr>
                                            <td>Land Plot Number</td>
                                            <td>{{ $valuationReport->land->plot_no }}</td>
                                        </tr>
                                        <tr>
                                            <td>Land Size</td>
                                            <td>{{ $valuationReport->land->size }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <h3 class="box-title ">Actions</h3>
                            <div class="row">

                                @can('update', $valuationReport)
                                <div>
                                    <a class="btn btn-info btn-rounded m-r-5" href="{{route('valuationReports.edit',$valuationReport->id)}}" data-toggle="tooltip" title="" > Edit  </a>
                                </div>

                                <div>
                                    <form action="{{route('approve.valuation',$valuationReport->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" hidden name="status" value="approved" id="">
                                        <input type="text" hidden name="verified_by" value="{{(Auth::user()->id)}}" id="">
                                        <input type="text" hidden name="verified_at" value="{{now()}}" id="">

                                        <button class="btn btn-success btn-rounded m-r-5" data-toggle="tooltip" title="" data-original-title="Approve"> Approve  </button>
                                    </form>
                                </div>
                                <div>
                                    <form action="{{route('approve.valuation',$valuationReport->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" hidden name="status" value="rejected" id="">
                                        <input type="text" hidden name="verified_by" value="{{(Auth::user()->id)}}" id="">
                                        <input type="text" hidden name="verified_at" value="{{now()}}" id="">
                                        <button class="btn btn-warning btn-rounded m-r-5" data-toggle="tooltip" title="" data-original-title="Reject"> Reject </button>
                                    </form>
                                </div>
                                <div>
                                    <form action="{{route('valuationReports.destroy',$valuationReport)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-rounded m-r-5" data-toggle="tooltip" title="" data-original-title="Reject"> Delete </button>
                                    </form>
                                </div>

                                @endcan


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
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
