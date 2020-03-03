<?php namespace Alex\Landingcat\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexLandingcatTwo extends Migration
{
    public function up()
    {
        Schema::create('alex_landingcat_two', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('label');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_landingcat_two');
    }
}
