<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSkrdRequest extends FormRequest
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
            'denda' => 'required|numeric',
            'pengurangan' => 'required|numeric'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'denda.numeric' => 'Denda harus berupa angka.',
            'denda.required' => 'Kolom Denda harus diisi.',
            'pengurangan.numeric' => 'Pengurangan harus berupa angka.',
            'pengurangan.required' => 'Kolom Pengurangan harus diisi.',
        ];
    }
}
