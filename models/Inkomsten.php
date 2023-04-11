<?php namespace NielsVanDenDries\Janus\Models;

use Model;

/**
 * Model
 */
class Inkomsten extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_janus_inkomsten';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
