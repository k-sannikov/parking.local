<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('state_number')->comment('гос. номер автомобиля');
            $table->integer('place')->unique()->comment('Парковочное место');
            $table->string('full_name')->comment('Фамилия и инициалы владельца авто');
            $table->string('passport_series')->comment('Серия паспорта');
            $table->string('passport_number')->comment('Номер паспорта');
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
        Schema::dropIfExists('cars');
    }
}
