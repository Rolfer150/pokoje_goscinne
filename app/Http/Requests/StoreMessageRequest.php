<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => '"Imię i nazwisko"',
            'email' => '"Adres e-mail"',
            'phone_number' => '"Numer telefonu"',
            'topic' => '"Temat"',
            'content' => '"Zawartość"'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'max:100',
            'email' => 'required_without:phone_number|nullable|email',
            'phone_number' => 'required_without:email|nullable|regex:/^[0-9]{9}$/',
            'topic' => 'required|max:32',
            'content' => 'required|max:6400',
        ];
    }
}
