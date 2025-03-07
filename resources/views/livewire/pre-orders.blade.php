
<div>
    <h1 class="text-center mb-2"> Form </h1>

    <form wire:submit="createActions">
        {{ $this->form }} {{-- Render form di sini --}}
        
        {{-- <button type="submit">
            Submit
        </button> --}}
        
         {{-- <x-filament-actions::modals /> --}}
        <x-filament::button class="
        bg-chamoisee-700 
        text-raisin_black-400 
        hover:bg-chamoisee-700
        mt-3
        w-full"
        wire:click="createActions"
        >  Create
        </x-filament::button>
    </form>
</div>
