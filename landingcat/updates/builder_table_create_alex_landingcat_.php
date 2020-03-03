<?php namespace Alex\Landingcat\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexLandingcat extends Migration
{
    public function up()
    {
        Schema::create('alex_landingcat_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('label')->nullable();
            $table->text('text')->nullable();
            $table->string('thumbnail');
            $table->string('cover');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_landingcat_');
    }
}
