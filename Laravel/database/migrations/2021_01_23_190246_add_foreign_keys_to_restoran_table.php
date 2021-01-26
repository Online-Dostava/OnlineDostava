<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRestoranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restoran', function (Blueprint $table) {
            $table->foreign('IDKorisnika', 'restoranKorisnikFK')->references('ID')->on('korisnik')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restoran', function (Blueprint $table) {
            $table->dropForeign('restoranKorisnikFK');
        });
    }
}
