<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('no_wa');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('link_akun_instagram');
            $table->string('link_akun_facebook');
            $table->string('link_akun_tiktok');
            $table->string('link_akun_twitter');
            $table->string('link_akun_youtube');
            $table->integer('profetion_id')->unsigned();
            $table->string('detail_profesi');
            $table->integer('interest_id')->unsigned();
            $table->string('jumlah_anak');
            $table->string('tahun_lahir_anak_sulung');
            $table->string('tahun_lahir_anak_bungsu');
            $table->integer('income_id')->unsigned();
            $table->string('alasan_bergabung');
            $table->string('harapan_bergabung');

            $table->timestamps();

        });
        Schema::table('members', function (Blueprint $table) {
            $table->foreign('profetion_id')->references('id')->on('profetions');
            $table->foreign('interest_id')->references('id')->on('interests');
            $table->foreign('income_id')->references('id')->on('incomes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
