@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Land Purchase Payments</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('binds.buyer') }}">Binds</a></li>


                        <li class="breadcrumb-item active">Payments</li>
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
                        <h4 class="card-title">
                            <span>
                                Target Amount :
                                @if ($land->valuation_Price())
                                    <span
                                        class="text text-info">{{ number_format($land->valuation_Price()->total) }}
                                    </span>
                                @endif


                            </span>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info float-right " data-toggle="modal"
                                data-target="#modelIdpayment">
                                Make Payment
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modelIdpayment" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Make Payment </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <table class="table">
                                                    <thead>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row"> Amount Remaining :</td>
                                                            <td> @if ($land->valuation_Price())
                                                                {{ number_format($land->valuation_Price()->total - $paymentTotal) }}
                                                            @endif</td>

                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Account Number</td>
                                                            <td>{{ $land->land_owner()->phone }}</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Account Holder</td>
                                                            <td> {{ $land->land_owner()->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Contact</td>
                                                            <td><a href="mailto:{{ $land->land_owner()->email }}">{{ $land->land_owner()->email }}</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div>
                                                    <form action="{{ route('payments.store') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="land_id" value="{{ $land->id }}" >
                                                        <input type="hidden" name="paid_to" value="{{ $land->land_owner()->id }}" >
                                                        <div class="form-group">
                                                          <input type="number" name="phone" id=""
                                                          value="{{ old('phone') }}"
                                                          class="form-control  @error('phone') is-invalid @enderror" placeholder="Your Phone Number">
                                                           @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                        </div>
                                                        <div class="form-group">
                                                          {{-- <label for="amount">Amount To Pay</label> --}}
                                                          <input type="number"   value="{{ old('amount') }}" name="amount" id="amount" class="form-control  @error('amount') is-invalid @enderror" placeholder="Amount to pay">
                                                           @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                        </div>
                                                        <button type="submit" class="btn btn-success">Process Payment</button>

                                                    </form>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Land Plot No</th>
                                        <th>Title Deed</th>
                                        <th>Land Owner</th>
                                        <th>Paid To</th>
                                        <th>Paid On</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Land Plot No</th>
                                        <th>Title Deed</th>
                                        <th>Land Owner</th>
                                        <th>Paid To</th>
                                        <th>Paid On</th>
                                        <th>Amount</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($payments as $payment)
                                        <tr>
                                            <td>{{ $payment->land->plot_no }}</td>
                                            <td>{{ $payment->land->title_deed }}</td>
                                            <td>
                                                @if ($payment->land->land_owner())
                                                    {{ $payment->land->land_owner()->name }}
                                                @endif


                                            </td>
                                            <td>
                                                {{ $payment->paidTo->name }}
                                            </td>
                                            <td>
                                                {{ $payment->created_at->format('d/m/Y') }}
                                            </td>
                                            <td>{{ number_format($payment->amount) }}</td>
                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="2">Total</td>
                                        <td colspan="3" class="text text-primary h2">
                                            {{ number_format($paymentTotal) }}</td>
                                    </tr>

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
