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
            $table->string('numero_control')->after('results');
            $table->string('carrera')->after('numero_control');
            $table->string('semestre')->after('carrera');
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
