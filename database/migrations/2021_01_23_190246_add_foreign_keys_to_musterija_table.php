<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMusterijaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('musterija', function (Blueprint $table) {
            $table->foreign('IDKorisnika', 'musterijaKorisnikFK')->references('ID')->on('korisnik')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('musterija', function (Blueprint $table) {
            $table->dropForeign('musterijaKorisnikFK');
        });
    }
}
