@extends('admin.layouts.index')

@section('head')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Payment Gateway Settings Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Payment Gateway</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">PayFast Live Credentials</h5>

                            <p class="card-text"><br>
                                <b>Merchant_ID: </b> {{ $data->live_merchant_id }} <br>
                                <b>Merchant_Key: </b> {{ $data->live_merchant_key }} <br>
                                <b>Passphrase: </b> {{ $data->live_passphrase }} <br>
                            </p>
                            <a href="{{ route('admin.paymentSettings.edit') }}" class="card-link">Edit</a>
                        </div>
                    </div><!-- /.card -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">PayFast Sandbox Credentials</h5>

                            <p class="card-text"><br>
                                <b>Merchant_ID: </b> {{ $data->test_merchant_id }} <br>
                                <b>Merchant_Key: </b> {{ $data->test_merchant_key }} <br>
                                <b>Passphrase: </b> {{ $data->test_passphrase }} <br>
                            </p>
                            <a href="#" class="card-link">Edit</a>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
