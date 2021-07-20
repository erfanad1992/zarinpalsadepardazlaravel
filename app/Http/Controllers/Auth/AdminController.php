<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$successtransactionsum=DB::table("payments")->get()->sum("Amount")->where('refid', '!=', 0);
        $successtransactionsum = DB::table('payments')
            ->where('payments.refid', '!=', 0)
            ->where('payments.Status','=','تراکنش موفق است')
            ->sum('payments.Amount');
        $failedransactionsum = DB::table('payments')
            ->where('payments.refid', '=', 0)
            ->where('payments.Status','=','تراکنش ناموفق است')
            ->sum('payments.Amount');
        $successtransactionsum = preg_replace('/\h*\.+\h*(?!.*\.)/', ' ', $successtransactionsum);
        $failedransactionsum = preg_replace('/\h*\.+\h*(?!.*\.)/', ' ', $failedransactionsum);
       // dd($successtransactionsum);
        return view('admin',compact('successtransactionsum','failedransactionsum'));
    }
}
