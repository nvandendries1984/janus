<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusBedrijfsgegevens extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_bedrijfsgegevens', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('producten_id')->nullable();
            $table->string('offertes_id')->nullable();
            $table->string('naam');
            $table->string('rechtsvorm')->nullable();
            $table->string('adres');
            $table->string('postcode');
            $table->string('plaats');
            $table->string('emailadres');
            $table->string('telefoonnummer');
            $table->string('kvk_nummer');
            $table->string('btw_nummer');
            $table->string('btw_tarief');
            $table->string('rekeningnummer');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_bedrijfsgegevens');
    }
}
