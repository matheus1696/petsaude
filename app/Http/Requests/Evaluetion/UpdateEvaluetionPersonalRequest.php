<?php

namespace App\Http\Requests\Evaluetion;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEvaluetionPersonalRequest extends FormRequest
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
            'title'=>'required|min:5',
            'description'=>'nullable|min:10',
            'type'=>'required',
            'to_specific_group_id'=>'required',
        ];
    }
}
