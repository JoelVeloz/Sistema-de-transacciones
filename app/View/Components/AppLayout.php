<?php

namespace App\View\Components;

use App\Models\RatesTest;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {

        $cambio = RatesTest::rateList()["USD"];

        $balance = Auth()->user()->wallets->map(function ($item) use ($cambio) {
            $data = (1 / $cambio[$item->slug]) * $item->balanceFloat;
            return $data;
        })->sum();

        $balance = number_format($balance, 2);
        return view('layouts.app', compact("balance"));
    }
}
