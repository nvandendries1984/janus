<?php namespace NielsVanDenDries\Janus\Models;

use Model;

/**
 * Model
 */
class Bedrijfsgegevens extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_janus_bedrijfsgegevens';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'project' => \NielsVanDenDries\Janus\Models\Projecten::class
    ];

    public $hasMany = [
        'klanten' => \NielsVanDenDries\Janus\Models\Klanten::class
    ];
}
