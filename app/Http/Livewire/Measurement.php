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
        return view('livewire.measurements');
    }

    public function index(Request $request): JsonResponse
    {
        if ($request->ajax()) {
            $data = ModelsMeasurement::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
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
