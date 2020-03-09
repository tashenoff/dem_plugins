<?php namespace Alex\Landingcat\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexLandingcatExpert extends Migration
{
    public function up()
    {
        Schema::create('alex_landingcat_expert', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('prof');
            $table->text('says');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_landingcat_expert');
    }
}
