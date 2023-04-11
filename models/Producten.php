<?php namespace NielsVanDenDries\Janus\Models;

use Model;

class Producten extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $table = 'nielsvandendries_janus_producten';

    public $rules = [
    ];

    public $belongsTo = [
        'categorie' => \NielsVanDenDries\Janus\Models\Categorien::class,
        'leverancier' => \NielsVanDenDries\Janus\Models\Leveranciers::class
    ];
}
