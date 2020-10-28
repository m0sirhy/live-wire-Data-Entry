<?php

namespace App\Imports;

use App\Models\ConsumptionCycle;
use Maatwebsite\Excel\Concerns\ToModel;

class ConsumptionCycleImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new ConsumptionCycle([
            //
            
            'full_name'     => $row['0'],
            'cycle_id'     => 1,

            'mobile'    => $row['1'],
            'address'     => $row['2'],
            'previous'     => $row['3'],
            'curent'     => $row['4'],
        ]);
    }
}
