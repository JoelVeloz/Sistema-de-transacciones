<x-app-layout>
    <main class="bg-blue-100 dark:bg-gray-800 flex h-screen">
        <div class="flex justify-between bg-orange-300 m-5 w-full gap-4">
            <div class="hidden lg:block w-80 h-full">
                <div class="bg-white shadow-lg rounded-lg dark:bg-gray-700 h-full">
                    <div class="flex items-center justify-center pt-6">
                        <p class="font-bold text-md p-4 text-black dark:text-white">
                            Wallet
                        </p>
                    </div>
                    <nav class="mt-6">
                        <div>
                            <a class="w-full font-thin uppercase text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start bg-gradient-to-r from-white to-blue-100 border-r-4 border-blue-500 dark:from-gray-700 dark:to-gray-800 border-r-4 border-blue-500"
                                href="#">
                                <span class="text-left">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    Billetera
                                </span>
                            </a>
                            <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                href="#">
                                <span class="text-left">
                                    <svg width="20" height="20" fill="currentColor" class="m-auto"
                                        viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1024 1131q0-64-9-117.5t-29.5-103-60.5-78-97-28.5q-6 4-30 18t-37.5 21.5-35.5 17.5-43 14.5-42 4.5-42-4.5-43-14.5-35.5-17.5-37.5-21.5-30-18q-57 0-97 28.5t-60.5 78-29.5 103-9 117.5 37 106.5 91 42.5h512q54 0 91-42.5t37-106.5zm-157-520q0-94-66.5-160.5t-160.5-66.5-160.5 66.5-66.5 160.5 66.5 160.5 160.5 66.5 160.5-66.5 66.5-160.5zm925 509v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm0-260v-56q0-15-10.5-25.5t-25.5-10.5h-568q-15 0-25.5 10.5t-10.5 25.5v56q0 15 10.5 25.5t25.5 10.5h568q15 0 25.5-10.5t10.5-25.5zm0-252v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm256-320v1216q0 66-47 113t-113 47h-352v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-768v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-352q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1728q66 0 113 47t47 113z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    Retiros
                                </span>
                            </a>

                            <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                href="{{ route('giros') }}">
                                <span class="text-left">
                                    <svg width="20" height="20" fill="currentColor" class="m-auto"
                                        viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1024 1131q0-64-9-117.5t-29.5-103-60.5-78-97-28.5q-6 4-30 18t-37.5 21.5-35.5 17.5-43 14.5-42 4.5-42-4.5-43-14.5-35.5-17.5-37.5-21.5-30-18q-57 0-97 28.5t-60.5 78-29.5 103-9 117.5 37 106.5 91 42.5h512q54 0 91-42.5t37-106.5zm-157-520q0-94-66.5-160.5t-160.5-66.5-160.5 66.5-66.5 160.5 66.5 160.5 160.5 66.5 160.5-66.5 66.5-160.5zm925 509v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm0-260v-56q0-15-10.5-25.5t-25.5-10.5h-568q-15 0-25.5 10.5t-10.5 25.5v56q0 15 10.5 25.5t25.5 10.5h568q15 0 25.5-10.5t10.5-25.5zm0-252v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm256-320v1216q0 66-47 113t-113 47h-352v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-768v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-352q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1728q66 0 113 47t47 113z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    Giros
                                </span>
                            </a>
                            <a class="w-full font-thin uppercase text-gray-500 dark:text-gray-200 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500"
                                href="#">
                                <span class="text-left">
                                    <svg width="20" height="20" fill="currentColor" class="m-auto"
                                        viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1024 1131q0-64-9-117.5t-29.5-103-60.5-78-97-28.5q-6 4-30 18t-37.5 21.5-35.5 17.5-43 14.5-42 4.5-42-4.5-43-14.5-35.5-17.5-37.5-21.5-30-18q-57 0-97 28.5t-60.5 78-29.5 103-9 117.5 37 106.5 91 42.5h512q54 0 91-42.5t37-106.5zm-157-520q0-94-66.5-160.5t-160.5-66.5-160.5 66.5-66.5 160.5 66.5 160.5 160.5 66.5 160.5-66.5 66.5-160.5zm925 509v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm0-260v-56q0-15-10.5-25.5t-25.5-10.5h-568q-15 0-25.5 10.5t-10.5 25.5v56q0 15 10.5 25.5t25.5 10.5h568q15 0 25.5-10.5t10.5-25.5zm0-252v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm256-320v1216q0 66-47 113t-113 47h-352v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-768v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-352q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1728q66 0 113 47t47 113z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    P2P
                                </span>
                            </a>


                        </div>
                    </nav>
                </div>
            </div>
            <div class="flex flex-col w-full md:space-y-4  bg-orange-500">
                <header class="w-full shadow-sm bg-white dark:bg-gray-700 items-center h-16 rounded-lg">
                    <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                        <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                            <div class="container relative left-0 z-50 flex w-3/4 h-auto h-full">
                                {{-- <div class="relative flex items-center w-full lg:w-64 h-full group">
                                        <div
                                            class="absolute z-50 flex items-center justify-center block w-auto h-10 p-3 pr-2 text-sm text-gray-500 uppercase cursor-pointer sm:hidden">
                                            <svg fill="none" class="relative w-5 h-5" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                </path>
                                            </svg>
                                        </div>
                                        <svg class="absolute left-0 z-20 hidden w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                            </path>
                                        </svg>
                                        <input type="text"
                                            class="block w-full py-1.5 pl-10 pr-4 leading-normal rounded-2xl focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 ring-opacity-90 bg-gray-100 dark:bg-gray-800 text-gray-400 aa-input"
                                            placeholder="Search" />
                                        <div
                                            class="absolute right-0 hidden h-auto px-2 py-1 mr-2 text-xs text-gray-400 border border-gray-300 rounded-2xl md:block">
                                            +
                                        </div>
                                    </div> --}}
                            </div>
                            <div
                                class="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                                <a href="#" class="block relative">
                                    <img alt="profil" src="{{ Auth::user()->profile_photo_url }}"
                                        class="mx-auto object-cover rounded-full h-10 w-10 " />
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="grid grid-cols-3 gap-4  bg-green-300 h-full">
                    <div class="w-full flex flex-col gap-4 bg">
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                            <div
                                class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                    Saldo disponible
                                </p>
                                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                    $ {{ number_format($balance, 2) }} USD
                                </p>
                            </div>
                        </div>

                        <div class="flex p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 gap-4 bg">

                            @livewire('test.receive-money')
                            @livewire('test.send-money')
                            {{-- <a href="{{route("enviar",[100])}}"> --}}

                            {{-- </a> --}}
                        </div>
                        <div class="shadow-lg rounded-lg p-4 bg-white dark:bg-gray-700 w-full h-full">
                            <p class="font-bold text-md pb-4 text-black dark:text-white">
                                Monederos
                                <span class="text-sm text-gray-500 dark:text-gray-300 dark:text-white ml-2">
                                    ({{ $wallets->count() }})
                                </span>
                            </p>
                            @foreach ($wallets as $wallet)
                                <div
                                    class="flex items-center justify-between border-2 border-cool-gray-200 rounded-lg w-full mb-2">
                                    <div class="flex items-center p-1">
                                        <span class="rounded-xl relative p-2 bg-blue-100">
                                            {{-- <svg viewBox="0 0 473.681 473.681" xmlns="http://www.w3.org/2000/svg"
                                                        role="img" aria-labelledby="USD" height="32" width="32">
                                                        <path style="fill:#FBD015;"
                                                            d="M305.456,226.706h167.967C468.105,100.604,364.238,0.002,236.835,0.002  C300.37,0.002,303.642,111.759,305.456,226.706z" />
                                                        <path style="fill:#21428C;"
                                                            d="M305.456,351.039h138.888c18.679-33.869,29.337-72.783,29.337-114.195  c0-3.396-0.112-6.772-0.254-10.138h-157.1C317.004,269.595,313.369,312.899,305.456,351.039z" />
                                                        <g>
                                                            <path style="fill:#CD202A;"
                                                                d="M229.258,473.548c-0.606-0.015-1.215-0.045-1.821-0.067   C228.039,473.503,228.649,473.533,229.258,473.548z" />
                                                            <path style="fill:#CD202A;"
                                                                d="M236.835,473.679c89.387,0,167.185-49.534,207.505-122.639H300.467   C285.92,421.119,280.397,473.679,236.835,473.679z" />
                                                        </g>
                                                        <path style="fill:#FFFFFF;"
                                                            d="M236.835,473.679c-2.539,0-5.063-0.052-7.576-0.131C231.786,473.626,234.314,473.679,236.835,473.679  z" />
                                                        <path style="fill:#FCD73E;"
                                                            d="M0.254,226.706h334.595C333.039,111.759,300.37,0.002,236.835,0.002  C109.439,0.002,5.572,100.604,0.254,226.706z" />
                                                        <path style="fill:#1D4F95;"
                                                            d="M334.849,226.706H0.254C0.112,230.072,0,233.449,0,236.844c0,41.412,10.658,80.326,29.337,114.195  h294.645C331.895,312.899,335.53,269.595,334.849,226.706z" />
                                                        <path style="fill:#D11F3E;"
                                                            d="M227.433,473.48c0.606,0.022,1.215,0.052,1.821,0.067c2.517,0.079,5.041,0.131,7.576,0.131  c43.562,0,72.596-52.56,87.143-122.639H29.333C68.236,421.564,142.022,470.145,227.433,473.48z" />
                                                    </svg> --}}
                                            {{-- {{Arr::get($currencies->toArray, )}} --}}
                                            {!! $currencies->where('code', $wallet->slug)->first() == null ? '' : $currencies->where('code', $wallet->slug)->first()['image'] !!}
                                            {{-- {{ $currencies->where('code', $wallet->slug)->first() == null ? '' :
                                                    $currencies->where('code', $wallet->slug)->first()->get("image") }} --}}
                                        </span>
                                        <div class="flex flex-col">
                                            <span class="font-bold text-md text-black dark:text-white ml-2">
                                                {{ $wallet->name }}
                                            </span>
                                            <span class="text-sm text-gray-500 dark:text-white ml-2">
                                                {{-- $ {{ $wallet->balanceFloat }} --}}
                                                {{-- ${{ number_format(1 / \App\Models\RatesTest::rate($wallet), $wallet->decimal_places) }} --}}
                                                ${{ round(\App\Models\RatesTest::rate($wallet), 6) }}

                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        {{-- <button class="border p-1 border-gray-200 rounded-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        class="w-4 h-4 text-yellow-500" fill="currentColor"
                                                        viewBox="0 0 1792 1792">
                                                        <path
                                                            d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                        </path>
                                                    </svg>
                                                </button> --}}
                                        {{-- <button class="text-gray-200">
                                                    <svg width="25" height="25" fill="currentColor"
                                                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1088 1248v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm0-512v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68z">
                                                        </path>
                                                    </svg>
                                                </button> --}}

                                        <div class="px-3 py-2 text-sm text-right flex flex-col">
                                            <p class="font-semibold text-green-500">
                                                {{ $wallet->balanceFloat . ' ' . $wallet->slug }}
                                            </p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                ${{ number_format(\App\Models\RatesTest::rate($wallet) * $wallet->balanceFloat, 2) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-full col-span-2  h-full">
                        <div class="shadow-lg rounded-lg bg-white dark:bg-gray-700 w-full h-full">
                            <p class="font-bold text-md p-4 text-black dark:text-white">
                                Ultimas transacciones
                                <span class="text-sm text-gray-500 dark:text-gray-300 dark:text-white ml-2">
                                    ({{ $transactions->count() }})
                                </span>
                            </p>
                            <div class="w-full rounded-lg shadow-xs ">
                                <div class="w-full  overflow-hidden  ">
                                    <table class=" whitespace-no-wrap  w-full">
                                        <thead>
                                            <tr
                                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                                <th class="px-4 py-3">Transacción</th>
                                                {{-- <th class="px-4 py-3">Estado</th> --}}
                                                <th class="px-4 py-3 text-center">Fecha</th>
                                                <th class="px-6 py-3 text-right">Monto</th>

                                            </tr>
                                        </thead>
                                        <tbody class=" w-full overflow-y-auto">
                                            @foreach ($transactions->sortByDesc('id')->take(10) as $transaction)
                                                <tr class="text-gray-700 dark:text-gray-400 flex w-full">
                                                    <td class="px-4 py-2">
                                                        <div class="flex items-center text-sm">
                                                            <!-- Avatar with inset shadow -->
                                                            <div
                                                                class="relative hidden w-8 h-8 mr-3 rounded-full md:block">


                                                                {{-- RECIBIDO --}}

                                                                @if (floatval($transaction->amount) > 0)
                                                                    <svg viewBox="0 0 40 40"
                                                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                                                        aria-labelledby="transactionTypeReceive"
                                                                        height="32" width="32">
                                                                        <circle cx="20" cy="20" fill="#E4EAF2" r="20">
                                                                        </circle>
                                                                        <path
                                                                            d="M25.314 13.271l1.414 1.415-10.313 10.313 3.242.001v2H14a1 1 0 01-.993-.883L13 26v-5.657h2l-.001 3.243 10.315-10.314z"
                                                                            fill="#8494A5"></path>
                                                                    </svg>
                                                                @else
                                                                    <svg viewBox="0 0 40 40"
                                                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                                                        aria-labelledby="transactionTypeSend"
                                                                        height="32" width="32">
                                                                        <circle cx="20" cy="20" fill="#E4EAF2" r="20">
                                                                        </circle>
                                                                        <path
                                                                            d="M26 13a1 1 0 01.993.883L27 14v5.657h-2v-3.243L14.687 26.728l-1.414-1.415L23.586 15 20.344 15v-2H26z"
                                                                            fill="#8494A5"></path>
                                                                    </svg>
                                                                @endif





                                                            </div>
                                                            <div>
                                                                <p class="font-semibold">
                                                                    {{ $transaction->wallet->name }}
                                                                </p>
                                                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                                                    {{ $transaction->uuid }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    {{-- <td class="px-4 py-3 text-xs">
                                                                <span
                                                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                                    Aprobado
                                                                </span>
                                                            </td> --}}
                                                    <td class="px-6 py-2 text-sm text-center">
                                                        {{ $transaction->created_at }}
                                                    </td>
                                                    <td class="px-6 py-2 text-sm text-right">
                                                        {{-- {{ $transaction->wallet->slug }} --}}
                                                        @if ($transaction->amount > 0)

                                                            <p class="font-semibold text-green-500">
                                                                {{ number_format(abs($transaction->amount) / pow(10, $transaction->wallet->decimal_places), $transaction->wallet->decimal_places) . ' ' . $transaction->wallet->slug }}
                                                            </p>
                                                        @else
                                                            <p class="font-semibold text-red-600">
                                                                {{ number_format(abs($transaction->amount) / pow(10, $transaction->wallet->decimal_places), $transaction->wallet->decimal_places) . ' ' . $transaction->wallet->slug }}
                                                            </p>
                                                        @endif
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            ${{ (\App\Models\RatesTest::rate($transaction->wallet) * abs($transaction->amount)) / pow(10, $transaction->wallet->decimal_places) }}
                                                        </p>
                                                    </td>
                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div
                                    class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                                    <span class="flex items-center col-span-3">
                                        Ver mas
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


</x-app-layout>
