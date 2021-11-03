<div
    class="h-full p-4 bg-white border border-indigo-300 rounded-lg shadow-lg table-fixed welative-full dark:bg-gray-700">
    <p class="pb-2 font-bold text-black text-md dark:text-white">
        Monederos
        <span class="ml-2 text-sm text-gray-500 dark:text-gray-300 dark:text-white">
            ({{ $wallets->count() }})
        </span>
    </p>
    {{-- <div class="overflow-y-scroll ">
        @foreach ($wallets as $wallet)
            <button class="w-full ">
                @include('components.widgets.item-wallet')
            </button>
        @endforeach
    </div> --}}
    <table class="w-full text-left">
        <tbody class="flex flex-col items-center w-full gap-1 overflow-y-auto h-72 bg-grey-light">
            @foreach ($wallets as $wallet)
                <tr class="flex w-full ">
                    <td class="w-full">
                        <button class="w-full">
                            @include('components.widgets.item-wallet')
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
