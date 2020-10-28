<?php

namespace App\Exports;
use Illuminate\Http\Request;

use App\Models\ConsumptionCycle;
use Maatwebsite\Excel\Concerns\FromCollection;

class ConsumptionCycleExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ConsumptionCycle::all();
    }

    public function actions(Request $request)
{
    return [
        (new ConsumptionCycle)->only('name', 'email'),
    ];
}
}
