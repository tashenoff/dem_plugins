<?php namespace Alex\Landingcat\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexLandingcatTwo2 extends Migration
{
    public function up()
    {
        Schema::table('alex_landingcat_two', function($table)
        {
            $table->text('landpro');
        });
    }
    
    public function down()
    {
        Schema::table('alex_landingcat_two', function($table)
        {
            $table->dropColumn('landpro');
        });
    }
}
