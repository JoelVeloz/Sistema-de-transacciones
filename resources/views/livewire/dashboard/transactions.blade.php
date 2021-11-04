<div
    class="relative flex flex-col w-full h-full bg-white border border-indigo-300 rounded-lg shadow-lg dark:bg-gray-700">
    {{-- <div class="z-50 flex flex-col items-center flex-grow w-full bg-white rounded-lg shadow-lg dark:bg-gray-700"> --}}
    {{-- <button>
                x
            </button>
            <br>
            @foreach ($transation->toArray() as $item => $data)
                <br>
                {{ json_encode($item) . ' - ' . json_encode($data) }}
            @endforeach
            <br> --}}
    {{-- {{ $transation->transferWithdraw }} --}}
    {{-- @if ($open) --}}
    @include('components.widgets.item-transaction' ,["transaction" => $transation , "currencies" => $currencies])
    <p class="px-4 pb-6 font-bold text-black text-md dark:text-white">
        Ultimas transacciones
    </p>


    <div class="flex flex-col flex-grow w-full rounded-lg shadow-xs">
        <div class="flex-grow w-full">
            <table class="flex-grow w-full ">
                <thead class="flex justify-between flex-grow w-full">
                    <tr
                        class="grid w-full grid-cols-4 text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        {{-- <th class="px-4 py-3">Transacción</th>
                        <th class="px-4 py-3 text-center">Fecha</th>
                        <th class="px-6 py-3 text-right">Monto</th> --}}
                        <th class="col-span-2 p-4">Transacción</th>
                        <th class="p-4 text-center">Fecha</th>
                        <th class="p-4 text-right">Monto</th>
                    </tr>
                </thead>
                <tbody class="flex flex-col w-full overflow-y-auto bg-grey-light h-96">
                    @foreach ($transactions->sortByDesc('id')->take(10) as $transaction)
                        <tr wire:click="abrir({{ $transaction }})"
                            class="grid w-full grid-cols-4 text-gray-700 border-b border-gray-200 dark:text-gray-400 hover:bg-blue-100">
                            <td class="w-full col-span-2 px-4 py-2 whitespace-nowrap">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="w-8 h-8 mr-3 rounded-full ">
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

                            <td class="flex items-center justify-center py-2 text-xs text-center whitespace-nowrap">
                                {{ $transaction->created_at }}
                            </td>
                            <td class="px-6 py-2 text-xs text-right whitespace-nowrap">
                                @if ($transaction->amount > 0)
                                    <p class="font-semibold text-green-500">
                                        {{ number_format(abs($transaction->amount) / pow(10, $transaction->wallet->decimal_places), $transaction->wallet->decimal_places) . ' ' . $transaction->wallet->slug }}
                                    </p>
                                @else
                                    <p class="font-semibold text-red-600">
                                        {{ number_format(abs($transaction->amount) / pow(10, $transaction->wallet->decimal_places), $transaction->wallet->decimal_places) . ' ' . $transaction->wallet->slug }}
                                    </p>
                                @endif
                                <p class="w-full text-xs text-gray-600 dark:text-gray-400">
                                    @if ($transaction->wallet->slug == 'USD')
                                        {{ "$" . number_format(abs($transaction->amount / pow(10, $transaction->wallet->decimal_places)), 2) }}
                                    @else
                                        {{ "$" . number_format(abs(Arr::get($transaction->meta, 'rate', 0) * $transaction->amount) / pow(10, $transaction->wallet->decimal_places), 2) }}

                                    @endif
                                </p>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div
            class="flex-grow px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t rounded-b-lg dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <span class="flex items-center col-span-3">
                Ver mas
            </span>
        </div>
        <div
            class="flex-grow px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t rounded-b-lg dark:border-gray-700 bg-blue-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <span class="flex items-center col-span-3">
                --ESPACIO PUBLICITARIO--
            </span>
        </div>

    </div>

</div>
