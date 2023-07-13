<?php namespace NielsVanDenDries\Janus\Models;

use Model;

/**
 * Model
 */
class Belasting extends Model
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
    public $table = 'nielsvandendries_janus_belasting';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
