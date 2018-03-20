<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateProperty extends FormRequest
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
      'property_type' => 'required|string|max:25',
      'apartment_type' => 'required|string|max:20',
      'address' => 'required|string|max:500',
      'measurement' => 'required|int|max:10',
      'sale_price' => 'required|int|max:15',
      'min_expected_price' => 'nullable|int|max:15',
      'ownership' => 'required|string|max:15',
      'joint_owners_name' => 'nullable|string|max:80',
      'amenities' => 'nullable|string|max:800',
      'locality_features' => 'nullable|string|max:800',
      'homeloan_details' => 'nullable|string|max:800',
    ];
  }
}
