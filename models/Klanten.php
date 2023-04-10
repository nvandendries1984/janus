<?php namespace NielsVanDenDries\Janus\Models;

use Model;

/**
 * Model
 */
class Klanten extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_janus_klanten';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasOne = [
        'contactpersoon' => \NielsVanDenDries\Janus\Models\Contactpersonen::class
    ];

    public $belongsTo = [
        'Bedrijfsgegevens' => \NielsVanDenDries\Janus\Models\Bedrijfsgegevens::class
    ];
}
