<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyEnquiry extends Model
{

  public static function getAllEnquiries(array $params = []) {
    $sellerId = $params['sellerId'] ?? 0;
    $limit = $params['limit'] ?? 20;
    $orderBy = $params['orderBy'] ?? 'id';
    $orderDirection = $params['orderDirection'] ?? 'desc';
    $returnArray = $params['arrayOnly'] ?? null;

    if ($sellerId < 1) {
      return [];
    }

    $instances = self::where([
      ['seller_id', '=', $sellerId]
    ])
    ->orderBy($orderBy, $orderDirection)
    ->take($limit)
    ->get();

    if ($returnArray) {
      return $instances->toArray();
    }

    return $instances;
  }

  /**
   * Get the details for the enquiry.
   */
  public function details()
  {
    return $this->hasMany('App\PropertyEnquiryDetails');
  }
}
