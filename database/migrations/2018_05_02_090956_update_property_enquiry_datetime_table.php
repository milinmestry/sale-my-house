<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePropertyEnquiryDatetimeTable extends Migration
{

  const TABLE_NAME = 'property_enquiries';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table(self::TABLE_NAME, function (Blueprint $table) {
      if (Schema::hasTable(self::TABLE_NAME)) {
        $table->timestamp('enquiry_datetime')->nullable()->after('homeloan_details');
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
          'enquiry_datetime'
        ]);
      }
    });
  }
}
