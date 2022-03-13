<?php

namespace App\Http\Livewire;

use App\Models\Measurement;
use Illuminate\Http\Request;
use Livewire\Component;

class MeasurementTable extends Component
{

    public $count = 0;
 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required',
            'chest' => 'required',
            'height' => 'required',
            'left_arm' => 'required',
            'right_arm' => 'required',
        ]);

        Measurement::create($validated);
    }

    public function render()
    {
        $measurements = Measurement::all();
        return view('livewire.measurement-table', compact('measurements'));
    }
}
