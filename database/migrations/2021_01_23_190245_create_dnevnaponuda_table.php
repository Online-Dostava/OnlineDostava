<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnevnaponudaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dnevnaponuda', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Naziv');
            $table->decimal('Cijena', 5);
            $table->unsignedInteger('IDJela')->nullable()->index('IDJela');
            $table->unsignedInteger('IDPica')->nullable()->index('IDPica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dnevnaponuda');
    }
}
