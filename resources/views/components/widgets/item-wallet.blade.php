<div class="flex items-center justify-between w-full border-2 rounded-lg border-cool-gray-200">
    <div class="flex items-center p-1">
        <span class="relative p-2 bg-blue-100 rounded-xl">

            {!! $currencies->where('code', $wallet->slug)->first() == null ? '' : $currencies->where('code', $wallet->slug)->first()['image'] !!}

        </span>
        <div class="flex flex-col">
            <span class="ml-2 font-bold text-black text-md dark:text-white">
                {{ $wallet->name }}
            </span>
            <span class="ml-2 text-sm text-left text-gray-500 dark:text-white">
                $ {{ round(1 / $cambio[$wallet->slug], 5) }}
            </span>
        </div>
    </div>
    <div class="flex items-center">

        <div class="flex flex-col px-3 py-2 text-sm text-right">
            <p class="font-semibold text-green-500">
                {{ $wallet->balanceFloat . ' ' . $wallet->slug }}
            </p>
            <p class="text-xs text-gray-600 dark:text-gray-400">
                {{-- $ {{ round($cambio[$wallet->slug], 5) }} --}}
                {{-- ${{ number_format(\App\Models\RatesTest::rate($wallet) * $wallet->balanceFloat, 2) }} --}}

                ${{ number_format((1 / $cambio[$wallet->slug]) * $wallet->balanceFloat, 2) }}
            </p>
        </div>
    </div>
</div>
