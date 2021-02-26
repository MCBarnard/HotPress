<?php

namespace App\Http\Controllers;

use App\Models\Payfast;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Validator;

class PaymentGatewayController extends Controller
{
    public function index () {
        Log::debug(__METHOD__ . ": BOF");
        $data = Payfast::get()->first();
        Log::debug(__METHOD__ . ": EOF");
        return view('admin.PaymentGateway.show', ['data' => $data]);
    }

    public function edit () {
        Log::debug(__METHOD__ . ": BOF");
        $data = Payfast::get()->first();
        Log::debug(__METHOD__ . ": EOF");
        return view('admin.PaymentGateway.edit', ['data' => $data]);
    }

    public function update (Request $request) {
        Log::debug(__METHOD__ . ": BOF");
        $validator = Validator::make($request->all(), [
            'live_merchant_id' => 'required|numeric|digits_between:7,11',
            'live_merchant_key' => 'required|string|alpha_num|min:10|max:20',
            'live_passphrase' => 'required|string|min:12|max:32',
            'test_merchant_id' => 'required|numeric|digits_between:7,11',
            'test_merchant_key' => 'required|string|alpha_num|min:10|max:20',
            'test_passphrase' => 'required|string|min:12|max:32',
            'test_mode_active' => 'required|string|in:true,false'
        ]);

        if ($validator->passes()) {
            $request['test_mode_active'] = $request->test_mode_active === "true" ? 1 : 0;
            Payfast::get()->first()->update($request->all());

            Log::debug(__METHOD__ . ": EOF");
            return response()->json([
                'code' => Response::HTTP_CREATED,
                'success'=>'Successfully updated the PayFast credentials!'
            ]);
        }

        Log::debug(__METHOD__ . ": EOF");
        return response()->json([
            'code' => Response::HTTP_UNPROCESSABLE_ENTITY,
            'error'=>$validator->errors()->all()
        ]);
    }
}
