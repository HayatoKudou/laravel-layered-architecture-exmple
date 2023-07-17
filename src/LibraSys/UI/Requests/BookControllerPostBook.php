<?php

namespace LibraSys\UI\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookControllerPostBook extends FormRequest
{
    public function rules(): array
    {
        return [
            "title" => "required|string",
            "description" => "required|string",
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'タイトルは必須です',
            'description.required' => '詳細は必須です',
        ];
    }
}
