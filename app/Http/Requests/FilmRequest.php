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
            'author'=> 'required',
            'year'=> 'required | integer',
            'description'=> 'required',
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'Il titolo è obbligatorio',
            'author.required'=>"Il nome dell'autore è obligatorio",
            'year.required'=> "L'anno è obbligatorio",
            'year.integer'=>"Devi inserire solo numeri interi",
            'description.required'=>'La descrizione è obbligatoria',
        ];
    }
}
