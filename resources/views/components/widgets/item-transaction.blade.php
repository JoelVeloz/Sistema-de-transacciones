<div x-cloak x-data="{ show: @entangle('open').defer}" class="w-full h-full ">
    <div x-show="show" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="absolute flex items-center justify-center w-full h-full bg-gray-500 bg-opacity-50 rounded-lg">
        <div class="p-4 m-auto bg-white shadow-lg  w-96 rounded-2xl dark:bg-gray-800">
            <div class="w-full h-full text-center">
                <div class="flex flex-col justify-between h-full">
                    <p class="pb-5 mt-4 text-xl font-bold text-gray-800 dark:text-gray-200">
                        Detalles de la transacción
                    </p>
                    {{-- {{ $transaction->payable }} --}}
                    {{-- {{ $transaction->wallet }} --}}
                    {{-- {{ $transaction->wallet }} --}}
                    @if (Auth::user() == $transaction->payable)

                    @else
                        <div class="flex items-center justify-center w-full gap-3 pb-3">
                            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" role="img" fill="#8494A5"
                                height="32" width="32" class="sc-gsTCUz">
                                <path
                                    d="M20 2c9.941 0 18 8.059 18 18s-8.059 18-18 18S2 29.941 2 20 10.059 2 20 2zm0 2C11.163 4 4 11.163 4 20s7.163 16 16 16 16-7.163 16-16S28.837 4 20 4zm0 20.49c4.416 0 8.351 1.19 10.186 3.683l.157.223-1.666 1.108c-1.25-1.878-4.53-2.948-8.32-3.011L20 26.49c-3.821 0-7.18 1.013-8.554 2.84l-.123.174-1.666-1.108c1.71-2.57 5.568-3.833 9.955-3.903L20 24.49zm-.022-16.46c4.39-.095 6.852 3.85 6.045 7.908l-.048.225-.237 1.02-.144.569C24.597 21.525 23.322 23 20 23c-3.315 0-4.593-1.456-5.582-5.165l-.074-.282-.141-.577-.227-.972c-.85-4.084 1.585-7.878 6.002-7.974zm.247 2h-.203c-3.047.066-4.69 2.603-4.094 5.534l.045.205.31 1.3.138.521C17.155 20.253 17.921 21 20 21c2.182 0 2.942-.885 3.725-4.003l.07-.28.131-.565.142-.638c.55-2.835-1.026-5.425-3.843-5.484z">
                                </path>
                            </svg>

                            <div class="flex items-center justify-center ">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 15 15" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 7.5C14 7.66148 13.922 7.81301 13.7906 7.90687L6.79062 12.9069C6.63821 13.0157 6.43774 13.0303 6.27121 12.9446C6.10467 12.8589 6 12.6873 6 12.5L6 10L3.5 10C3.22386 10 3 9.77614 3 9.5L3 5.5C3 5.22386 3.22386 5 3.5 5L6 5L6 2.5C6 2.31271 6.10467 2.14112 6.27121 2.05542C6.43774 1.96972 6.63821 1.98427 6.79062 2.09313L13.7906 7.09314C13.922 7.18699 14 7.33853 14 7.5ZM7 3.4716L7 5.5C7 5.77614 6.77614 6 6.5 6L4 6L4 9L6.5 9C6.77614 9 7 9.22386 7 9.5L7 11.5284L12.6398 7.5L7 3.4716Z"
                                        fill="currentColor" />
                                </svg>
                            </div>

                            @isset($transaction->wallet)
                                {!! $currencies->where('code', $transaction->wallet->slug)->first() == null ? '' : $currencies->where('code', $transaction->wallet->slug)->first()['image'] !!}
                            @endisset

                        </div>


                        <div class="flex justify-between gap-2 text-gray-600">
                            <p>
                                Monto enviado
                            </p>
                            @isset($transaction->wallet)
                                <p>
                                    {{ number_format(abs($transaction->amount) / pow(10, $transaction->wallet->decimal_places), $transaction->wallet->decimal_places) . ' ' . $transaction->wallet->slug }}
                                </p>
                            @endisset

                        </div>
                    @endif
                    {{-- <div class="flex justify-between gap-2 text-gray-600">
                        <p>
                            Tasa de cambio
                        </p>
                        <p>
                            1.00 XRP ≈ 19.59 TRX
                        </p>
                    </div> --}}



                    <div
                        class="flex flex-col justify-start gap-1 py-2 text-xs text-left text-gray-600 dark:text-gray-400">

                        <p>
                            ID de transacción:
                        </p>
                        <p class="font-semibold">
                            {{ $transaction->uuid }}
                        </p>
                        <p>
                            Fecha:
                        </p>
                        <p class="font-semibold">
                            {{-- December 17, 2020, 9:40:29 AM --}}
                            {{ $transaction->created_at }}

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
                        @if (Arr::get($transaction->meta, 'description', 0) != 0)
                            <p>
                                Nota:
                            </p>
                            <p class="flex items-center gap-2 font-semibold">
                                {{ Arr::get($transaction->meta, 'description', false) }}
                            </p>
                        @endif
                    </div>
                    <div class="flex items-center justify-between w-full gap-4 mt-8">
                        <button type="button" x-on:click="show = false"
                            class="w-full px-4 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-indigo-600 rounded-lg shadow-md hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                            Ok
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
