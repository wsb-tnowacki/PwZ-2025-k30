<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'tytul' => 'required|max:200|min:5',
            'autor' => 'required|max:100|min:3',
            'email' => [
                'required',
                'email:rfc,dns',
                'min:3',
                'max:200'
            ],
            'tresc' => 'required|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Pole jest wymagane',
            'min' => 'Minimalna liczba znaków to :min',
            'max' => 'Maksymalna liczba znaków to :max',
            'email' => 'Adres email jest nieprawidłowy',
        ];
    }
}
