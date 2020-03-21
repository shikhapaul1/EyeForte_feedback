<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\riview;
use App\login;
use App\detail;
use App\Mail\feedback;
use App\registration;
use Bitly\BitlyClient;

class feedbackController extends Controller
{
    public function feedback($name,$bill,$mobile,$email)
    {
    	return view('Feedback.Feedback_Form',compact('name','bill','mobile','email'));
    }

      public function Send()
    {
        return view('send_message.send_message');
    }

    public function Send_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bill' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $create = detail::create($request->all());

        echo url("/feedback/{$request->name}/{$request->bill}/{$request->email}/{$request->phone}");
        
        $bitlyClient = new BitlyClient('biitly token');

        $options = [
            'longUrl' => "http://127.0.0.1:8000/feedback/{$request->name}/{$request->bill}/{$request->email}/{$request->phone}",
        ];

        $response = $bitlyClient->shorten($options);

        print_r($response);

        $short_url = $response->data->url;
      
        $this->sendsms($request->phone,$short_url,$request->name);

        return back()->with('success','Successfully Message Sent');
        
    }


     public function sendSms($number,$short_url,$name)
    {
        $apiKey = "api key";
        // Message details
        $message ='Hey '.$name.', thank you for shopping with us! To help us best serve you and others, could you click on this '.$short_url.' to answer about your experience. Thanks';

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://msg.icloudsms.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=$apiKey",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "{\"smsContent\":\"$message\",\"routeId\":\"1\",\"mobileNumbers\":\"$number\",\"senderId\":\"DEMOOS\",\"signature\":\"signature\",\"smsContentType\":\"english\"}",
          CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "Content-Type: application/json"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
                
        if ($err) {
          return "cURL Error #:" . $err;
        } else {
           //dd($response);
          return $response;
        }
    }

    public function feedback_submit(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
    		'bill' => 'required',
    		'mobile' => 'required',
    		'email' => 'required',
    		'Social_Media' => 'required',
    		'satisfied' => 'required',
    		'Very' => 'required',
    		'Good' => 'required',
    		'Yes' => 'required',
    		'Every' => 'required',
    		'No' => 'required',
    		'selection' => 'required',
    		'shopping' => 'required',
    		'satisfy' => 'required',
    		'Once' => 'required',
    		'Comments' => 'required',
    		'Commentsssss' => 'required'
    	]);

    	$create = riview::create($request->all());


    	$data = array(
    		'name' => $request->name,
    		'Comments' => $request->Comments
    	);


    	return redirect()->route('Thankyou')->with('success',"Thank you For Sending Your Feedback");

    	
    }

    public function Thankyou()
    {
         return view('Thankyou.thankyou');
    }

    
    public function Login()
    {
        return view('Login.login');
    }

    public function Login_submit(Request $request)

         {

     $request->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::guard('login')->attempt($credentials)) {

            return redirect()->route('dashboard_version_1');
        }
        else
        {
          return redirect()->route('Login')->with('error','Username or Password is Incorrect');
        }

    }

    public function Logout()
    {
        Auth::guard('login')->logout();

        return redirect()->route('Login');
    }

    public function __construct()
    {
        $this->middleware('Logins', ['except' => ['Login', 'Login_submit','feedback','feedback_submit','Thankyou']]);
    }

    public function reviews()
    { 
        return view('Reviews.reviews');
    }
    public function test()
    {
        return view('test');
    }
}
