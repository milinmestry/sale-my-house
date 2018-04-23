<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyEnquiriesTable extends Migration
{
  const TABLE_NAME = 'property_enquiries';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create(self::TABLE_NAME, function (Blueprint $table) {
      $table->increments('id');
      $table->integer('property_id'); // property table FK
      $table->integer('seller_id')->nullable(); // seller table FK
      $table->integer('buyer_id')->nullable(); // buyer table FK
      $table->integer('broker_id')->nullable(); // broker table FK
      $table->char('enquirer_type', 20)->nullable();
      $table->char('fullname', 60)->nullable();
      $table->char('primary_mobile', 20)->nullable();
      $table->char('contact_numbers', 30)->nullable();
      $table->string('address', 500)->nullable();
      $table->char('zipcode', 20)->nullable();
      $table->char('broker_name', 50)->nullable();
      $table->string('broker_details', 500)->nullable();
      $table->char('refer_by_name', 60)->nullable();
      $table->char('refer_by_contact', 30)->nullable();
      $table->string('refer_by_address', 200)->nullable();
      $table->char('cash_in_hand', 20)->nullable();
      $table->boolean('need_homeloan')->nullable();
      $table->boolean('presanctioned_homeloan')->nullable();
      $table->string('homeloan_details', 300)->nullable();
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
