<?php

namespace App\Livewire;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class PreOrders extends Component implements HasForms
{
    use InteractsWithForms;

    
    public ?array $data = [];

    
    public function mount(): void
    {
        $this->form->fill();
    }

    
    
    public function form(Form $form): Form
    {
        // dd(app());
        return $form
            ->schema([
                TextInput::make('nama')->label('Nama')->columnSpan(1)
                ,
                TextInput::make('phone')->label('No Handphone'),
                // ...
            ])
            ->statePath('data');
    }

    public function createActions()
    {
        return dd($this->form->getState());
        // return Action::make('Create')
        // ->action( fn() => dd($this->form->getState()));
    }
    
    public function render(): View
    {
        return view('livewire.pre-orders');
    }
    
}
