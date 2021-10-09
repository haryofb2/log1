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
            $table->increments('member_id');
            $table->integer('user_id');
            $table->string('no_hp');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('link_akun_instagram');
            $table->string('link_akun_facebook');
            $table->string('link_akun_tiktok');
            $table->string('link_akun_twitter');
            $table->string('link_akun_youtube');
            $table->integer('profesi_id')->unsigned();
            $table->text('detail_profesi');
            $table->integer('interest')->unsigned();
            $table->integer('anak_dimiliki');
            $table->date('ttl_anak_sulung');
            $table->date('ttl_anak_bungsu');
            $table->integer('income_id')->unsigned();
            $table->text('alasan_bergabung');
            $table->text('harapan_bergabung');
            $table->integer('refferal_apps_id');
            $table->timestamps();

        });
        // Schema::table('members', function (Blueprint $table) {
        //     $table->foreign('profesi_id')->references('id')->on('profetions');
        //     $table->foreign('interest')->references('id')->on('interests');
        //     $table->foreign('income_id')->references('id')->on('incomes');

        // });
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
