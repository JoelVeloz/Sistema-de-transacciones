<div>

    {{ $from }} / {{ $to }}
    <br>
    <label class="text-gray-700" for="animals">
        Desde
        <select id="animals" wire:model="from"
            class="block w-52 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
            name="animals">
            <option value="">
                Select an option
            </option>
            @foreach ($currencies as $item)
                {{-- <button wire:click="fromData({{ $item }})"> --}}
                <option value="{{ $item }}">
                    {{ $item }}
                </option>
                {{-- </button> --}}
            @endforeach
        </select>
    </label>
    <input type="text" wire:model="ammount" placeholder="$0.00">
    <br>

    <label class="text-gray-700" for="animals">
        To
        <select id="animals" wire:model="to"
            class="block w-52 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500"
            name="animals">
            <option value="">
                Select an option
            </option>
            @foreach ($currencies as $item)
                <option value="{{ $item }}" wire:click="ToData({{ $item }})">
                    {{ $item }}
                </option>
            @endforeach
        </select>
    </label>


