<?php

namespace App\Http\Controllers;

use App\Models\Payfast;
use Illuminate\Http\Request;

class PaymentGatewayController extends Controller
{
    public function index () {
        $data = Payfast::get()->first();
        return view('admin.paymentgateway.show', ['data' => $data]);
    }

    public function edit () {
        $data = Payfast::get()->first();
        return view('admin.paymentgateway.edit', ['data' => $data]);
    }

    public function update (Request $request) {

    }
}
