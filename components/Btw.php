<?php namespace Nielsvandendries\Janus\Components;

use Cms\Classes\ComponentBase;
use NielsVanDenDries\Janus\Models\Belasting;

class Btw extends ComponentBase
{
    public $periode;
    public function componentDetails()
    {
        return [
            'name' => 'btw Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->periode = Belasting::get()->toArray();
    }
}
