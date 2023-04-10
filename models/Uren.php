<?php namespace NielsVanDenDries\Janus\Models;

use Model;
use Carbon;

class Uren extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'nielsvandendries_janus_uren';

    public $rules = [
    ];

    public $belongsTo = [
        'project' => \NielsVanDenDries\Janus\Models\Projecten::class
    ];

    // tijd berekenen

    public function setVanAttribute($value)
    {
        $this->attributes['van'] = $value;
        $this->berekenTijd();
    }

    public function setTotAttribute($value)
    {
        $this->attributes['tot'] = $value;
        $this->berekenTijd();
    }

    protected function berekenTijd()
    {
        if ($this->van && $this->tot) {
            $van = \Carbon\Carbon::parse($this->van);
            $tot = \Carbon\Carbon::parse($this->tot);
            $verschilInMinuten = $van->diffInMinutes($tot);
            $this->attributes['bereikte_tijd'] = $verschilInMinuten;
        }
    }
    
    // einde tijd berekenen
}
