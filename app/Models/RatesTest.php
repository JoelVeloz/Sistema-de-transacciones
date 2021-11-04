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

    // public $rates = [
    //     'USD' => [
    //         'USD' => 1,
    //         'RUB' => 67.61,
    //         'BRL' => 12.61,
    //         'COP' => 3809.09,
    //         'BTC' => 0.000016,
    //     ],
    // ];




    static public function rate(Wallet $from)
    {
        $cambios =  RatesTest::rateList();

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


    static public function rateList()
    {
        $api_url = 'https://openexchangerates.org/api/latest.json?app_id=b81616a8ba2948728cf4fbf220a8d11c';

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $api_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response, true);


        $response = [
            'rates' => [
                'USD' => 1,
                'RUB' => 67.61,
                'BRL' => 12.61,
                'COP' => 3809.09,
                'BTC' => 0.000016,
            ],
        ];

        $cambios =  [
            'USD' => $response["rates"]
        ];
        return $cambios;
    }
}
