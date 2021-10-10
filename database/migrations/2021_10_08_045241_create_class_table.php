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
            $table->string('class_name')->nullable();
            $table->string('category_class_id')->nullable();
            $table->string('content')->nullable();
            $table->float('price')->nullable();
            $table->text('venue')->nullable();
            $table->text('image')->nullable();
            $table->boolean('is_publish')->nullable();
            $table->integer('class_type')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('speaker')->nullable();
            $table->boolean('is_highlight')->nullable();
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
