<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\smsModel;
use DB;
use Response;
use Hash;
class smsController extends Controller
{
    public function index()
	{
		return view('welcome');
	}
	
	public function signUp(Request $request)
	{
			// Create a string of all alpha characters and randomly shuffle them
			$alpha   = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');

			// Create a string of all numeric characters and randomly shuffle them
			$numeric = str_shuffle('0123456789');

			// Grab the 4 first alpha characters + the 2 first numeric characters
			$code = substr($alpha, 0, 4) . substr($numeric, 0, 2);

			// Shuffle the code to get the alpha and numeric in random positions
			$otp = str_shuffle($code);
			
			$createSms = new smsModel;
			$createSms->u_name = $request->name;
			$createSms->u_email = $request->email;
			$createSms->u_mNumber = $request->phone;
			$createSms->u_password = Hash::make($request->password);
			$createSms->u_otp = $otp;
			
			
			$userData = array(
					'name' => $createSms->u_name,
					'mobile' => $createSms->u_mNumber,
					'message' => "Hi, You've successfully registered with joyweb.com, please login your account with this CODE:" .$otp ,
			);
			$result = $this->smsOtp($userData);			
			$createSms->save();
			return redirect('/');
	}
	
	public function smsOtp($data){
		
		$apiKey = urlencode('PR5SOQFNSWOvEbsF-LsqQPTe71VrDju3FSFEWQxJDaOHmdoXFOcFIp');
	   $numbers = $_POST['phone'];
	  // print_r($numbers);
	  // die;
	   $sender = urlencode('CDFCLO');
	   $datas =  implode( ", ", $data );
	   $data = "SUCCESS \n" . $datas;
	   $message = rawurlencode( $data);
	  
	   // Prepare data for POST request
	   $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
	   // Send the POST request with cURL
	   $ch = curl_init('https://api.textlocal.in/send/');
	   curl_setopt($ch, CURLOPT_POST, true);
	   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	   $response = curl_exec($ch);
	   curl_close($ch);	   
	   return true;
	   
	}
}
