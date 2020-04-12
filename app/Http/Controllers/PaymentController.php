<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;

use App\User;
use App\Program;
use App\Payment;
use App\Payment_status;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'IsStudent', 'Active']);
    }


    public function getMakePaymentStu()
    {
        $student = Auth()->user();
        $program = $student->program()->latest()->first();
        $pay = $student->program()->latest()->first()->pivot->payment_status;
        $payment_statuz = Payment_status::find($pay);
        return view('student.payments.makepayment')->with('program',$program)->with('student',$student)->with('payment_statuz',$payment_statuz);
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        if($paymentDetails['data']['status'] == 'success');{
        $student = Auth()->user();
        $program = $student->program()->latest()->first();

        $payment = new Payment();
        $payment->user_id = $student->id;
        $payment->program_id = $paymentDetails['data']['metadata']['program_id'];
        $payment->price = $paymentDetails['data']['amount']/100;
        $payment->purpose = $paymentDetails['data']['metadata']['purpose'];
        $payment->year = now()->year;
        $payment->save();

        $program_id = $paymentDetails['data']['metadata']['program_id'];

        #Save Payment status on user's table
        $user = User::find($student->id);
        $user->program()->updateExistingPivot($program_id, ['payment_status'=> 2]);

        

       
        return redirect('/dashboard')->with('success', 'You have successfully paid for your current program');
        }
        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }



}