<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateBroker extends FormRequest
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
      'present_address' => 'required|string|max:500',
      'postal_code' => 'required|max:10',
      'alternate_email' => 'nullable|string|email|max:255',
      'contact_landline' => 'nullable|min:8',
      'agency_name' => 'nullable|max:200',
    ];
  }
}
