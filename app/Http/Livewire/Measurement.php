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
}
