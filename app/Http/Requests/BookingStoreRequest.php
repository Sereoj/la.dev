<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class BookingStoreRequest extends FormRequest
{
    public function rules()
    {
        return
            [
                'user_id' => 'required|exists:users,id',
                'apartment_id' => 'required|exists:apartments,id',
                'code' => 'required',
                'started_at' => 'required|date',
                'ended_at' => 'required|date',
                'guests' => 'required|array',
                'guests.*.first_name' => 'required',
                'guests.*.last_name' => 'required',
                'guests.*.patronymic' => 'required',
                'guests.*.birthday' => 'required',
                'guests.*.phone' => 'required',
                'guests.*.gender' => 'required|in:м,ж',
                'guests.*.document_type_id' => 'required|exists:document_types,id',
                'guests.*.document_number' => 'required',
            ];
    }

    public function messages()
    {
        return [
            'unique' => "Данный :attribute уже занят."
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException($validator, response()->json($validator->errors(),422));
    }
}
