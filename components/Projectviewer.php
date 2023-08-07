<?php namespace Nielsvandendries\Janus\Components;

use Cms\Classes\ComponentBase;
use NielsVanDenDries\Janus\Models\Projecten;

class Projectviewer extends ComponentBase
{
    public $project;
    public function componentDetails()
    {
        return [
            'name' => 'Project Viewer ',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->project = Projecten::with('betaling', 'uren', 'klant')
            ->get()
            ->toArray();
    }
}
