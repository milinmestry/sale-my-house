<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateSeller extends FormRequest
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
            'permanent_address' => 'required|string|max:500',
            'present_address' => 'required|string|max:500',
            'alternate_email' => 'nullable|string|email|max:255',
            'contact_landline' => 'nullable|min:8',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
          // 'contact_landline.min' => 'The :attribute must be at least :size characters.',
          // 'alternate_email.email'  => ':attribute should be a valid e-mail address.',
        ];
    }
}
