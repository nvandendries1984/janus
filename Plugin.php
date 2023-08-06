<?php namespace NielsVanDenDries\Janus;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \NielsVanDenDries\Janus\Components\Taxviewer::class => 'Taxviewer',
            \NielsVanDenDries\Janus\Components\Projectviewer::class => 'Projectviewer',
            \NielsVanDenDries\Janus\Components\Btw::class => 'Btw',
            \NielsVanDenDries\Janus\Components\Bookings::class => 'Bookings'
        ];
    }

    public function registerSettings()
    {
    }
}
