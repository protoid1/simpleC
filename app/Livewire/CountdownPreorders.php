<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class CountdownPreorders extends Component
{
    public $endTime;
    public $timeRemaining;

    public function mount($targetDate=null)
    {
        // Ubah target waktu ke timestamp
        $this->endTime = Carbon::parse($targetDate ?? '2025-12-31 23:59:59')->timestamp;
        $this->updateTimeRemaining();
    }

    public function updateTimeRemaining()
    {
        // Hitung sisa waktu dari server
        $this->timeRemaining = max(0, $this->endTime - Carbon::now()->timestamp);
    }
    public function render()
    {
        return view('livewire.countdown-preorders');
    }
}
