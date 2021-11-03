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
    @if ($open)
        <div class="absolute flex items-center justify-center w-full h-full bg-gray-500 bg-opacity-50 rounded-lg">
            <div class="z-50 p-4 m-auto bg-white shadow-lg w-96 rounded-2xl dark:bg-gray-800">
                <div class="w-full h-full text-center">
                    <div class="flex flex-col justify-between h-full">
                        <p class="pb-5 mt-4 text-xl font-bold text-gray-800 dark:text-gray-200">
                            Detalles de la transacción
                        </p>
                        <div class="flex justify-between gap-2 text-gray-600">
                            <p>
                                Tasa de cambio
                            </p>
                            <p>
                                1.00 XRP ≈ 19.59 TRX
                            </p>
                        </div>

                        <div
                            class="flex flex-col justify-start gap-1 py-2 text-xs text-left text-gray-600 dark:text-gray-400">

                            <p>
                                ID de transacción:
                            </p>
                            <p class="font-semibold">
                                e50697f6-deba-49a1-972b-9f47b87f5ea4
                            </p>
                            <p>
                                Fecha:
                            </p>
                            <p class="font-semibold">
                                December 17, 2020, 9:40:29 AM
                            </p>
                            <p>
                                Estado:
                            </p>
                            <p class="flex items-center gap-2 font-semibold">
                                <button type="button" class="w-2 h-2 text-xs text-white bg-green-400 rounded-full">
                                    <span class="p-1">
                                    </span>
                                </button>
                                Completado
                            </p>

                        </div>
                        <div class="flex items-center justify-between w-full gap-4 mt-8">
                            <button type="button" wire:click="cerrar"
                                class="w-full px-4 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-indigo-600 rounded-lg shadow-md hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                                Ok
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <p class="p-4 font-bold text-black text-md dark:text-white">
        Ultimas transacciones
        {{-- <span class="ml-2 text-sm text-gray-500 dark:text-gray-300 dark:text-white">
                ({{ $transactions->count() }})
            </span> --}}
    </p>
    <div class="flex flex-col flex-grow w-full rounded-lg shadow-xs">
        <div class="flex-grow w-full">
            <table class="flex-grow w-full ">
                <thead class="flex justify-between flex-grow w-full">
                    <tr
                        class="flex w-full text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        {{-- <th class="px-4 py-3">Transacción</th>
                        <th class="px-4 py-3 text-center">Fecha</th>
                        <th class="px-6 py-3 text-right">Monto</th> --}}
                        <th class="w-1/3 p-4">Transacción</th>
                        <th class="w-1/3 p-4">Fecha</th>
                        <th class="w-1/3 p-4">Monto</th>
                    </tr>
                </thead>
                <tbody class="flex flex-col flex-grow w-full overflow-y-scroll bg-grey-light h-96">
                    @foreach ($transactions->sortByDesc('id')->take(10) as $transaction)
                        <tr wire:click="abrir({{ $transaction }})"
                            class="w-full text-gray-700 dark:text-gray-400 hover:bg-blue-100">
                            <td class="w-3/5 px-4 py-2">
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

                            <td class="px-6 py-2 text-sm text-center whitespace-nowrap">
                                {{ $transaction->created_at }}
                            </td>
                            <td class="w-1/3 px-6 py-2 text-sm text-right">
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
