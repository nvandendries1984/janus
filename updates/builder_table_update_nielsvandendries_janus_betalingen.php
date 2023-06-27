<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesJanusBetalingen extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_janus_betalingen', function($table)
        {
            $table->string('periode', 100);
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_janus_betalingen', function($table)
        {
            $table->dropColumn('periode');
        });
    }
}
