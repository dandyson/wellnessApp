<?php

namespace App\Http\Livewire;

use App\Models\Measurement;
use Livewire\Component;

class MeasurementTable extends Component
{
    public function render()
    {
        $measurements = Measurement::all();
        return view('livewire.measurement-table', compact('measurements'));
    }
}
