<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ConsumptionCycleExport;
use App\Imports\ConsumptionCycleImport;
use Maatwebsite\Excel\Facades\Excel;
    
class GateController extends Controller
{
    //
      /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ConsumptionCycleExport, 'ConsumptionCycle.xlsx');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ConsumptionCycleImport,request()->file('file'));
             
        return back();
    }
}
