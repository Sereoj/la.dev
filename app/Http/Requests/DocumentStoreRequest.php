<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class DocumentStoreRequest extends FormRequest
{
    public function rules()
    {
        return
            [
                'document_type' => 'required|exists:document_types,id',
                'document' => 'required|file|mimes:txt',
            ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new ValidationException($validator, response()->json($validator->errors(),422));
    }
}
