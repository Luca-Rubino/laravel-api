<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'nome' => ['required', 'min:2', 'max:254'],
            'url_repo' => ['url'],
            'type_id' => ['required', 'exists:types,id'],
            'img' => ['image'],
            'technologies' => ['required', 'array', 'exists:technologies,id'],

        ];
    }
    /* messaggi di errore */
    public function messages(){

        return [
        'nome' => 'Devi inserire un nome valido!',
        'url_repo.url' => 'Devi inserire un url valido!',
        ];

}
}
