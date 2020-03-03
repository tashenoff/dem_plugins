<?php namespace Alex\Landingcat\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexLandingcatCat extends Migration
{
    public function up()
    {
        Schema::table('alex_landingcat_cat', function($table)
        {
            $table->text('full_desc')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('alex_landingcat_cat', function($table)
        {
            $table->time('full_desc')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
