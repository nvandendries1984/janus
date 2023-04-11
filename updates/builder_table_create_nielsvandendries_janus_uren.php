<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusUren extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_uren', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('projecten_id')->nullable();
            $table->string('project_id')->nullable();
            $table->time('van');
            $table->time('tot');
            $table->decimal('pauze', 10, 0);
            $table->text('omschrijving');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_uren');
    }
}
