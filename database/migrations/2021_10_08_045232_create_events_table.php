<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('event_id');
            $table->string('event_name');
            $table->string('category_event_id');
            $table->string('content');
            $table->float('price');
            $table->text('venue');
            $table->text('image');
            $table->boolean('is_publish');
            $table->integer('reward_event_id');
            $table->integer('event_type');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('speaker');
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
        Schema::dropIfExists('events');
    }
}
