<?php

namespace App\Http\Livewire;

use App\Models\Measurement as ModelsMeasurement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Livewire\Component;

class Measurement extends Component
{
    public function render()
    {
        return view('livewire.measurements');
    }

    public function index(Request $request): JsonResponse
    {
        $measurements = ModelsMeasurement::get();
        return response()->json($measurements);
    }

    public function create()
    {
        return view('livewire.measurements');
    }

    public function store(Request $request): JsonResponse 
    {
        $request->validate([
            'date' => 'required',
            'waist' => 'numeric',
            'chest' => 'numeric',
            'leftArm' => 'numeric',
            'rightArm' => 'numeric'
        ]);

        ModelsMeasurement::create([
            'date' => $request->date,
            'waist' => $request->waist,
            'chest' => $request->chest,
            'left-arm' => $request->leftArm,
            'right-arm' => $request->rightArm
        ]);

        return response()->json(['success' => 'Success', 'Request data' => $request->all()]);
    }
}
