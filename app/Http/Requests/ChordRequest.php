<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class ChordRequest extends FormRequest
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
            'song_structure'=>'required',
            'name'=>'required|max:45|unique:chords,name',
        ];
    }

   public function messages(): array
    {
        return [
           
            'name.required' => 'El nombre es requerido',
            'name.unique' => 'Ya existe una versión con este nombre ',
            'name.max'=>'Limite de caracteres sobrepasado',
            'song_structure.required'=>'Necesitas establecer acordes'
            
          
    
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        if($errors->has('name')) {
            $message = $errors->first('name');
        } elseif($errors->has('structure')){
            $message = $errors->first('structure');
        }

        $response = response()->json([
            'status' => 'wrong',
            'message' => $message
        ], 422);

        throw new HttpResponseException($response);


    }
}