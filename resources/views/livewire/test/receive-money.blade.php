<div class="w-full">
    <button wire:click="abrir"
        class=" w-full flex items-center justify-center py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="transactionTypeReceive"
            height="32" width="32">
            <circle cx="20" cy="20" fill="#E4EAF2" r="15">
            </circle>
            <path
                d="M25.314 13.271l1.414 1.415-10.313 10.313 3.242.001v2H14a1 1 0 01-.993-.883L13 26v-5.657h2l-.001 3.243 10.315-10.314z"
                fill="#8494A5"></path>
        </svg>
        <span>Recibir</span>
    </button>

    <x-jet-modal wire:model="open">

        <div class=" rounded-2xl p-4 bg-white dark:bg-gray-800 w-80 m-auto">
            <div class="w-full h-full text-center">
                <div class="flex h-full flex-col justify-between items-center">
                    <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-labelledby="transactionTypeReceive" height="64" width="64">
                        <circle cx="20" cy="20" fill="#E4EAF2" r="20">
                        </circle>
                        <path
                            d="M25.314 13.271l1.414 1.415-10.313 10.313 3.242.001v2H14a1 1 0 01-.993-.883L13 26v-5.657h2l-.001 3.243 10.315-10.314z"
                            fill="#8494A5"></path>
                    </svg>
                    <p class="text-gray-800 dark:text-gray-200 text-xl font-bold mt-4">
                        Tu identificador:
                    </p>
                    <label for="required-email" class="text-gray-700">
                        {{ Auth::user()->email }}
                    </label>

                    <div class="flex items-center justify-between gap-4 w-full mt-8">
                        <button type="button" x-on:click="show = false"
                            class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                            Listo!
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </x-jet-modal>

</div>
