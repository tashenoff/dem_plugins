<?php namespace Alex\Landingcat\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexLandingcatCat2 extends Migration
{
    public function up()
    {
        Schema::table('alex_landingcat_cat', function($table)
        {
            $table->text('size');
        });
    }
    
    public function down()
    {
        Schema::table('alex_landingcat_cat', function($table)
        {
            $table->dropColumn('size');
        });
    }
}
