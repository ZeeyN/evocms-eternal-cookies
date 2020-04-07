<?php
namespace EvolutionCMS\ZeeyN\EternalCookies\src;

use EvolutionCMS;
use EvolutionCMS\ServiceProvider;
use EvolutionCMS\ZeeyN\EternalCookies\src\Controllers\EternalCookiesController;

class EternalCookiesServiceProvider extends ServiceProvider
{
    protected $evo;

    public function register()
    {
        $this->evo = EvolutionCMS();
        $this->app->registerModule(
                'EternalCookies',
                dirname(__DIR__) . '/modules/ec.module.php'
        );
        $this->evo->addDataToView([
                'EternalCookies' => new EternalCookiesController()
                                  ]);
    }
}