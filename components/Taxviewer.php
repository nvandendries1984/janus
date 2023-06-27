<?php namespace Nielsvandendries\Janus\Components;

use Cms\Classes\ComponentBase;
use NielsVanDenDries\Janus\Models\Betalingen;
use NielsVanDenDries\Janus\Models\Inkomsten;

class Taxviewer extends ComponentBase
{
    public $betaling;
    public $inkomst;
    public function componentDetails()
    {
        return [
            'name' => 'Taxviewer Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'periode' => [
                'title'             => 'Periode',
                'description'       => 'Watch the Simpson',
                'type'              => 'dropdown',
            ]
        ];
    }

    // Functie de de gegevens ophaalt uit de database
    public function getPeriodeOptions()
    {
        return Betalingen::get()->lists('periode', 'periode');
        return Inkomsten::get()->lists('periode', 'periode');
    }

    public function onRun()
    {
        $this->betaling = Betalingen::where('periode', $this->property('periode'))->get()->toArray();
        $this->inkomst = Inkomsten::where('periode', $this->property('periode'))->get()->toArray();
    }
}
