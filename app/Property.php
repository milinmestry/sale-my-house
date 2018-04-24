<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
  const INACTIVE = 0; // Inactive property
  const ACTIVE = 1; // Active property
  const SOLD = 2; // Sold property

  public static function getAllActiveProperties(array $params = []) {
    $sellerId = $params['sellerId'] ?? 0;
    $limit = $params['limit'] ?? 10;
    $orderBy = $params['orderBy'] ?? 'id';
    $orderDirection = $params['orderDirection'] ?? 'desc';

    if ($sellerId < 1) {
      return [];
    }

    return self::where([
        ['is_active', '=', self::ACTIVE],
        ['seller_id', '=', $sellerId]
      ])
      ->orderBy($orderBy, $orderDirection)
      ->take($limit)
      ->get();
  }
}
