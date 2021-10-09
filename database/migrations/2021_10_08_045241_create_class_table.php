<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->increments('class_id');
            $table->string('class_name');
            $table->string('category_class_id');
            $table->string('content');
            $table->float('price');
            $table->text('venue');
            $table->text('image');
            $table->boolean('is_publish');
            $table->integer('class_type');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('speaker');
            $table->boolean('is_highlight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class');
    }
}
