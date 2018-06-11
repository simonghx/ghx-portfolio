<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProject extends FormRequest
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
            'titre' => 'required|max:255',
            'desc' => 'required',
            'image' => 'image|max:200000',
            'client' => 'required|max:255',
            'technologyid' => 'required'
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
    public function messages()
    {
        return [
            'titre.required' => 'Le champs :attribute est requis',
            'titre.max'=>'Le champs :attribute ne peut pas dépasser les 10 caractères',
            'desc.required'  => 'Le champs :attribute est requis',
            'image.image'  => ':attribute doit être un fichier image (jpeg, png, bmp, gif, ou svg)',
            'image.max'  => ':attribute doit être un fichier de max :max octets.',
            'client.required' => 'Le champs :attribute est requis',
            'client.max'=>'Le champs :attribute ne peut pas dépasser les 10 caractères',
            'technologyid.required' => "La selection d'une technologie est requise",
        ];
    }

}
