<?php namespace NielsVanDenDries\Janus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesJanusInkomsten extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_janus_inkomsten', function($table)
        {
            $table->string('periode', 100);
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_janus_inkomsten', function($table)
        {
            $table->dropColumn('periode');
        });
    }
}
