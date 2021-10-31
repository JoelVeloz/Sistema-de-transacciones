<?php

namespace App\Http\Livewire\Test;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class SendMoney extends Component
{
    public $open = false;
    public $email;
    public $ammount;

    public function abrir()
    {
        $this->open = true;
    }


    // public function getMoney()
    // {
    //     Auth::user()->deposit("100");
    // }

    public function send()
    {
        // dd(Auth::user()->wallets);

        if ($this->email != null and $this->ammount != null) {
            $user =  Auth::user();
            $userToTransfer = User::where("email", $this->email)->first();
            if ($userToTransfer == null) {
                $userToTransfer = $user;
            }
            // dd($userToTransfer);
            $user->transferFloat($userToTransfer, $this->ammount);
        }
        $this->open = false;
        // $user = new User();

        // $first = User::first();
        // $last = User::orderBy('id', 'desc')->first(); // last user
        // $first->getKey() !== $last->getKey(); // true

        // $first->balance; // 100
        // $last->balance; // 0

        // $first->transfer($last, 5);
        // $first->balance; // 95
        // $last->balance; // 5
    }

    public function render()
    {
        return view('livewire.test.send-money');
    }
}
