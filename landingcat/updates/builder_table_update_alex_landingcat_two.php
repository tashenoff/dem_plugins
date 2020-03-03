<?php namespace Alex\Landingcat\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexLandingcatTwo extends Migration
{
    public function up()
    {
        Schema::table('alex_landingcat_two', function($table)
        {
            $table->text('short_desc');
        });
    }
    
    public function down()
    {
        Schema::table('alex_landingcat_two', function($table)
        {
            $table->dropColumn('short_desc');
        });
    }
}
