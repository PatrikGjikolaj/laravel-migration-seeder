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
            $table->string("azienda", 100)->nullable();

            $table->string("stazione_di_partenza", 100)->nullable();
            $table->string("stazione_di_arrivo", 100)->nullable();
            $table->char('Codice_treno', 10);
            $table->date("data_di_partenza")->nullable();
            $table->Time("orario_di_partenza")->nullable();
            $table->Time("orario_di_arrivo")->nullable();
            $table->integer("numero_Carrozze")->nullable();
            $table->integer("in_orario")->nullable();
            $table->boolean("cancellato")->nullable();
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
        Schema::dropIfExists('trains');
    }
};
