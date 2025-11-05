<?php
namespace App\Http\Controllers\Auth\Traits;
use App\Models\User;
use Illuminate\Validation\ValidationException;


trait AuthValidations
{
    public function verifyPasses($pass, $pass2)
    {
        if ($pass === $pass2) {
            return true;
        }
        return false;
    }


    public function validateMail($email)
    {   // queda pendiente
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function verifyUserOnBd($email, $name)
    {
        return User::where('email', $email)->orWhere('name', $name)->exists();
    }

    public function verifyMailOnDb($mail)
    {
        return User::where('email', $mail)->exists();
    }

    protected function verifyNameOnDb($name)
    {
        return User::where('name', $name)->exists();
    }


    public function verifyPassCharacters($req)
    {
        try{
            $req->validate();

             return true;
        }
        catch(ValidationException $e)
        {
            return false;
        }
    }


}