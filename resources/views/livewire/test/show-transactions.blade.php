<div class="shadow-lg rounded-lg bg-white dark:bg-gray-700 w-full h-full relative">

    @if ($open)
        <div class="shadow-lg rounded-lg bg-white dark:bg-gray-700 w-full h-full absolute z-50">
            <button wire:click="cerrar">
                x
            </button>
            <br>
            @foreach ($transation->toArray() as $item => $data)
                <br>
                {{ json_encode($item) . ' - ' . json_encode($data) }}
            @endforeach
            <br>
            {{ $transation->transferWithdraw }}
        </div>
    @endif
    <p class="font-bold text-md p-4 text-black dark:text-white">
        Ultimas transacciones
        <span class="text-sm text-gray-500 dark:text-gray-300 dark:text-white ml-2">
            ({{ $transactions->count() }})
        </span>
    </p>
    <div class="w-full rounded-lg shadow-xs relative">

        <div class="w-full  overflow-y-scroll   overscroll-contain h-96">
            <table class=" w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Transacción</th>
                        {{-- <th class="px-4 py-3">Estado</th> --}}
                        <th class="px-4 py-3 text-center">Fecha</th>
                        <th class="px-6 py-3 text-right">Monto</th>

                    </tr>
                </thead>
                <tbody class="relative w-full overflow-y-scroll " style="height: 50vh; ">
                    <div class="absolute h-28 object-cover overscroll-contain">
                        @foreach ($transactions->sortByDesc('id')->take(10) as $transaction)
                            <tr wire:click="abrir({{ $transaction }})"
                                class="text-gray-700 dark:text-gray-400  w-full hover:bg-blue-100">
                                <td class="px-4 py-2">
                                    <div class="flex items-center text-sm">
                                        <!-- Avatar with inset shadow -->
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            {{-- RECIBIDO --}}

                                            @if (floatval($transaction->amount) > 0)
                                                <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" role="img"
                                                    aria-labelledby="transactionTypeReceive" height="32" width="32">
                                                    <circle cx="20" cy="20" fill="#E4EAF2" r="20">
                                                    </circle>
                                                    <path
                                                        d="M25.314 13.271l1.414 1.415-10.313 10.313 3.242.001v2H14a1 1 0 01-.993-.883L13 26v-5.657h2l-.001 3.243 10.315-10.314z"
                                                        fill="#8494A5"></path>
                                                </svg>
                                            @else
                                                <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" role="img"
                                                    aria-labelledby="transactionTypeSend" height="32" width="32">
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
                    </div>
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
