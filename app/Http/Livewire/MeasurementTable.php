<?php

namespace App\Http\Livewire;

use App\Models\Measurement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class MeasurementTable extends Component
{
    public $data, $date, $chest, $waist, $left_arm, $right_arm, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $this->data = Measurement::all();
        return view('livewire.measurement-table');
    }

    public function switch() 
    {
        $this->updateMode = false;
    }

    private function resetInput()
    {
        $this->date = '';
        $this->chest = '';
        $this->waist = '';
        $this->left_arm = '';
        $this->right_arm = '';
    }

    public function store()
    {
        $this->validate([
            'date' => 'required|date',
            'chest' => 'required',
            'waist' => 'required',
            'left_arm' => 'required',
            'right_arm' => 'required',
        ]);

        Measurement::create([
            'date' => $this->date,
            'chest' => $this->chest,
            'waist' => $this->waist,
            'left_arm' => $this->left_arm,
            'right_arm' => $this->right_arm,
        ]);

        session()->flash('message', 'Measurement Successfully Added!');

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Measurement::findOrFail($id);

        $this->selected_id = $id;
        $this->date = $record->date;
        $this->chest = $record->chest;
        $this->waist = $record->waist;
        $this->left_arm = $record->left_arm;
        $this->right_arm = $record->right_arm;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'date' => 'required|date',
            'chest' => 'required',
            'waist' => 'required',
            'left_arm' => 'required',
            'right_arm' => 'required',
        ]);

        if ($this->selected_id) {
            $record = Measurement::find($this->selected_id);
            $record->update([
                'date' => $this->date,
                'chest' => $this->chest,
                'waist' => $this->waist,
                'left_arm' => $this->left_arm,
                'right_arm' => $this->right_arm,
            ]);

            session()->flash('message', 'Measurement Successfully Updated!');

            $this->resetInput();
            $this->updateMode = false;
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = Measurement::where('id', $id);
            $record->delete();
            session()->flash('message', 'Measurement Successfully Deleted!');
        }
    }
}
