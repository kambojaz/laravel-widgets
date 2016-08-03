<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widgets', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('class', 128);
            
            $table->string('title');
            
            $table->string('data', 512)->nullable();
            
            $table->softDeletes();
            
            $table->engine = 'InnoDB';
            $table->index(['class']);
            $table->unique('class');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('widgets');
    }
}
