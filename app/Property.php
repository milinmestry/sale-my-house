<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
  const INACTIVE = 0; // Inactive property
  const ACTIVE = 1; // Active property
  const SOLD = 2; // Sold property

  /**
   * Get all active properties for the seller.
   * Seller Id is required to fetch the related properties.
   * In case Seller Id is not provided or it is less than 0
   * empty array will be return.
   *
   * By default Collection object is return, but if you need array
   * pass the parameter 'arrayOnly' to get the data in array format.
   *
   * @params array $params
   * @return array
   */
  public static function getAllActiveProperties(array $params = []) {
    $sellerId = $params['sellerId'] ?? 0;
    $limit = $params['limit'] ?? 10;
    $orderBy = $params['orderBy'] ?? 'id';
    $orderDirection = $params['orderDirection'] ?? 'desc';
    $returnArray = $params['arrayOnly'] ?? null;

    if ($sellerId < 1) {
      return [];
    }

    $instances = self::where([
        ['is_active', '=', self::ACTIVE],
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
}
