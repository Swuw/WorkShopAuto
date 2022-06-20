<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Works extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->integer('id_car');
            $table->integer('mileage')
                ->nullable();
            $table->string('type_of_work', 100)
                ->nullable();
            $table->string('descriptions_job', 200)
                ->nullable();
            $table->string('remark_of_work', 200)
                ->nullable();
            $table->string('remark_admin', 200)
                ->nullable();
            $table->string('spend_time', 5)
                ->nullable();
            $table->string('cost_work', 20)
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
            Schema::dropIfExists('works');
        }
    }
}
