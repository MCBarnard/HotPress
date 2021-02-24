@extends('admin.layouts.index')

@section('head')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
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
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5>PayFast Live Credentials</h5>
                            <div class="form-group d-block mt-2">
                                <label for="exampleInputEmail1">Live Merchant ID</label>
                                <input type="text"
                                       class="form-control"
                                       name="live_merchant_id"
                                       id="exampleInputEmail1"
                                       value="{{ $data->live_merchant_id }}"
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="merchant-key">Live Merchant Key</label>
                                <input type="text"
                                       class="form-control"
                                       name="live_merchant_key"
                                       id="merchant-key"
                                       value="{{ $data->live_merchant_key }}"
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="live-passphrase">Live Passphrase</label>
                                <input type="text"
                                       class="form-control"
                                       name="live_passphrase"
                                       id="live-passphrase"
                                       value="{{ $data->live_passphrase }}"
                                       aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5>PayFast Sandbox Credentials</h5>

                            <div class="form-group  d-block mt-2">
                                <label for="exampleInputEmail1">Test Merchant ID</label>
                                <input type="text"
                                       class="form-control"
                                       name="live_merchant_id"
                                       id="exampleInputEmail1"
                                       value="{{ $data->test_merchant_id }}"
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="merchant-key">Test Merchant Key</label>
                                <input type="text"
                                       class="form-control"
                                       name="live_merchant_key"
                                       id="merchant-key"
                                       value="{{ $data->test_merchant_key }}"
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="live-passphrase">Test Passphrase</label>
                                <input type="text"
                                       class="form-control"
                                       name="live_passphrase"
                                       id="live-passphrase"
                                       value="{{ $data->test_passphrase }}"
                                       aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div id="edit-payfast-bottom-card" class="card border-primary mb-3 col-md-8">
                    <div class="card-header">Header</div>
                    <div class="card-body text-primary">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection
