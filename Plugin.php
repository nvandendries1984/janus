<?php namespace NielsVanDenDries\Janus;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \NielsVanDenDries\Janus\Components\Taxviewer::class => 'Taxviewer'
        ];
    }

    public function registerSettings()
    {
    }
}
