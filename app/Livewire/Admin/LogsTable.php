<?php

namespace App\Livewire\Admin;

use App\Models\Log;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class LogsTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $name='';
    public $quantity='10';
    public $startDate = '';
    public $endDate='';
    public $order='id';
    public $direction='desc';

    public function updatingName(){
        $this->resetPage();
    }    

    public function render()
    {
        $lQuery = Log::with('user')->where(function ($q){
            $q->where('name', 'like', '%'.$this->name.'%');
            if($this->startDate!=''&&$this->endDate!=''){
                $from = Carbon::parse(explode(' ',$this->startDate)[0]);
                $to = Carbon::parse(explode(' ',$this->endDate)[0]);
                $q->whereBetween('created_at', [$from,$to]);
            }  
        });
        $logs = $lQuery->orderBy('created_at', 'desc')->paginate($this->quantity);

        return view('livewire.admin.logs-table', compact('logs'));
    }
}