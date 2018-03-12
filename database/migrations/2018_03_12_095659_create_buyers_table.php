<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyersTable extends Migration
{
    const TABLE_NAME = 'buyers';

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
            $table->string('present_address', 500)->nullable();
            $table->string('permanent_address', 500)->nullable();
            $table->char('contact_landline', 30)->nullable();
            $table->char('alternate_email', 255)->nullable();
            $table->char('cash_in_hand', 100)->nullable();
            $table->boolean('homeloan_required');
            $table->json('homeloan_details')->nullable();
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
