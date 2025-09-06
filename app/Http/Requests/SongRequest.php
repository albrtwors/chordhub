<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
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
            'name'=>'required|max:45|unique:songs,name',
            'author'=>'required|max:45',
            'genre'=>'required',
            'structure'=>'required',
            
            
        ];
    }

    public function messages(): array
    {
        return [
           
            'name.required' => 'El nombre es requerido',
            'name.unique' => 'Ya existe una canción con este nombre ',

            'name.max'=>'El nombre no debe sobrepasar los 45 caracteres',
            'author.required' => 'El autor es requerido',
            'author.max'=>'El nombre del autor no debe ser mayor a 45 caracteres',
            'genre.required' => 'El género es requerido',
            'structure.required'=>'Necesitas armar una estructura'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        if($errors->has('name')) {
            $message = $errors->first('name');
        } elseif($errors->has('author')){
            $message = $errors->first('author');
        }elseif($errors->has('genre')){
            $message = $errors->first('genre');
        }elseif($errors->has('structure')){
            $message = $errors->first('structure');
        }
        else {
            $message = 'Hubo un error de validación';
        }

        $response = response()->json([
            'status' => 'wrong',
            'message' => $message
        ], 422);

        throw new HttpResponseException($response);


    }
}