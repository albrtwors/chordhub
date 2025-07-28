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
        return User::where('mail', $email)->orWhere('name', $name)->exists();
    }

    public function verifyMailOnDb($mail)
    {
        return User::where('mail', $mail)->exists();
    }

    protected function verifyNameOnDb($name)
    {
        return User::where('name', $name)->exists();
    }


    public function verifyPassCharacters($req)
    {
        try{
            $req->validate([
            'pass' => [
                'required',
                'regex:/^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$/'
            ]]);

             return true;
        }
        catch(ValidationException $e)
        {
            return false;
        }
    }


}