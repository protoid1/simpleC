<div>
    <div class="relative justify-items-center py-3">
        <h2 class="text-2xl font-bold">Form</h2>
        <div class="absolute inset-x-0 bottom-0 h-0.5 bg-black border-spacing-2"></div>
    </div>
    <form wire:submit="createActions">
        {{ $this->form }} {{-- Render form di sini --}}

        {{-- <button type="submit">
            Submit
        </button> --}}

        {{-- <x-filament-actions::modals /> --}}
        <x-filament::button class="
        bg-yellow-800 
        text-raisin_black-400 
        hover:bg-chamoisee-700
        mt-3
        w-full" wire:click="createActions"> Create
        </x-filament::button>
    </form>
</div>