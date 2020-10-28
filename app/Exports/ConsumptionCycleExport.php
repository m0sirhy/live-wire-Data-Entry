<?php

namespace App\Exports;
use Illuminate\Http\Request;

use App\Models\ConsumptionCycle;
use Carbon\Traits\Date;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class ConsumptionCycleExport implements FromCollection,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ConsumptionCycle::all();
    }

    public function map($ConsumptionCycle): array
    {
        return [
            $ConsumptionCycle->full_name,
            $ConsumptionCycle->previous,
            $ConsumptionCycle->curent,


        ];
    }

    public function actions(Request $request)
{
    return [
        (new ConsumptionCycle)->only('name', 'email'),
    ];
}


}
