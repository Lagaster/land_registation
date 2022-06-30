@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Dashboard </h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="icon-screen-desktop"></i></h3>
                                    <p class="text-muted">My Lands</p>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="counter text-primary">{{ $mylandscount }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 85%; height: 6px;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="icon-note"></i></h3>
                                    <p class="text-muted">Land records</p>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="counter text-cyan">{{ $landscount }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-cyan" role="progressbar" style="width: 85%; height: 6px;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="icon-doc"></i></h3>
                                    <p class="text-muted">Land Rates</p>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="counter text-purple">{{ $landratescount }}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 85%; height: 6px;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="icon-bag"></i></h3>
                                    <p class="text-muted">Valuation Report</p>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="counter text-success">431</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="card col-md-12">
                <div class="card-body">
                    <h4 class="card-title">My Lands</h4>
                    <p class="card-text">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Owned At</th>
                                <th>Title Deed</th>
                                <th>Size</th>
                                <th>Sheet</th>
                                <th>Valuation</th>
                                {{-- <th>Land owns</th> --}}
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mylands as $owns)
                                <tr>
                                    <td>{{ $owns->start }}</td>
                                    <td>{{ $owns->land->title_deed }}</td>
                                    <td>{{ $owns->land->size }}</td>
                                    <td>{{ $owns->land->sheet_no }}</td>
                                    <td class="text text-info text-bold">
                                        @if ($owns->land->valuation_Price())
                                            {{ number_format($owns->land->valuation_Price()->total) . ' KSH' }}
                                        @endif

                                    </td>
                                    {{-- <td class="tetxt text-primary" >

                                            @if ($land->land_owner())
                                                {{  $land->land_owner()->pluck("name")  }}
                                            @endif
                                            </td> --}}
                                    <td><a href="{{ route('lands.show', $owns->land) }}">More</a></td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                    </p>
                </div>
            </div>

            <div class="card col-md-12">
                <div class="card-body">
                    <h4 class="card-title">Land rates record</h4>
                    <p class="card-text">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Land Plot No</th>
                                <th>Valuated By</th>
                                <th>Valuation Date</th>
                                <th>Valid Date</th>
                                <th>Given Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Land Plot No</th>
                                <th>Valuated By</th>
                                <th>Valuation Date</th>
                                <th>Valid Date</th>
                                <th>Given Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($landRates as $landRate)
                                <tr>
                                    <td>{{ Str::limit($landRate->land->plot_no, 20) }}</td>
                                    <td>{{ $landRate->verifiedBy->name }}</td>
                                    <td>{{ $landRate->verified_at }}</td>
                                    <td>{{ $landRate->valid_date }}</td>
                                    <td>{{ $landRate->given_date }}</td>
                                    <td>{{ $landRate->status }}</td>
                                    <td>
                                        <a class="btn btn-icon btn-info btn-outline" data-toggle="tooltip"
                                            data-original-title="View More"
                                            href="{{ route('landRates.show', $landRate) }}">
                                            <i class="fa fa-eye" aria-hidden="true">View</i>
                                        </a>
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
@endsection
