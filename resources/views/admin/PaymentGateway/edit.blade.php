@extends('admin.layouts.index')

@section('head')
    <div class="content-header">
        <div class="container-fluid p-0">
            <div class="simple-row">
                <div class="">
                    <h1 class="m-0">Edit your PayFast Settings</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Payment Gateway</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div id="edit-payfast-settings" class="content">
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
                <div class="payfast-success-blob print-success-message alert alert-success" role="alert">
                    A simple success alert—check it out!
                </div>
            <div id="payfast-error-blob" class="alert alert-danger print-error-msg">
                <ul></ul>
            </div>
            <form id="edit-payfast-form-selector" method="POST" action="/admin/payment-gateway-settings/update">
                <input type="hidden" name="_token" id="laravel_csrf_token" value="{{ csrf_token() }}">
                <div class="simple-row">
                    <div class="simple-container d-flex justify-content-between">
                        <div class="simple-card">
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <h5>PayFast Live Credentials</h5>
                                    <div class="form-group d-block mt-2">
                                        <label for="live_merchant_id">Live Merchant ID</label>
                                        <input type="text"
                                               class="form-control"
                                               name="live_merchant_id"
                                               id="live_merchant_id"
                                               value="{{ $data->live_merchant_id }}"
                                               aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="live_merchant_key">Live Merchant Key</label>
                                        <input type="text"
                                               class="form-control"
                                               name="live_merchant_key"
                                               id="live_merchant_key"
                                               value="{{ $data->live_merchant_key }}"
                                               aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="live_passphrase">Live Passphrase</label>
                                        <input type="text"
                                               class="form-control"
                                               name="live_passphrase"
                                               id="live_passphrase"
                                               value="{{ $data->live_passphrase }}"
                                               aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div><!-- /.card -->
                        </div>
                        <div class="simple-card ml-4">
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <h5>PayFast Sandbox Credentials</h5>

                                    <div class="form-group  d-block mt-2">
                                        <label for="test_merchant_id">Test Merchant ID</label>
                                        <input type="text"
                                               class="form-control"
                                               name="test_merchant_id"
                                               id="test_merchant_id"
                                               value="{{ $data->test_merchant_id }}"
                                               aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="test_merchant_key">Test Merchant Key</label>
                                        <input type="text"
                                               class="form-control"
                                               name="test_merchant_key"
                                               id="test_merchant_key"
                                               value="{{ $data->test_merchant_key }}"
                                               aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="test_passphrase">Test Passphrase</label>
                                        <input type="text"
                                               class="form-control"
                                               name="test_passphrase"
                                               id="test_passphrase"
                                               value="{{ $data->test_passphrase }}"
                                               aria-describedby="emailHelp">
                                    </div>
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
                            <div class="card-header">Activate PayFast Test Mode</div>
                            <div class="card-body text-primary d-block">
                                <h5 class="card-title">Activating PayFast test mode will switch the system into sandbox mode</h5>
                                <div class="text-block-toggle">
                                    <p class="card-text text-black">When the system is in test mode, PayFast transactions will be able
                                        to go through without making an actual payment. This is used to test the system</p>
                                    <div class="toggle test-payment-toggle">
                                        <label class="switch">
                                            <input id="test_mode" type="checkbox" {{ $data->test_mode_active ? "checked" : "" }}>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div id="edit-payfast" class="button-container">
                                <a href="{{ route('admin.paymentSettings') }}" id="cancel-payfast-settings-btn" class="btn btn-outline-danger">Cancel</a>
                                <button id="save-payfast-settings-btn" class="btn btn-outline-secondary" type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
    </div>
@endsection
