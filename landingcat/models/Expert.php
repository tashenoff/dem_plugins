<?php

namespace Alex\Landingcat\Models;

use Model;

/**
 * Model
 */
class Expert extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    public $attachOne = [
        'photo' => ['System\Models\File']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'alex_landingcat_expert';


    /**
     * @var array Validation rules
     */
    public $rules = [];
}
