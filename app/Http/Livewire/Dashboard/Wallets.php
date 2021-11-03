<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Currency;
use App\Models\RatesTest;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Wallets extends Component
{
    public function render()
    {
        $cambio = RatesTest::rateList()["USD"];
        $user = Auth::user();
        $wallets = $user->wallets;
        $currencies = Currency::all();

        return view('livewire.dashboard.wallets', compact("wallets", "currencies", "cambio"));
    }
}
