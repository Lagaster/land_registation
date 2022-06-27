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
            <h4 class="text-themecolor">LandRate Updates</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('landRates.index') }}">LandRates</a>
                    </li>

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
                <h4 class="card-title">Update Land Rate</h4>
                <p class="card-text">
                <form action="{{ route('landRates.update',$landRate) }}" class="row" enctype="multipart/form-data"
                    method="post">
                    @csrf
                    @method('PUT')

                    <div class="row">


                    <div class="form-group col-md-6">

                        <label for="">Land Title</label>
                        <select class="form-control custom-select" name="land_id" >
                            <option value="{{$landRate->land->id}}">{{$landRate->land->title_deed}}</option>
                            @foreach ($lands as $land)
                            <option value="{{$land->id}}">{{$land->title_deed}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="file">LandRate File</label>
                        <input type="file" class="form-control-file @error('file') is-invalid @enderror" name="file"
                            id="" placeholder="LandRate File" aria-describedby="fileHelpId">

                        @error('file')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <div class="form-group col-md-6">
                        <label for="">Valid Date </label>
                        <input type="date" value="{{$landRate->valid_date}}" name="valid_date" id="" value="{{ old('valid_date') }}" class="form-control"
                            placeholder="valid date">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="">Given Date</label>
                        <input type="date" value="{{$landRate->given_date}}" name="given_date" id="" value="{{ old(" given_date") }}"
                            class="form-control" placeholder="Improvement amount">
                    </div>

                        <input type="text" value="{{$landRate->status}}" name="status" hidden>
                    </div>
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
        display: ;
        justify-content: space-around
    }

    .modal-dialog {
        background: rgb(237, 226, 226);
    }
</style>
@endpush
