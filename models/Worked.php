<?php namespace NielsVanDenDries\Janus\Models;

use Model;

/**
 * Model
 */
class Worked extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'nielsvandendries_janus_worked';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $attachOne = [
        'factuur' => \System\Models\File::class
    ];
}
