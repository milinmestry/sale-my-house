<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePropertyEnquiryDetailsDatetimeTable extends Migration
{
  const TABLE_NAME = 'property_enquiry_details';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table(self::TABLE_NAME, function (Blueprint $table) {
      if (Schema::hasTable(self::TABLE_NAME)) {
        $table->integer('seller_offer')->nullable()->after('price_quoted_by');
        $table->timestamp('details_datetime')->nullable()->after('seller_offer');
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
          'seller_offer', 'details_datetime'
        ]);
      }
    });
  }
}
