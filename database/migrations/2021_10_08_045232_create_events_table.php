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
            $table->string('event_name')->nullable();
            $table->string('category_event_id')->nullable();
            $table->string('content')->nullable();
            $table->float('price')->nullable();
            $table->text('venue')->nullable();
            $table->text('image')->nullable();
            $table->boolean('is_publish')->nullable();
            $table->integer('reward_event_id')->nullable();
            $table->integer('event_type')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('speaker')->nullable();
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
        Schema::dropIfExists('events');
    }
}
