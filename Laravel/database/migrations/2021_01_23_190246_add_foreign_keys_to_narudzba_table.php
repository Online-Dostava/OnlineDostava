<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNarudzbaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('narudzba', function (Blueprint $table) {
            $table->foreign('IDDnevnePonude', 'narDnevPonFK')->references('ID')->on('dnevnaponuda')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('IDJela', 'narJeloFK')->references('ID')->on('jelo')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('IDKorisnika', 'narKorisnikFK')->references('ID')->on('korisnik')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('IDMusterije', 'narMusterijaFK')->references('ID')->on('musterija')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('IDPica', 'narPiceFK')->references('ID')->on('pice')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('narudzba', function (Blueprint $table) {
            $table->dropForeign('narDnevPonFK');
            $table->dropForeign('narJeloFK');
            $table->dropForeign('narKorisnikFK');
            $table->dropForeign('narMusterijaFK');
            $table->dropForeign('narPiceFK');
        });
    }
}
