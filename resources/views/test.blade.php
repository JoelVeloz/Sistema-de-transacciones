<x-app-layout>



    <div class="grid h-full grid-cols-3 gap-4">
        <div class="flex flex-col w-full gap-4 bg">
            @include('components.widgets.balance')

            <div class="flex gap-4 p-4 bg-white border border-indigo-300 rounded-lg shadow-xs dark:bg-gray-800 ">
                @livewire('test.receive-money')
                @livewire('test.send-money')
            </div>
            @livewire('dashboard.wallets')
        </div>
        <div class="w-full h-full col-span-2">
            @livewire('dashboard.transactions')
        </div>
    </div>

</x-app-layout>
