@extends('admin.layouts.index')

@section('head')
    <div class="content-header">
        <div class="container-fluid p-0">
            <div class="simple-row">
                <div class="">
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
    <div id="show-payfast-settings" class="content">
        <div class="container-fluid">
            @if($data->test_mode_active)
                <div class="simple-row">
                    <div class="simple-container">
                        <div class="alert alert-secondary" role="alert">
                            Test mode is currently activated so PayFast will not ask for any card credentials on transactions
                        </div>
                    </div>
                </div>
            @endif
            <div class="simple-row">
                <div class="simple-container d-flex justify-content-between">
                    <div class="simple-card">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <h5 class="card-title">PayFast Live Credentials</h5>

                                <p class="card-text"><br>
                                    <b>Merchant_ID: </b><br> {{ $data->live_merchant_id }} <br>
                                    <b>Merchant_Key: </b><br> {{ $data->live_merchant_key }} <br>
                                    <b>Passphrase: </b><br> {{ $data->live_passphrase }} <br>
                                </p>
                            </div>
                        </div><!-- /.card -->
                    </div>
                    <div class="simple-card ml-4">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <h5 class="card-title">PayFast Sandbox Credentials</h5>

                                <p class="card-text"><br>
                                    <b>Merchant_ID: </b><br> {{ $data->test_merchant_id }} <br>
                                    <b>Merchant_Key: </b><br> {{ $data->test_merchant_key }} <br>
                                    <b>Passphrase: </b><br> {{ $data->test_passphrase }} <br>
                                </p>
                            </div>
                        </div><!-- /.card -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
                <div class="simple-row">
                    <div class="simple-container">
                        <div class="test-mode-save-container">
                            <div id="edit-payfast-bottom-card" class="card border-primary mb-3">
                                <div class="card-header">Activate Live PayFast Credentials</div>
                                <div class="card-body text-primary d-block">
                                    <h5 class="card-title">Activate PayFast will switch the system into live payments</h5>
                                    <div class="text-block-toggle">
                                        <p class="card-text text-black">When the system is in test mode, PayFast transactions will be able
                                            to go through without making an actual payment. This is used to test the system</p>
                                        <div class="toggle test-payment-toggle">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('admin.paymentSettings.edit') }}" id="edit-payfast-settings-btn" class="btn btn-outline-secondary">Edit</a>
                        </div>
                    </div>
                </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection
