<x-app-layout>
    <div class="flex justify-center w-full ">
        <div class="gap-4 p-4 bg-white border border-indigo-300 rounded-lg shadow-xs w-96 dark:bg-gray-800">
            <div class="flex flex-col ">
                <span class="text-lg font-medium text-gray-600 dark:text-white">
                    Exchange
                </span>
                <span class="text-xs text-gray-400">
                    Tradea tus monedas al instante
                </span>
            </div>
            <div>
                {{-- <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">De:</span>
                    <!-- focus-within sets the color for the icon when input is focused -->
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input
                            class="block w-full pr-10 mt-1 text-sm text-black border rounded-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                            placeholder="Jane Doe" />
                        <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </label> --}}
                {{-- <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Para:</span>
                    <!-- focus-within sets the color for the icon when input is focused -->
                    <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                        <input
                            class="block w-full pr-10 mt-1 text-sm text-black border rounded-lg dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                            placeholder="Jane Doe" />
                        <button class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </label> --}}
            </div>
        </div>
    </div>
</x-app-layout>
