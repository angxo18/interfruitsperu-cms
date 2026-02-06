<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    protected $errorBag = 'filters';

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

            // 'filter.created_at' => ['sometimes', 'string', 'regex:/^\d{4}-\d{2}-\d{2}\s*to\s*\d{4}-\d{2}-\d{2}$/'],
            'filter.search' => ['nullable', 'string', 'min:2', 'max:255'],
            'filter.name' => ['nullable', 'string', 'max:255'],
            'filter.email' => ['nullable', 'string', 'max:255'],
        ];
    }
}
