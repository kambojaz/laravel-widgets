<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWidgetedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widgeted', function (Blueprint $table) {
            
            $table->increments('id');

            $table->morphs('widgeted');
            

            $table->unsignedInteger('widget_id');
            
            $table->text('data')->nullable();

            $table->engine = 'InnoDB';

            $table->index(['widgeted_type', 'widgeted_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('widgeted');
    }
}
