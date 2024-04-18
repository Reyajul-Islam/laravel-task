<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class BookingRequest extends FormRequest
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
            'hostel_id' => ['required', 'integer'],
            'email' => ['nullable', 'email'],
            'check_in_date' => ['required', 'date'],
            'check_out_date' => ['required', 'date'],
            'room_type' => ['required', 'string', 'max:255'],
            'occupants' => ['required', 'integer']
        ];
    }
}
