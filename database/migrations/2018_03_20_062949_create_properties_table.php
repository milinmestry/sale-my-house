<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration {

  const TABLE_NAME = 'properties';

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create(self::TABLE_NAME, function (Blueprint $table) {
      $table->increments('id');
      $table->integer('seller_id'); // users table FK
      $table->char('property_type', 50);
      $table->char('apartment_type', 25);
      $table->char('measurement', 10);
      $table->char('measurement_type', 20);
      $table->char('maintenance_charges', 10)->nullable();
      $table->char('ownership', 20); // Individual, Joint
      $table->char('joint_owners_name', 100)->nullable();
      $table->integer('sale_price');
      $table->integer('min_expected_price')->nullable();
      $table->string('address', 500);
      $table->string('homeloan_details', 500)->nullable();
      $table->string('amenities', 800)->nullable();
      $table->text('locality_features')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists(self::TABLE_NAME);
  }
}
