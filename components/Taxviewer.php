<?php namespace Nielsvandendries\Janus\Components;

use Cms\Classes\ComponentBase;
use NielsVanDenDries\Janus\Models\Betalingen;
use NielsVanDenDries\Janus\Models\Inkomsten;
use NielsVanDenDries\Janus\Models\Leveranciers;

class Taxviewer extends ComponentBase
{
    public $betaling;
    public $inkomst;
    public $leverancier;
    public $klant;
    public $project;
    public function componentDetails()
    {
        return [
            'name' => 'Finance viewer',
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
        $this->betaling = Betalingen::with('leverancier', 'project')->where('periode', $this->property('periode'))->get()->toArray();
        $this->inkomst = Inkomsten::with('klant')->where('periode', $this->property('periode'))->get()->toArray();
    }
}
