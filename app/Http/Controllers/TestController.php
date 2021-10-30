<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $wallets = $user->wallets;
        $transactions = $user->transactions;

        // return  $transactions;



        return view('test', compact("wallets", "transactions"));
    }
}
