<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateBuyer extends FormRequest
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
      'cash_in_hand' => 'nullable|max:20',
      'homeloan_required' => 'nullable|boolean',
      'homeloan_details' => 'nullable|max:1000',
    ];
  }
}
