<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyEnquiryDetailsTable extends Migration
{
  const TABLE_NAME = 'property_enquiry_details';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(self::TABLE_NAME, function (Blueprint $table) {
      $table->increments('id');
      $table->integer('property_enquiry_id'); // property_enquiry table FK
      // phone call, site visit, broker through visit
      $table->char('enquire_visit_type', 20)->nullable();
      $table->integer('price_quoted')->nullable();
      $table->char('price_quoted_by', 25)->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists(self::TABLE_NAME);
  }
}
