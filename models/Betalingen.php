<?php namespace NielsVanDenDries\Janus\Models;

use Model;

/**
 * Model
 */
class Betalingen extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_janus_betalingen';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasOne = [
        'categorie' => \NielsVanDenDries\Janus\Models\Categorien::class,
        'leverancier' => \NielsVanDenDries\Janus\Models\Leveranciers::class,
        'project' => \NielsVanDenDries\Janus\Models\Projecten::class
    ];

    public $attachMany = [
        'factuur' => \System\Models\File::class
    ];

}
