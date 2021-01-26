<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDnevnaponudaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dnevnaponuda', function (Blueprint $table) {
            $table->foreign('IDJela', 'dpJelo')->references('ID')->on('jelo')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('IDPica', 'dpPice')->references('ID')->on('pice')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dnevnaponuda', function (Blueprint $table) {
            $table->dropForeign('dpJelo');
            $table->dropForeign('dpPice');
        });
    }
}
