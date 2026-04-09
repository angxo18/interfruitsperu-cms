<?php

namespace App\Http\Requests\Admin\User;

use App\Enums\Admin\DateFilterOperator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'filter.created_at' => ['sometimes', 'array'],
            'filter.created_at.operator' => [
                'sometimes',
                'required',
                'string',
                Rule::enum(DateFilterOperator::class),
            ],
            'filter.created_at.from' => [
                'required_with:filter.created_at.operator',
                'date',
            ],
            'filter.created_at.to' => [
                'nullable',
                'required_if:filter.created_at.operator,'.DateFilterOperator::BETWEEN->value,
                'date',
                'after_or_equal:filter.created_at.from',
            ],
            'filter.search' => ['nullable', 'string', 'max:255'],
            'filter.name' => ['nullable', 'string', 'max:255'],
            'filter.email' => ['nullable', 'string', 'max:255'],
        ];
    }
}
