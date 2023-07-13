<?php namespace NielsVanDenDries\Janus\Models;

use Model;

/**
 * Model
 */
class Projecten extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_janus_projecten';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'uren' => \NielsVanDenDries\Janus\Models\Uren::class,
        'klant' => \NielsVanDenDries\Janus\Models\Klanten::class
    ];

    public $hasMany = [
        'betaling' => \NielsVanDenDries\Janus\Models\Betalingen::class
    ];
}
