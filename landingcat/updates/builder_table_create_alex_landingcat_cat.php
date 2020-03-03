<?php namespace Alex\Landingcat\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexLandingcatCat extends Migration
{
    public function up()
    {
        Schema::create('alex_landingcat_cat', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('short_desc');
            $table->time('full_desc');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_landingcat_cat');
    }
}
