<?php

use App\Http\Controllers\TestController;
use App\Models\MyRateService;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::middleware(['auth:sanctum', 'verified'])->get(
    '/dashboard',
    [TestController::class, 'index']
)->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get(
    '/giros',
    [TestController::class, 'giros']
)->name('giros');






Route::get('p1', function () {
    $user = User::first();
    $user->depositFloat(10.02);
    return $user->balanceFloat; // 0
});

Route::get('cmd2', function () {
    $user1 = User::first();
    $user2 = User::find(2);
    $wallet1 = $user1->getWallet("USD");
    $wallet2 = $user2->getWallet("USD");

    for ($i = 0; $i < 100; $i++) {

        $wallet1->transfer($wallet2, random_int(1, $wallet1->balance) * 0.5);
        // sleep(1);
        $wallet2->transfer($wallet1, random_int(1, $wallet2->balance) * 0.5);
        // sleep(0.001);
    }
    return redirect()->route("userData");
});


Route::get('clearData', function () {
    $user = User::all();
    foreach ($user as $key => $value) {
        $wallet = $value->getWallet("dollar");
        $wallet->withdraw($wallet->balance, ['description' => 'withdraw Testing']);
    }
    return redirect()->route("userData");
});



Route::get('dar', function () {
    $user = User::all();
    foreach ($user as $key => $value) {
        $wallet = $value->getWallet("USD");
        $wallet->depositFloat(10, ['description' => 'DEPOSIT Testing']);
    }
    return redirect()->route("userData");
});



Route::get('obRate', function () {
    $user1 = User::first();
    $cop = $user1->getWallet("cop");

    $usd = $user1->getWallet("dollar");

    // $cop = $user1->getWallet("COP");
    // $transfer = $usd->exchange($cop, $usd->balance);

    // $rub->deposit(10000);
    // return $cop->balanceFloat;

    $transfer = $cop->exchange($usd, $cop->balance);
    return $transfer;

    return   $transfer;
});


Route::get('usersData', function () {

    return User::with(["wallets"])->get();
})->name("userData");


Route::get('getDolarRate', function () {
    $user1 = User::first();
    $wallets =  $user1->wallets;
    // $cop = $user1->getWallet("cop");


    return $wallets;
});











// Route::get('test2', function () {
//     $user = User::find(1);
//     $transferable = User::find(2);

//     $wallet = $user->getWallet("CNY");
//     return $wallet;
//     $wallet->transfer($transferable, 233);
//     return $user;
//     // $wallet->balance
// });


// Route::get('test', function () {
//     $first = User::first();

//     $first->deposit(1000);


//     for ($i = 0; $i < 10000; $i++) {
//         $first->withdraw(random_int(1, 30));
//         $first->withdraw(random_int(1, 30));
//         $first->withdraw(random_int(1, 30));
//         $first->withdraw(random_int(1, 30));
//         $first->withdraw(random_int(1, 30));
//         $first->deposit(random_int(1, 30));
//         $first->deposit(random_int(1, 30));
//         $first->deposit(random_int(1, 30));
//         sleep(2);
//     }

//     // $first->deposit(3);
//     return $first->balance;
// });


// Route::get('enviar/{id}/{cantidad}', function ($id, $cantidad) {
//     $user = User::find($id);
//     Auth()->user->transfer($user, $cantidad);
// })->name("enviar");

// Route::get('dar', function () {
//     $user = User::first();
//     // $user->
//     $user->deposit(10.2);
//     return redirect()->route("dashboard");
// });
// Route::get('pruebaMasiva', function () {
//     $first = User::first();
//     $last = User::find(2);
//     for ($i = 0; $i < 10000; $i++) {

//         $first->transfer($last, random_int(1, $first->balance));
//         $last->transfer($first, random_int(1, $last->balance));
//         // sleep(0.001);
//     }
//     // $first->deposit(3);
//     return redirect()->route("dashboard");
// });

// Route::get('pruebaMasiva2', function () {
//     $first = User::first();
//     // $last = User::find(3);
//     // $last = User::inRandomOrder()->first();
//     // return User::inRandomOrder()->first();

//     for ($i = 0; $i < 10000; $i++) {
//         $last = User::inRandomOrder()->first();

//         // $first->transfer($last, random_int(1, $first->balance));
//         $last->transfer($first, random_int(1, $last->balance));
//         // sleep(0.001);
//     }

//     $first->deposit(3);
//     return redirect()->route("dashboard");
// });
// Route::get('reset', function () {
//     $users = User::all();
//     foreach ($users as $key => $value) {
//         $value->withdraw($value->balance);
//     }
//     return redirect()->route("dashboard");
// });
// Route::get('darTodos', function () {
//     $users = User::all();
//     foreach ($users as $key => $value) {
//         $value->deposit(100);
//     }
//     return redirect()->route("dashboard");
// });
// Route::get('users', function () {
//     return User::with("wallets")->get();
// });
// Route::get('dinero', function () {
//     return Wallet::sum("balance");
// });
