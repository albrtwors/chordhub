<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class RestoreRequest extends FormRequest
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
            'password'=> 'required|regex:/^(?=.*[A-Z])(?=(?:.*\d){3})[A-Za-z\d]{8,15}$/|confirmed'
        ];
    }


     public function messages(): array
    {
        return [
           
            'password.required' => 'La contraseña es requerida',
            'password.regex' => 'La contraseña no cumple los requerimientos',
            'password.confirmed' => 'La confirmación de la contraseña no coincide',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        if($errors->has('password')) {
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