<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
            'email' => 'email',
            'phone_number' => 'min:100000000|max:999999999',
            'comments' => 'max:6400',
            'people_amount' => 'required|min:1',
            'rental_start' => 'required',
            'rental_end' => 'required',
        ];
    }
}
