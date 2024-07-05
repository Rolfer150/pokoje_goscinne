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
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'max:100',
            'email' => 'email',
//            'phone' => 'min:100000000|max:999999999',
            'comments' => 'max:6400',
            'people_amount' => 'required|min:1|max:4',
//            'rooms' => 'required',
            'rental_start' => 'required|date',
            'rental_end' => 'required|date',
        ];
    }
}
