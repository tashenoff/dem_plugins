<?php

namespace Alex\Landingcat\Models;

use Model;

/**
 * Model
 */
class Landing extends Model
{


    public $attachOne = [
        'img' => 'System\Models\File',
        'imgpro' => 'System\Models\File'
    ];


    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'alex_landingcat_two';
    protected $jsonable = ['landpro'];
    /**
     * @var array Validation rules
     */
    public $rules = [];
}
