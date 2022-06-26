@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h4 class="text-themecolor">Land Create</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('lands.index') }}">Lands</a></li>
                        <li class="breadcrumb-item active">Create</li>

                    </ol>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card col-md-12">
                <div class="card-body">
                    <h4 class="card-title">Add New Land</h4>
                    <p class="card-text">
                    <form action="{{ route('lands.store') }}" class="row" method="post">
                        @csrf
                        <div class="form-group col-md-6 ">
                            <label for="">Title Deed</label>
                            <input type="text" name="title_deed" id="title_deed"
                                class="form-control  @error('title_deed') is-invalid @enderror "
                                required
                                value="{{ old('title_deed') }}" placeholder="title deed Number">

                            @error('title_deed')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 ">
                            <label for="plot_no">PLot Number</label>
                            <input type="text" name="plot_no" id="plot_no"
                                class="form-control  @error('plot_no') is-invalid @enderror "
                                required value="{{ old('plot_no') }}"
                                placeholder="PLot Number">

                            @error('plot_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 ">
                            <label for="size">Land Size In Hecters</label>
                            <input type="text" name="size" id="size"
                                class="form-control  @error('size') is-invalid @enderror "
                                required value="{{ old('size') }}"
                                placeholder="title deed Number">

                            @error('size')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 ">
                            <label for="sheet_no">Sheet Number</label>
                            <input type="text" name="sheet_no" id="sheet_no"
                                class="form-control  @error('sheet_no') is-invalid @enderror "
                                required
                                value="{{ old('sheet_no') }}" placeholder="title deed Number">

                            @error('sheet_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>


                    </form>
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
