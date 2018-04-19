<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
  const INACTIVE = 0; // Inactive property
  const ACTIVE = 1; // Active property
  const SOLD = 2; // Sold property
}
