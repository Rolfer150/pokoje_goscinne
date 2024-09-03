<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRenalRequest extends FormRequest
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
            'content' => '"Zawartość"',
            'people_amount' => '"Ilość gości"',
            'room_id' => '"Pokoje"',
            'rental_start' => '"Data rozpoczęcia pobytu"',
            'rental_end' => '"Data zakończenia pobytu"',
            'comments' => '"Uwagi"'
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
            'comments' => 'max:6400',
            'people_amount' => 'required|min:1|max:4',
            'room_id' => 'required',
            'rental_start' => 'required|date',
            'rental_end' => 'required|date',
        ];
    }
}
