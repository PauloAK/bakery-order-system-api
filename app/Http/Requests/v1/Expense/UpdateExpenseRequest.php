<?php

namespace App\Http\Requests\v1\Expense;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExpenseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:255'],
            'quantity' => ['required', 'decimal'],
            'quantity_type' => ['required', 'max:50'],
            'quantity_is_integer' => ['nullable', 'boolean'],
            'value' => ['required', 'integer']
        ];
    }
}
