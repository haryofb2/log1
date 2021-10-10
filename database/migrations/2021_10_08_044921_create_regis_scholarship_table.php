<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisScholarshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regis_scholarship', function (Blueprint $table) {
            $table->increments('regis_scholarship_id');
            $table->integer('user_id')->unsigned();
            $table->text('alasan')->nullable();
            $table->timestamps();
        });

        Schema::table('regis_scholarship', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regis_scholarship');
    }
}
