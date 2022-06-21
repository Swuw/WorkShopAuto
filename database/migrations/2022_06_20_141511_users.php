<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
//            $table->string('second_Name');
//            $table->integer('code_Phone', 3);
//            $table->integer('phone', 7);
//            $table->string('role');
//            $table->integer('date_of_birthday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table){
//            $table->dropColumn('second_Name');
//            $table->dropColumn('code_Phone');
//            $table->dropColumn('phone');
//            $table->dropColumn('role');
//            $table->dropColumn('date_of_birthday');
        });
    }
}
