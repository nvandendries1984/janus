<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusOffertesProducten extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_offertes_producten', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('offerte_id')->unsigned();
            $table->integer('product_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_offertes_producten');
    }
}


