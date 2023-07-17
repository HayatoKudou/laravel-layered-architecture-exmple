<?php

namespace LibraSys\UI\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookControllerGetBook extends FormRequest
{
    public function rules(): array
    {
        return [
            "bookId" => "required|string",
        ];
    }

    public function messages(): array
    {
        return [
            'bookId.required' => 'ブックIDは必須です',
        ];
    }
}
