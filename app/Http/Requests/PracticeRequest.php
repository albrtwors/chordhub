<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class PracticeRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:30|unique:practices',
            'performDate' => 'after_or_equal:today',
            'location' => 'required|max:300',
            'startHour' => 'required',
            'endHour' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.unique' => 'Ya existe un ensayo con este nombre',
            'name.max' => 'El nombre no debe sobrepasar los 30 caracteres',
            'performDate.after_or_equal' => 'La fecha no es válida',
            'startHour.required' => 'La Hora de inicio es requerida',
            'startHour.regex' => 'La hora no es válida',
            'endHour.required' => 'La hora de cierre es requerida',
            'endHour.regex' => 'La hora no es válida',
            'location.required' => 'La ubicación es requerida',
            'location.max' => 'No debe sobrepasar el límite de caracteres la ubicación',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        if($errors->has('name')) {
            $message = $errors->first('name');
        } elseif($errors->has('performDate')){
            $message = $errors->first('performDate');
        } elseif($errors->has('startHour')){
            $message = $errors->first('startHour');
        } elseif($errors->has('endHour')){
            $message = $errors->first('endHour');
        } elseif($errors->has('location')){
            $message = $errors->first('location');
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