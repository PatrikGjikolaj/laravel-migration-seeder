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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("Azienda", 100)->nullable();
            $table->string("Stazione di partenza", 100)->nullable();
            $table->string("Stazione di arrivo", 100)->nullable();
            $table->dateTime("Orario di partenza")->nullable();
            $table->dateTime("Orario di arrivo")->nullable();
            $table->integer("Numero Carrozze")->nullable();
            $table->integer("In orario")->nullable();
            $table->boolean("Cancellato")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
