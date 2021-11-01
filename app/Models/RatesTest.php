<?php

namespace App\Models;

use Bavix\Wallet\Models\Wallet;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class RatesTest extends Model
{
    use HasFactory;

    public $rates = [
        'USD' => [
            'USD' => 1,
            'RUB' => 67.61,
            'BRL' => 12.61,
            'COP' => 3809.09,
            'BTC' => 0.000016,
        ],
    ];


    static public function rate(Wallet $from)
    {
        $cambios =  [
            'USD' => [
                'USD' => 1,
                'RUB' => 67.61,
                'BRL' => 12.61,
                'COP' => 3809.09,
                'BTC' => 0.000016,
            ],
        ];

        if ($from->currency == "USD") {
            // dd("AQUI");
            $rate =  Arr::get(Arr::get($cambios, $from->currency, []), "USD", 0);
        } else {
            $rate = 1 / Arr::get(Arr::get($cambios, "USD", []), $from->currency, 0);
        }

        if ($rate == 0) {
            throw new Exception("Moneda no encontrada, " . "USD" . " , No es compatible", 1);
        } else {
            return $rate;
        }
    }


    // static  public function get(Type $var = null)
    // {
    //     # code...
    // }
}
