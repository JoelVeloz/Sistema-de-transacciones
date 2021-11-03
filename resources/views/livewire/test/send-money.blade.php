<div class="w-full">
    <button wire:click="abrir"
        class="w-full flex items-center justify-center py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="transactionTypeSend"
            height="32" width="32">
            <circle cx="20" cy="20" fill="#E4EAF2" r="15">
            </circle>
            <path
                d="M26 13a1 1 0 01.993.883L27 14v5.657h-2v-3.243L14.687 26.728l-1.414-1.415L23.586 15 20.344 15v-2H26z"
                fill="#8494A5"></path>
        </svg>
        <span>Enviar</span>
    </button>

    <x-jet-modal wire:model="open">

        <div class=" rounded-2xl p-4 bg-white dark:bg-gray-800 w-80 m-auto">
            <div class="w-full h-full text-center">
                <div class="flex h-full flex-col justify-between items-center">
                    <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-labelledby="transactionTypeSend" height="64" width="64">
                        <circle cx="20" cy="20" fill="#E4EAF2" r="15">
                        </circle>
                        <path
                            d="M26 13a1 1 0 01.993.883L27 14v5.657h-2v-3.243L14.687 26.728l-1.414-1.415L23.586 15 20.344 15v-2H26z"
                            fill="#8494A5"></path>
                    </svg>
                    <p class="text-gray-800 dark:text-gray-200 text-xl font-bold mt-4">
                        Envia a la usuario:
                    </p>
                    <div class=" relative ">
                        <label for="required-email" class="text-gray-700">
                            Correo

                        </label>
                        <input type="text" id="required-email"
                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            name="email" placeholder="Tu correo" wire:model.defer="email" />



                        <label for="required-email" class="text-gray-700">
                            Seleccion billetera a debitar

                        </label>
                        <select wire:model.defer="currency"
                            class="block w-full text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                            name="animals">
                            @foreach ($currencies as $item)
                                <option value="{{ $item }}">
                                    {{ $item }}
                                </option>
                            @endforeach

                        </select>

                        <label for="required-email" class="text-gray-700">
                            Monto

                        </label>
                        <input type="number" id="required-email"
                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            name="email" placeholder="$10" wire:model.defer="ammount" />

                        <label for="required-email" class="text-gray-700">
                            Nota
                        </label>
                        <input type="text" id="required-email"
                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            name="email" placeholder="Ingresa un comentario" wire:model.defer="note" />
                    </div>

                    <div class="flex items-center justify-between gap-4 w-full mt-8">
                        <button type="button" wire:click="send"
                            class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                            Enviar
                        </button>
                        <button type="button" x-on:click="show = false"
                            class="py-2 px-4 ring-indigo-500  bg-white hover:bg-gray-100 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-indigo-500 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </x-jet-modal>

</div>
