<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusWorked extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_worked', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('project');
            $table->string('klant');
            $table->string('referentie');
            $table->string('type');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->smallInteger('pauze')->nullable();
            $table->smallInteger('kilometers')->nullable();
            $table->text('materiaal')->nullable();
            $table->string('locatie');
            $table->boolean('gefactureerd');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_worked');
    }
}
