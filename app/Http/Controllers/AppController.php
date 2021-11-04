<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\RatesTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{

    public function dashboard()
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
        return view('pages.dashboard', compact("balance", "wallets", "transactions", "currencies", "cambio"));
    }

    public function exchange()
    {
        return view('pages.exchange');
    }








    public function blank()
    {
        return view('pages.blank');
    }
}
