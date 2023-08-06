<?php namespace Nielsvandendries\Janus\Components;

use Cms\Classes\ComponentBase;
use NielsVanDenDries\Janus\Models\Worked;

class Bookings extends ComponentBase
{
    public $worked;
    public function componentDetails()
    {
        return [
            'name' => 'Bookings',
            'description' => 'Booked Worked'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->worked = Worked::get()->toArray();
    }
}
