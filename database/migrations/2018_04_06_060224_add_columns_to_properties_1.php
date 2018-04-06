<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToProperties1 extends Migration
{
  const TABLE_NAME = 'properties';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table(self::TABLE_NAME, function (Blueprint $table) {
        if (Schema::hasTable(self::TABLE_NAME)) {
          $table->boolean('is_active')->nullable()->after('locality_features');
          $table->softDeletes()->nullable()->after('updated_at');
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
              'is_active'
          ]);
          $table->dropSoftDeletes();
        }
      });
    }
}
