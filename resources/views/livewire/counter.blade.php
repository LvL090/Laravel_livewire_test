<div class="flex justify-center">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <button wire:click="increment" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-6 border border-blue-500 hover:border-transparent rounded m-5">+</button>

    <span>{{ $count }}</span>

    <button wire:click="decremet" class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-6 border border-green-500 hover:border-transparent rounded m-5">-</button>
</div>
