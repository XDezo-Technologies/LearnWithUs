<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\settings;

use Carbon\Carbon;
use Illuminate\Http\Request;
// init composer autoloader.
require '../vendor/autoload.php';

use Cixware\Esewa\Client;
use Cixware\Esewa\Config;

class EsewaController extends Controller
{
    //
    public function esewaPay(Request $request)
    {
        $pid = uniqid();
        $amount = $request->amount;

        Order::insert([
            'userID' => $request->userID,
            'name' => $request->name,
            'email' => $request->email,
            'product_id' => $pid,
            'courseID' => $request->courseID,
            'amount' => $request->amount,
            'esewa_status' => 'unverified',
            'created_at' => Carbon::now(),
        ]);



        // set success and failure callback urls
        $successUrl = url('/success');
        $failureUrl = url('/failure');

        // config for development
        $config = new Config($successUrl, $failureUrl);


        // initialize eSewa client
        $esewa = new Client($config);

        $esewa->process($pid, $amount, 0, 0, 0);
    }


    public function esewaPaySuccess()
    {
        //do when pay success.
        $pid = $_GET['oid'];
        $refId = $_GET['refId'];
        $amount = $_GET['amt'];
        $settings = settings::all();

        $order = Order::where('product_id', $pid)->first();
        //dd($order);
        $update_status = Order::find($order->id)->update([
            'esewa_status' => 'verified',
            'updated_at' => Carbon::now(),
        ]);
        if ($update_status) {
            //send mail,....
            //
            $msg = $_GET['amt'];
            $msg1 =  $_GET['oid'];
            $currentDate = Carbon::now()->format('F j, Y');
            return view('payment-success', compact('msg', 'msg1', 'settings', 'currentDate'));
        }
    }

    public function esewaPayFailed()
    {
        //do when payment fails.
        $pid = $_GET['pid'];
        $order = Order::where('product_id', $pid)->first();
        $settings = settings::all();
        //dd($order);
        $update_status = Order::find($order->id)->update([
            'esewa_status' => 'failed',
            'updated_at' => Carbon::now(),
        ]);
        if ($update_status) {
            //send mail,....
            //
            $msg = 'Failed';
            $msg1 = 'Payment is failed. Contact admin for support.';
            return view('payment-failed', compact('msg', 'msg1', 'settings'));
        }
    }
}
