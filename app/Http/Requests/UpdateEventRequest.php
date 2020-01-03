<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|max:255',  
            'description' => 'required',
            'nbr_interesse' => 'integer',  
            'nbr_participe' => 'integer',
            'organisateur' => 'required',
            'adresse' => 'max:255|nullable',
            'date_debut' => 'date_format:Y-m-d|after:today|nullable',
            'duree' => 'max:100|nullable',
        ];

    }
    public function wantsJson()
    {
        return true;
    }
}
