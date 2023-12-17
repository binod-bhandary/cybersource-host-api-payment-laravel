<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Log;
class CSPaymentHostController extends Controller
{

    public function index()
    {
        $data = [];
        $data['access_key'] = env('HS_ACCESS_KEY');
        $data['profile_id'] = env('HS_PROFILE_ID');
        $data['transaction_uuid'] = Uuid::uuid4()->toString();
        $data['signed_date_time'] = gmdate("Y-m-d\TH:i:s\Z");
        // $data['transaction_uuid'] = "6b88d26a-278e-45b7-a4f5-efec6d8262ii";
        // $data['signed_date_time'] = "2023-03-22T10:21:56Z";
        return view('cybersource.hostpay', compact('data'));
    }
    public function confirm(Request $request)
    {
        $data = $request->except('_token');
        $signed_array =explode(',',$request->signed_field_names);
        $signed_string = '';
        foreach ($signed_array as $key => $value) {
            $key_val = $value.'='.$request[$value];
            if ($key == 0)
                $signed_string = $key_val;
            else
                $signed_string = $signed_string.','.$key_val;
        }
        $hash_code = hash_hmac('sha256', $signed_string, env('HS_SECRET_KEY'), true);
        $hash_encode = base64_encode($hash_code);
        $data['signature'] = $hash_encode;

        return view('cybersource.pay')->with(['form_data' => $data]);
    }

    public function successful(Request $request)
    {
        Log::info(['CSResponsePaymentLog'=>$request->all()]);

        $response = $request->all();
        return view('cybersource.payment-successful', compact('response'));
    }
}
