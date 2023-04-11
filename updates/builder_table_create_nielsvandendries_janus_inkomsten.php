<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusInkomsten extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_inkomsten', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('naam');
            $table->decimal('bedrag', 10, 2);
            $table->string('factuurnummer');
            $table->text('omschrijving');
            $table->string('status');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_inkomsten');
    }
}
