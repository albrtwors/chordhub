<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

use Illuminate\Http\Exceptions\HttpResponseException;

class FileUpdateRequest extends FormRequest
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
            'songs'=>'required',
            'listname'=>'required|max:45'
        ];
    }
    public function messages(): array
    {
        return [
           
            'songs.required' => 'Debes insertar una o mas canciones',
            'listname.required' => 'Debes colocarle un nombre al cancionero',
            'listname.max'=>'El nombre es muy largo',
           
    
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        if($errors->has('songs')) {
            $message = $errors->first('songs');
        } elseif($errors->has('listname')){
            $message = $errors->first('listname');
        }else {
            $message = 'Hubo un error de validación';
        }

        $response = response()->json([
            'status' => 'wrong',
            'message' => $message
        ], 422);

        throw new HttpResponseException($response);


    }
}