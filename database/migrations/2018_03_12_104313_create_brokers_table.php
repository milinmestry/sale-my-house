<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrokersTable extends Migration
{
    const TABLE_NAME = 'brokers';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); // users table FK
            $table->char('agency_name', 100)->nullable();
            $table->string('present_address', 500)->nullable();
            $table->char('postal_code', 10)->nullable();
            $table->char('contact_landline', 30)->nullable();
            $table->char('alternate_email', 255)->nullable();
            $table->timestamps();
            $table->softDeletes()->nullable();
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
