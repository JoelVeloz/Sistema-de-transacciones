<?php

namespace App\Http\Livewire\Dashboard;

use Bavix\Wallet\Interfaces\Wallet;
use Bavix\Wallet\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Transactions extends Component
{

    public $open = false;
    public Transaction $transation;
    public Wallet $wallet;


    public function mount()
    {
        $this->transation =  new Transaction();
        $this->wallet =  Auth::user()->getWallet("USD");
    }

    public function abrir(Transaction $trans)
    {
        // dd($trans);
        $this->transation = $trans;
        $this->open = true;
    }


    public function cerrar()
    {
        $this->open = false;
    }

    public function render()
    {
        // $user = ;

        $transactions = Auth::user()->transactions;
        // dd($transactions);
        return view('livewire.dashboard.transactions', compact("transactions"));
    }
}
