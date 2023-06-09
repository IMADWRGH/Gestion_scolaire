<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::table('etudiants', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->default(0);;
            $table->foreign('user_id')->references('id')->on('users');
        });
    }




    public function down()
    {
        Schema::table('etudiants', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
};
