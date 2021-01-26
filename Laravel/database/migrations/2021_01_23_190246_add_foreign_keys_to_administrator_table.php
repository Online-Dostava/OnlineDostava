<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAdministratorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('administrator', function (Blueprint $table) {
            $table->foreign('IDKorisnika', 'administratorKorisnikFK')->references('ID')->on('korisnik')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('administrator', function (Blueprint $table) {
            $table->dropForeign('administratorKorisnikFK');
        });
    }
}
