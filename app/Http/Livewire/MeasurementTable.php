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
            Column::name('title')
                ->label('Title'),

            Column::name('slug')
                ->label('Slug'),

            DateColumn::name('created_at')
                ->label('Created at')
        ];
    }
}