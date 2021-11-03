<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Bavix\Wallet\Interfaces\Wallet;
use Bavix\Wallet\Services\WalletService;
use Exception;
use Illuminate\Support\Arr;

class MyRateService extends \Bavix\Wallet\Simple\Rate
{

    // list of exchange rates (take from the database)
    // protected $rates = [
    //     'USD' => [
    //         'RUB' => 67.61,
    //         'COP' => 3809.09,
    //         'BTC' => 0.000016,
    //     ],
    //     'BTC' => [
    //         'USD' => 60000.00,
    //     ],
    //     'RUB' => [
    //         'USD' => 0.0147907114,
    //     ],
    //     'COP' => [
    //         'USD' => 0.00026,
    //     ],
    // ];

    // protected function rate(Wallet $wallet)
    // {
    //     $from = app(WalletService::class)->getWallet($this->withCurrency);
    //     $to = app(WalletService::class)->getWallet($wallet);

    //     $rate = Arr::get(Arr::get($this->rates, $from->currency, []), $to->currency, 0);

    //     if ($rate == 0) {
    //         throw new Exception("Moneda no encontrada, " . $to->currency . " , No es compatible", 1);
    //     } else {
    //         return $rate;
    //     }
    // }

    // public function convertTo(Wallet $wallet)
    // {
    //     return parent::convertTo($wallet) * $this->rate($wallet) / pow(10, (app(WalletService::class)->getWallet($this->withCurrency)->decimal_places - $wallet->decimal_places));
    // }


    protected function rate(Wallet $wallet)
    {
        $cambios =  RatesTest::rateList();

        $from = app(WalletService::class)->getWallet($this->withCurrency);
        $to = app(WalletService::class)->getWallet($wallet);

        // $rate = Arr::get(Arr::get($cambios, $from->currency, []), $to->currency, 0);

        // dd($from->currency);
        if ($from->currency == "USD") {
            $rate =  Arr::get(Arr::get($cambios, $from->currency, []), $to->currency, 0);
            // dd($cambios);

        } else {
            $rate = 1 / Arr::get(Arr::get($cambios, "USD", []), $from->currency, 0);
        }
        if ($rate == 0) {
            throw new Exception("Moneda no encontrada, " . $to->currency . " , No es compatible", 1);
        } else {
            return $rate;
        }
    }

    public function convertTo(Wallet $wallet)
    {
        return parent::convertTo($wallet) * $this->rate($wallet) / pow(10, (app(WalletService::class)->getWallet($this->withCurrency)->decimal_places - $wallet->decimal_places));
    }
}
