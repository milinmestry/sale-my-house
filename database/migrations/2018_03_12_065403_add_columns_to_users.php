<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsers extends Migration
{
    const TABLE_NAME = 'users';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(self::TABLE_NAME, function (Blueprint $table) {
            if (Schema::hasTable(self::TABLE_NAME)) {
                $table
                    ->char('contact_mobile', 15)
                    ->unique()
                    ->nullable()
                    ->after('remember_token');
                // $table->char('contact_landline', 25)->nullable();
                $table->enum('user_status', [
                    'registered', 'suspended', 'active', 'inactive',
                ])->default('registered')->after('contact_mobile');
                $table->softDeletes()->nullable()->after('updated_at');
                $table->timestamp('suspended_at')->nullable();
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
                    'contact_mobile', 'user_status', 'suspended_at'
                ]);
                $table->dropSoftDeletes();
            }
        });
    }
}
