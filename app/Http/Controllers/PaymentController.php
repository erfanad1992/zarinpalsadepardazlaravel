<?php

namespace App\Http\Controllers;

use App\Payment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{

    public  function index(){

        // $user = DB::select('select * from users');
        // $user = DB::insert('insert into users (fullname , email , mobile ) values (? , ? , ?)',['حسن', 'email','09121111111']);
        // $user = DB::update('update users set fullname = ? where id = ? ',['ali','1']);
        // $user = DB:: select('select email from users');
        // $user = User::find(1);
        $users = User::all();

        $merchantcodes=DB::table('merchants')->latest()->first();
        $merchantId=$merchantcodes->merchantCode;

        dd($merchantId);
        // return view('welcome',compact('users'));

    }


    public function getAmountFromView(Request $request){
        $name = $request->input('fullname');
        $amountvalue= $request->amount;


        return $amountvalue;
    }



    public  function payment(Request $request){



        $rules=[
            'fullname'=>'required',
            'amount' =>'required|between:1100,50000000|numeric',
            'description'=> 'required|max:250',
            'email' => 'email',
            'mobile' => 'numeric|digits:11'

        ];
        $customMessages = [
            'required' => 'ورودی نباید خالی باشد',
            'numeric' => 'شماره تلفن همراه باید بصورت عددی وارد شوند',
            'max' => 'توضیحات ماکزیمم ۲۵۰ کاراکتر میتواند باشد',
            'email' => 'آدرس ایمیل معتبر وارد کنید',
            'digits' => 'شماره تلفن همراه معتبر وارد کنید',
            'amount.between'=>'مبلغ باید بین 1100 تومان و 50 میلیون تومان و بصورت عددی وارد شود'

        ];
        $this->validate($request, $rules, $customMessages);

        $merchantcodes=DB::table('merchants')->latest()->first();
        $merchantId=$merchantcodes->merchantCode;
        $request->session()->put('amount', $request->amount);
        $name = $request->input('fullname');
        $amountValue = $this->getAmountFromView($request);
        $mobile = $request->mobile;
        $email = $request->email;

        $description = $request->description;
        if($mobile =="" || $email ==""){
            $data = array("merchant_id" =>$merchantId,
                "amount" => $amountValue,
                "callback_url" => "http://127.0.0.1:8000/verifypayment",
                "description" => $description,

            );

        }else {

            $data = array("merchant_id" => $merchantId,
                "amount" => $amountValue,
                "callback_url" => "http://127.0.0.1:8000/verifypayment",
                "description" => $description,
                "metadata" => [ "email" => $email,"mobile"=>$mobile],
            );
        }


        $jsonData = json_encode($data);
        $ch = curl_init('https://api.zarinpal.com/pg/v4/payment/request.json');
        curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ));

        $result = curl_exec($ch);
        $err = curl_error($ch);
        $result = json_decode($result, true, JSON_PRETTY_PRINT);
        curl_close($ch);



        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if (empty($result['errors'])) {
                if ($result['data']['code'] == 100) {

                    $user = new User();

                    $user->fullname = $name;
                    $user->email = $email;
                    $user->mobile = $mobile;
                    $user->save();



                    $payment = new Payment();
                    $payment->Authority = $result['data']["authority"];
                    $payment->Amount = $amountValue;
                    // $payment->Date = now();
                    $payment->refid = $result['data']["authority"];
                    $payment->Description = $description;
                    $payment->user_id=$user->id;
                    $payment->save();


                    return redirect()->away('https://www.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);

                }
            } else {
                echo'Error Code: ' . $result['errors']['code'];
                echo'message: ' .  $result['errors']['message'];

            }
        }
        return $result;
    }

    public  function verifypayment(Request $request){

        $merchantcodes=DB::table('merchants')->latest()->first();
        $merchantId=$merchantcodes->merchantCode;
        $name = $request->input('fullname');
        $SessionAuthority = $_GET['Authority'];
        $status = $_GET['Status'];
        $sessionAmount=$request->session()->get('amount');
        $authoritys = DB::table('payments')->latest()->first();
        $authorityId = $authoritys->id;
        $authority=$authoritys->Authority;
        $amountValue=$authoritys->Amount;
        // dd($amountValue);
        if ($SessionAuthority == $authority){

            $authority=$authoritys->Authority;
        }else {

            $authority=$SessionAuthority;
        }
        if ($sessionAmount == $amountValue)
        {
            $amountValue=$authoritys->Amount;
        }
        else {
            $amountValue = $sessionAmount;
        }



        $data = array("merchant_id" => $merchantId, "authority" => $authority, "amount" => $amountValue);
        $jsonData = json_encode($data);
        $ch = curl_init('https://api.zarinpal.com/pg/v4/payment/verify.json');
        curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v4');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ));

        $result = curl_exec($ch);
        $err = curl_error($ch);
        $result = json_decode($result, true);
        curl_close($ch);


        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if (empty($result['errors'])) {
                if ($status == "OK"){
                    if ($result['data']['code'] == 100) {

                        $data = $result['data']['ref_id'];
                        $payment = new Payment();
                        // $payment->refid = $result['data']['ref_id'];
                        //$payment->Status = "تراکنش موفق است";
                        DB::update('update payments set refid = ? , Status = ? where id = ?',[$data,"تراکنش موفق است",$authorityId]);
                        return view('verifypayment', compact('data'));
                    } else {
                        $errorcode=$result['errors']['code'];
                        $errormessage=  $result['errors']['message'];
                        DB::update('update payments set refid = ? , Status = ? where id = ?',[0,"تراکنش ناموفق است",$authorityId]);

                        echo "<div style='font-size: xx-large; color: darkred; background-color: rgba(255,113,79,0.67);text-align: center;'> تراکنش ناموفق با کد :$errorcode </div>";



                    }
                }else {


                    DB::update('update payments set refid = ? , Status = ? where id = ?',[0,"تراکنش ناموفق است",$authorityId]);
                    echo "<div style='font-size: xx-large; color: darkred; background-color: rgba(255,113,79,0.67);text-align: center;'> تراکنش ناموفق  </div>";

                }

            }else {
                $errorcode=$result['errors']['code'];
                $errormessage=  $result['errors']['message'];
                DB::update('update payments set refid = ? , Status = ? where id = ?',[0,"تراکنش ناموفق است",$authorityId]);

                echo "<div style='font-size: xx-large; color: darkred; background-color: rgba(255,113,79,0.67);text-align: center;'> تراکنش ناموفق با کد :$errorcode </div>";

            }

        }
    }    //
}
