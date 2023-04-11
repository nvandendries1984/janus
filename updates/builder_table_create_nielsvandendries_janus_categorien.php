<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusCategorien extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_categorien', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('naam');
            $table->text('omschrijving')->nullable();
            $table->string('producten_id')->nullable();
            $table->string('betalingen_id')->nullable();
            $table->string('inkomsten_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_categorien');
    }
}
