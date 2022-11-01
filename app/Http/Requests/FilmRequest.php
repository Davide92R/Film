<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=> 'required',
            // 'author'=> 'required',
            'year'=> 'required | integer |min_digits:4',
            'description'=> 'required',
            'img'=>'required| image'
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'Il titolo è obbligatorio',
            'author.required'=>"Il nome dell'autore è obligatorio",
            'year.required'=> "L'anno è obbligatorio",
            'year.integer'=>"Devi inserire solo numeri interi",
            'year.min_digits'=>"L'anno è composto da 4 cifre, controlla!",
            'description.required'=>'La descrizione è obbligatoria',
            'img.required'=>'Devi inserire anche la copertina del film!',
        ];
    }
}
