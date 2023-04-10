<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusProducten extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_producten', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('naam');
            $table->text('omschrijving')->nullable();
            $table->string('categorien_id')->nullable();
            $table->string('btw_tarief')->nullable();
            $table->decimal('bedrag', 10, 2);
            $table->string('producttype');
            $table->string('frequentie');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_producten');
    }
}
