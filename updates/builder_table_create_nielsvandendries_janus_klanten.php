<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusKlanten extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_klanten', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('projecten_id')->nullable();
            $table->string('bedrijfsgegevens_id')->nullable();
            $table->string('inkomsten_id')->nullable();
            $table->string('rechtsvorm');
            $table->string('naam');
            $table->string('adres');
            $table->string('postcode');
            $table->string('plaats');
            $table->string('emailadres');
            $table->string('telefoonnummer');
            $table->string('kvk_nummer');
            $table->string('btw_nummer');
            $table->string('rekeningnummer');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_klanten');
    }
}
