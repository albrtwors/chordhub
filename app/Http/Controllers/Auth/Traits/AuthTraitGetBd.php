<?php
namespace App\Http\Controllers\Auth\Traits;
use App\Models\User;

trait AuthTraitGetBd
{
    public function getUserByEmail($email)
    {
        return User::where('mail', $email)->first();
    }

    public function getUserByName($name)
    {
        return User::where('name', $name)->first();
    }

    public function getUserById($id)
    {
        return User::find($id);
    }

}