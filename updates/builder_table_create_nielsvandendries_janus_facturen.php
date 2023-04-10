<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusFacturen extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_facturen', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('factuurnummer');
            $table->date('factuurdatum');
            $table->date('vervaldatum');
            $table->string('status');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_facturen');
    }
}
