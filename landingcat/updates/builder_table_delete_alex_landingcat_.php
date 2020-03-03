<?php namespace Alex\Landingcat\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAlexLandingcat extends Migration
{
    public function up()
    {
        Schema::dropIfExists('alex_landingcat_');
    }
    
    public function down()
    {
        Schema::create('alex_landingcat_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('label', 191)->nullable()->default('NULL');
            $table->text('text')->nullable()->default('NULL');
            $table->string('thumbnail', 191);
            $table->string('cover', 191);
        });
    }
}
