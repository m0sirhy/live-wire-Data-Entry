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
            
            'full_name'     => $row['full_name'],
            'mobile'    => $row['mobile'],
            'address'     => $row['address'],
            'previous'     => $row['previous'],
            'curent'     => $row['curent'],
        ]);
    }
}
