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
            $table->integer('user_id')->unsigned();
            $table->string('no_hp')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('link_akun_instagram')->nullable();
            $table->string('link_akun_facebook')->nullable();
            $table->string('link_akun_tiktok')->nullable();
            $table->string('link_akun_twitter')->nullable();
            $table->string('link_akun_youtube')->nullable();
            $table->integer('profesi_id')->unsigned();
            $table->text('detail_profesi')->nullable();
            $table->integer('interest')->unsigned();
            $table->integer('anak_dimiliki')->nullable();
            $table->date('ttl_anak_sulung')->nullable();
            $table->date('ttl_anak_bungsu')->nullable();
            $table->integer('income_id')->unsigned();
            $table->text('alasan_bergabung')->nullable();
            $table->text('harapan_bergabung')->nullable();
            $table->integer('refferal_apps_id')->unsigned();
            $table->timestamps();

        });
        Schema::table('members', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('profesi_id')->references('profesi_id')->on('profesi');
            $table->foreign('interest')->references('interest_id')->on('interest');
            $table->foreign('income_id')->references('income_id')->on('income');
            $table->foreign('refferal_apps_id')->references('refferal_apps_id')->on('refferal_apps');

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
