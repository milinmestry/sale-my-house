<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyEnquiry extends Model
{
  /**
   * Get the details for the enquiry.
   */
  public function details()
  {
    return $this->hasMany('App\PropertyEnquiryDetails');
  }
}
