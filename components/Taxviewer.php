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

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->betaling = Betalingen::get()->toArray();
        $this->inkomst = Inkomsten::get()->toArray();
    }
}
