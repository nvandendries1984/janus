<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesJanusBelasting extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_janus_belasting', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('periode');
            $table->string('jaar');
            $table->boolean('afgerond');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_janus_belasting');
    }
}
