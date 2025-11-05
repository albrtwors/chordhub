<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class SignRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users,email',
            'name' => 'required|min:8|max:15|regex:/^[a-zA-Z][a-zA-Z0-9]{7,14}$/|unique:users,name',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$/|confirmed'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.min' => 'El nombre debe tener al menos 8 caracteres',
            'name.max' => 'El nombre no puede tener más de 15 caracteres',
            'name.regex' => 'El nombre no cumple con el formato especificado',
            'name.unique' => 'El nombre ya está en uso',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El email no tiene un formato válido',
            'email.unique' => 'El email ya está en uso',
            'password.required' => 'La contraseña es requerida',
            'password.regex' => 'La contraseña no cumple los requerimientos',
            'password.confirmed' => 'La confirmación de la contraseña no coincide',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        
        if ($errors->has('name')) {
            $message = $errors->first('name');
        } elseif ($errors->has('email')) {
            $message = $errors->first('email');
        } elseif ($errors->has('password')) {
            $message = $errors->first('password');
        } else {
            $message = 'Hubo un error de validación';
        }

        $response = response()->json([
            'status' => 'wrong',
            'message' => $message
        ], 422);

        throw new HttpResponseException($response);
    }


}