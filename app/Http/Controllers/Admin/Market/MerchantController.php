<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MerchantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin' );
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('/login');
    }
    public function index()
    {
        $mid=DB::table('merchants')->latest()->first();
        $mId=$mid->id;
       $lastMerchant=$mid->merchantCode;
        //$lastMerchant="hhhhhhh";
        if ($lastMerchant ==""){
            $lastMerchant='empty';
        }

       // return dd($lastMerchant);
        return view('admin.market.merchant.index',compact('lastMerchant'));
    }

    public function getMerchantFromView(Request $request){
     /*  $rules=[
            'merchant'=>'required',


        ];
        $customMessages = [
            'required' => 'ورودی نباید خالی باشد',


        ];
       $this->validate($request, $rules, $customMessages);*/

        $merchant = $request->input('merchant');
        $mid=DB::table('merchants')->latest()->first();
        $mId=$mid->id;
       /* $lastMerchant=$mid->merchantCode;
        if ($lastMerchant ==""){
            $lastMerchant='empty';
        }*/
       if ($merchant ==""){

           $merchant='empty';
           DB::update('update merchants set merchantCode= ? where id = ?',[$merchant,$mId]);

       }else {
           DB::update('update merchants set merchantCode= ? where id = ?',[$merchant,$mId]);
       }

       // return dd($lastMerchant);
        return view('admin.market.merchant.edit');
       // return redirect('http://127.0.0.1:8000/admin/market/merchant');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}