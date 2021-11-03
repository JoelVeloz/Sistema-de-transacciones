<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\RatesTest;
use Bavix\Wallet\Models\Wallet;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{


    public function index()
    {

        $cambio = RatesTest::rateList()["USD"];

        $balance = Auth()->user()->wallets->map(function ($item) use ($cambio) {
            $data = (1 / $cambio[$item->slug]) * $item->balanceFloat;
            return $data;
        })->sum();

        $user = Auth::user();
        $wallets = $user->wallets;

        // foreach ($wallets as $key => $value) {
        //     $value->meta = ["rate" => $cambio[$value->slug]];
        // }
        // return  $wallets;



        // $wallet = $user->getWallet("USD");
        // return   $this->rate($wallet);

        $transactions = $user->transactions;
        $currencies = Currency::all();

        // return  $currencies;
        return view('test', compact("balance", "wallets", "transactions", "currencies", "cambio"));
    }


    public function giros()
    {


        return view('test2');
    }
}
