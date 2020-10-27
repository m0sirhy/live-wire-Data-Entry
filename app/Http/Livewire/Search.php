<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use App\Models\ConsumptionCycle;

class Search extends Component
{
    
    public $query, $clients, $curent;

    public function mount()
    {
        $this->clients=[];
        $this->query = '';
        $this->curent='';
        $this->reset();

    }

    public function resett()
    {
        $this->reset(['query', 'clients','curent']);

      
    }
    public function updatedQuery()
    {

        $this->clients = ConsumptionCycle::where('full_name', 'like', '%' . $this->query . '%')
            ->limit(40)
            ->get()
            ->toArray();
    }

    public function update($id)
    {

        if ($this->id) {
            $record = ConsumptionCycle::find($id);
            $record->update([
                'curent' => $this->curent,
            ]);
            session()->flash('message', $record->full_name.' " :تمت اضافة قراءة للسيد '   );

            $this->resetInput();
            $this->updateMode = false;
        }
    }
    private function resetInput()
    {

        $this->curent = null;
        $this->query = null;
        $this->clients=[];

    }

  

}
