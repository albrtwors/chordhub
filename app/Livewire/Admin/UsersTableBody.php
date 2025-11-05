<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class UsersTableBody extends Component
{
    public $allUsers = [];
    public function mount($users)
    {
        $this->allUsers = $users;
    }
    public function render()
    {
        $users = $this->allUsers;
        return view('livewire.admin.users-table-body', compact('users'));
    }
}