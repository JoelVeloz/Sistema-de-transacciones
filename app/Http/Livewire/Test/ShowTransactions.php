<?php

namespace App\Http\Livewire\Test;

use Bavix\Wallet\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowTransactions extends Component
{
    public $open = false;

    public $transation;


    public function mount()
    {
        $this->transation =  new Transaction();
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

        $user = Auth::user();
        $transactions = $user->transactions;
        return view('livewire.test.show-transactions', compact("transactions"));
    }
}
