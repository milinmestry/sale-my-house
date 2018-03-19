<?php
namespace App\Helpers\MestryMilin;

// use Illuminate\

class Form {

  public static function getPropertyTypes($select = true) {
    $first = $select ? '-- Select --' : '';
    return [
      '' => $first,
      'apartment' => 'Apartment',
      'shop' => 'Shop',
    ];
  }

  public static function getApartmentTypes($select = true) {
    $first = $select ? '-- Select --' : '';
    return [
      '' => $first,
      '1-BHK' => '1 BHK',
      '2-BHK' => '2 BHK',
      '3-BHK' => '3 BHK',
      '4-BHK' => '4 BHK',
    ];
  }

}
