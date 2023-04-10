<?php namespace NielsVanDenDries\Janus\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Klanten extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.Janus', 'main-menu-item', 'side-menu-item4');
    }
}
