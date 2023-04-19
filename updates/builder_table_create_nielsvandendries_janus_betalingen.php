<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusBetalingen extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_betalingen', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('btw_tarief')->nullable();
            $table->text('omschrijving')->nullable();
            $table->string('projecten_id')->nullable();
            $table->string('leverancier_id')->nullable();
            $table->string('categorie_id')->nullable();
            $table->string('project_id')->nullable();
            $table->date('factuurdatum');
            $table->decimal('bedrag', 10, 2);
            $table->string('status');
            $table->string('factuurnummer');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_betalingen');
    }
}
