<?php

namespace App\Exports;

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
}
