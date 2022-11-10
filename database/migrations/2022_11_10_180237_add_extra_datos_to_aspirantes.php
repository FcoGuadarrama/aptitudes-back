<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aspirantes', function (Blueprint $table) {
            $table->string('control_number')->after('results');
            $table->string('career')->after('control_number');
            $table->string('semester')->after('career');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aspirantes', function (Blueprint $table) {
            $table->dropColumn('control_number');
            $table->dropColumn('career');
            $table->dropColumn('semester');
        });
    }
};
