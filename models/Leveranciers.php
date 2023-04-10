<?php namespace NielsVanDenDries\Janus\Models;

use Model;

/**
 * Model
 */
class Leveranciers extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_janus_leveranciers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasOne = [
        'contactpersoon' => \NielsVanDenDries\Janus\Models\Contactpersonen::class,
    ];
}
