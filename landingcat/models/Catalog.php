<?php

namespace Alex\Landingcat\Models;

use Model;

/**
 * Model
 */
class Catalog extends Model

{

    public $attachOne = [
        'img' => ['System\Models\File']
    ];


    public $attachMany = [
        'gall' => ['System\Models\File']
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
    public $table = 'alex_landingcat_cat';

    protected $jsonable = ['size', 'full_desc'];


    /**
     * @var array Validation rules
     */
    public $rules = [];
}
