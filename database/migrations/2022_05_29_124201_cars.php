<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('owner_id');
            $table->string('manufacturer', 100)
                ->nullable();
            $table->string('model', 105)
                ->nullable();
            $table->string('vin', 17)
                ->nullable();
            $table->year('year');
            $table->string('fuel', 20)
                ->nullable();
            $table->string('engine_name', 20)
                ->nullable();
            $table->string('engine_value', 5)
                ->nullable();
            $table->string('transmission', 105)
                ->nullable();
            $table->string('type_transmission', 10)
                ->nullable();
            $table->string('more_ingo', 200)
                ->nullable();
            $table->float('score')
                ->nullable();
            $table->integer('past_owner_id')
                ->nullable();
            $table->string('recommendation', 200)
                ->nullable();
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
        {
            Schema::dropIfExists('cars');
        }
    }
}
