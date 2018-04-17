<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePropertiesAddColumns extends Migration
{
  const TABLE_NAME = 'properties';

  /**
   * Run the migrations.
   *
   * New Columns:
   *
   * 01 is_private: Wheather this property is mark as private, so Buyer(s) won't
   *    be able to search for this property.
   * 02 is_private_ts: Timestamp when Seller mark a property as private.
   *
   * @return void
   */
  public function up()
  {
      Schema::table(self::TABLE_NAME, function (Blueprint $table) {
        if (Schema::hasTable(self::TABLE_NAME)) {
          $table->boolean('is_private')->default(0)->after('locality_features');
          $table->timestamp('is_private_ts')->nullable()->after('is_private');
        }
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::table(self::TABLE_NAME, function (Blueprint $table) {
        if (Schema::hasTable(self::TABLE_NAME)) {
          $table->dropColumn([
            'is_private', 'is_private_ts'
          ]);
        }
      });
  }
}
