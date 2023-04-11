<?php namespace NielsVanDenDries\Janus\Models;

use Model;
use Carbon;
use Illuminate\Support\Facades\DB;


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

    public $hasMany = [
        'producten' => \NielsVanDenDries\Janus\Models\Producten::class,
    ];
    
    public static function boot()
    {
        parent::boot();
        // Event listener om het offertenummer te genereren en op te slaan
        static::creating(function ($offerte) {
            // Genereer de datum in het formaat Ymd
            $datum = date('Ymd');
            // Bepaal het volgnummer
            $volgnummer = DB::table('nielsvandendries_janus_offertes')->max('id') + 1;
            // Maak het offertenummer aan in het formaat OFF-DATUM-VOLGNUMMER
            $offertenummer = 'OFF' . $datum . $volgnummer;
            // Sla het offertenummer op in de database
            $offerte->offertenummer = $offertenummer;
        });
    }

}
