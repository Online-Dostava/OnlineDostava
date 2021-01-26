<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNarudzbaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('narudzba', function (Blueprint $table) {
            $table->increments('ID');
            $table->timestamp('Datum&Vrijeme')->useCurrent();
            $table->unsignedInteger('IDMusterije')->nullable()->index('IDMusterije');
            $table->unsignedInteger('IDKorisnika')->nullable()->index('IDKorisnika');
            $table->unsignedInteger('IDPica')->nullable()->index('IDPica');
            $table->unsignedInteger('IDJela')->nullable()->index('IDJela');
            $table->unsignedInteger('IDDnevnePonude')->nullable()->index('IDDnevnePonude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('narudzba');
    }
}
