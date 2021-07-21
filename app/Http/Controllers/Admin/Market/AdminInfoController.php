<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\b;

class AdminInfoController extends Controller
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
        $aid=DB::table('admins')->latest()->first();
        $aId=$aid->id;
        $aname=$aid->name;
        $aemail=$aid->email;
        $apassword=$aid->password;
        //$lastMerchant=$mid->merchantCode;
        return view('admin.market.admininfo.index',compact('aname','aemail','apassword'));
    }

    public function getAdminFromView(Request $request){

        /*$rules=[
            'adminName'=>'required',
            'adminEmail' => 'email',
            'password' => 'min:7'

        ];
        $customMessages = [
            'required' => 'ورودی نباید خالی باشد',
            'email' => 'آدرس ایمیل معتبر وارد کنید',


        ];
        $this->validate($request, $rules, $customMessages);*/

        $adminName = $request->input('adminName');
        $adminEmail = $request->input('adminEmail');
        $adminPassword = $request->input('adminPassword');
        $aid=DB::table('admins')->latest()->first();
        $aId=$aid->id;
        $aname=$aid->name;
        $aemail=$aid->email;
        $aepassword=$aid->password;

        if ($adminName !="" ||$adminEmail!="" ||$adminPassword!="" ){
            $adminPassword=bcrypt($adminPassword);
            DB::update('update admins set  name=? , email=? , password=? where id = ?',[$adminName,$adminEmail,$adminPassword,$aId]);

        }

        return view('admin.market.admininfo.edit');
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
