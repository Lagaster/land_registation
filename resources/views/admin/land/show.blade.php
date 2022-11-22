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
                <h4 class="text-themecolor">Thika Land</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">lands</li>
                    </ol>
                    <a href="{{ route('lands.create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i
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
            <div class="card col-md-6">
                <div class="card-body">
                    <h4 class="card-title">Title Deed : {{ $land->title_deed }}</h4>
                    <p class="card-text">
                        <table class="table table-striped table-inverse">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>

                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Plot no :</td>
                                        <td class="text text-primary" >{{ $land->plot_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>Size</td>
                                        <td>{{ $land->size }} Hecters</td>
                                    </tr>
                                    <tr>
                                        <td>Sheet No </td>
                                        <td>
                                            {{ $land->sheet_no }}
                                        </td>
                                    </tr>


                                </tbody>
                        </table>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Current Owner</h4>
                        <p class="card-text">
                            <table class="table table-bordered table-inverse ">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        @if ($land->land_owner())
                                        <tr>
                                            <td scope="row">{{ $land->land_owner()->name }}</td>
                                            <td>{{ $land->land_owner()->phone }}</td>
                                            <td>{{ $land->land_owner()->email }}</td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td class="text text-warning" colspan="3" >
                                                {{ __("no Land User Records") }}
                                            </td>
                                        </tr>

                                        @endif

                                        <tr>
                                            <td colspan="3" >

                                                @if ($land->land_owner())
                                                @if ($land->land_owner()->id !== Auth::user()->id)

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-primary text-bold btn-lg" data-toggle="modal" data-target="#modelbind">
                                                    Bind To Buy
                                                </button>
                                                
                                                    
                                                @endif

                                                @endif


                                               

                                                <!-- Modal -->
                                                <div class="modal fade" id="modelbind" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Bind To Buy</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                            </div>
                                                            <form action="{{ route('binds.store') }}" method="post">
                                                            <div class="modal-body">
                                                                Land Valuation Price :
                                                                 @if ($land-> valuation_Price())
                                                                 <span class="text text-primary" >{{ number_format($land-> valuation_Price()->total)  }} KSH</span>

                                                                @endif
                                                                @csrf
                                                                <input type="hidden" class="form-control" name="land_id" id="land_id" value="{{ $land->id }}" >


                                                                    <div class="form-group">
                                                                      <label for="description">Write note to Land Owner</label>
                                                                      <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') }}</textarea>
                                                                    </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Send &#38; bind</button>
                                                            </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>


                                    </tbody>
                            </table>
                        </p>
                    </div>
                </div>

            </div>
            <div class="card col-md-6">
                <div class="card-body">
                    <h4 class="card-title">Land Rates</h4>
                    <p class="card-text">
                        <table class="table table-hover table-inverse table->bordered table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Valid Date</th>
                                    <th>given date</th>
                                    <th>Status</th>
                                    <th>Verified</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($land->landRates as $landrate)
                                    <tr>
                                        <td scope="row">{{ date("d/m/Y", strtotime($landrate->valid_date) ) }}</td>
                                        <td>{{ date("d/m/Y", strtotime($landrate->given_date) ) }}</td>
                                        <td> <a href="{{ '/storage/landrates/'.$landrate->file }}" class="text text-primary" >{{ strtoupper( $landrate->status) }}</a> </td>
                                        <td>{{ date("d/m/Y", strtotime($landrate->verified_at) ) }}</td>
                                    </tr>

                                    @endforeach


                                </tbody>
                        </table>
                    </p>
                </div>
            </div>
            <div class="card col-md-6">
                <div class="card-body">
                    <h4 class="card-title">Land Stamp Duties</h4>
                    <p class="card-text">
                        <table class="table table-hover table-inverse table->bordered table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Owned By</th>
                                    <th>Status</th>
                                    <th>Verified</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($land->stamp_duties as $stamp_duties)
                                    <tr>
                                        <td> <a class="text text-primary" href="{{ route('users.show',$stamp_duties->user) }}">{{ $stamp_duties->user->name }}</a> </td>
                                        <td> <a href="{{ '/storage/stamp_duties/'.$stamp_duties->file }}" class="text text-primary" >{{ strtoupper( $stamp_duties->status) }}</a> </td>

                                        <td>{{ date("d/m/Y", strtotime($stamp_duties->verified_at) ) }}</td>
                                    </tr>

                                    @endforeach


                                </tbody>
                        </table>
                    </p>
                </div>
            </div>
            <div class="card border-primary col-md-12 ">
              <div class="card-body">
                <h4 class="card-title">valuation_reports</h4>
                <p class="card-text">
                    <table class="table table-hover table-inverse ">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Valuated</th>
                                <th>Land</th>
                                <th>Improvement</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($land->valuation_reports as $report)
                                <tr>
                                    <td class="text text-primary" scope="row">{{ date("d/m/Y", strtotime($report->evaluated_at) ) }}</td>
                                    <td>{{ number_format($report->landprice ) }}</td>
                                    <td>{{ number_format($report->improvement ) }}</td>
                                    <td> <a href="{{ '/storage/valuation_reports/'.$report->file }}" class="text text-info" >{{ strtoupper( $report->status) }}</a> </td>

                                    <td class="text text-primary" >{{ number_format($report->total ) }}</td>
                                    <td>#</td>
                                </tr>

                                @endforeach


                            </tbody>
                    </table>
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
