<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusterijaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musterija', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Ime');
            $table->string('Prezime');
            $table->string('BrojTelefona', 50);
            $table->string('Adresa');
            $table->unsignedInteger('IDKorisnika')->nullable()->index('IDKorisnika');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musterija');
    }
}
