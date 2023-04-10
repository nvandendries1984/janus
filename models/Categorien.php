<?php namespace NielsVanDenDries\Janus\Models;

use Model;

/**
 * Model
 */
class Categorien extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_janus_categorien';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'Producten' => \NielsVanDenDries\Janus\Models\Producten::class
    ];
}
