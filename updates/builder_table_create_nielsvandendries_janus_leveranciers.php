<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusLeveranciers extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_leveranciers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('naam');
            $table->string('producten_id')->nullable();
            $table->string('betalingen_id')->nullable();
            $table->string('adres');
            $table->string('postcode');
            $table->string('plaats');
            $table->string('land');
            $table->string('emailadres');
            $table->string('telefoonnummer');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_leveranciers');
    }
}
