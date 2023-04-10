<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusProjecten extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_projecten', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('uren_id')->nullable();
            $table->string('naam');
            $table->string('omschrijving');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_projecten');
    }
}
