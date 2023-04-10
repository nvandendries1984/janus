<?php namespace NielsVanDenDries\Janus\Models;

use Model;

/**
 * Model
 */
class Offertes extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_janus_offertes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasOne = [
        'klant' => \NielsVanDenDries\Janus\Models\Klanten::class,
        'bedrijfsgegevens' => \NielsVanDenDries\Janus\Models\Bedrijfsgegevens::class,
    ];
}
