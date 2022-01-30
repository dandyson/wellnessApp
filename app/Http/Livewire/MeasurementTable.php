<?php

namespace App\Http\Livewire;

use App\Models\Measurement;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

class MeasurementTable extends LivewireDatatable
{
    public $model = Measurement::class;

    public function columns()
    {
        return [
            DateColumn::name('date')
                ->label('Date'),

            Column::name('waist')
                ->label('Waist'),

            Column::name('chest')
            ->label('Chest'),

            Column::name('left-arm')
            ->label('Left Arm'),

            Column::name('right-arm')
            ->label('Right Arm'),

        ];
    }
}