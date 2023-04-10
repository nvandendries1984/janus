<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusContactpersonen extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_contactpersonen', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('klanten_id')->nullable();
            $table->string('leveranciers_id')->nullable();
            $table->string('naam');
            $table->string('functie');
            $table->string('emailadres');
            $table->string('telefoonnummer');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_contactpersonen');
    }
}
