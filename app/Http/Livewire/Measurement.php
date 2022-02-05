<?php

namespace App\Http\Livewire;

use App\Models\Measurement as ModelsMeasurement;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Livewire\Component;
use DataTables;

class Measurement extends Component
{
    public function render()
    {
        $this->measurements = ModelsMeasurement::all();
        return view('livewire.measurements');
    }

    public function index(Request $request): JsonResponse
    {
        if ($request->ajax()) {
            $data = ModelsMeasurement::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm measurement-edit">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm measurement-delete">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create()
    {
        return view('livewire.measurements');
    }

    public function show(Request $request, ModelsMeasurement $measurement)
    {
        $validated = $request->validate([
            'date' => 'required',
            'waist' => 'numeric',
            'chest' => 'numeric',
            'leftArm' => 'numeric',
            'rightArm' => 'numeric'
        ]);

        $measurement->update([
            'date' => $request->get('date'),
            'waist' => $request->get('waist'),
            'chest' => $request->get('chest'),
            'leftArm' => $request->get('left_arm'),
            'rightArm' => $request->get('right_arm'),
        ]);

        return response()->json(['success' => 'Update successful!']);
    }

    public function store(): JsonResponse 
    {
        $request->validate([
            'date' => 'required',
            'waist' => 'numeric',
            'chest' => 'numeric',
            'leftArm' => 'numeric',
            'rightArm' => 'numeric'
        ]);

        ModelsMeasurement::updateOrCreate(['id' => $this->id], [
            'date' => $request->date,
            'waist' => $request->waist,
            'chest' => $request->chest,
            'left_arm' => $request->leftArm,
            'right_arm' => $request->rightArm
        ]);

        return response()->json(['success' => 'Success', 'Request data' => $request->all()]);
    }

    public function edit(Request $request)
    {
        $measurements = ModelsMeasurement::all();
        return view('livewire.measurement-edit')->with('measurements', $measurements);
    }
}
