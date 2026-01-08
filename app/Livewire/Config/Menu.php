<?php

namespace App\Livewire\Config;

use App\Http\Controllers\BackupController;
use Livewire\Component;

class Menu extends Component
{
    public $view = 'logs';
    public function render()
    {
        return view('livewire.config.menu');
    }
    public function restoreDB(){
        $backup = BackupController::backupDatabase();
        $this->dispatch('alert', 'Base de datos guardada en la ruta '.$backup['file']);
    }
}