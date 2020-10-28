<?php

namespace App\Imports;

use App\Models\ConsumptionCycle;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ConsumptionCycleImport implements ToModel, WithBatchInserts, WithChunkReading
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
            'mobile'    => $row['1'],
            'address'     => $row['2'],
            'previous'     => $row['3'],
        ]);
    }
    public function batchSize(): int
    {
        return 250;
    }
    public function chunkSize(): int
    {
        return 200;
    }
}
