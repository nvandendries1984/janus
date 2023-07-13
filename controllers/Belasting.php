<?php namespace NielsVanDenDries\Janus\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Belasting extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'manager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.Janus', 'main-menu-item', 'side-menu-item2');
    }

}
