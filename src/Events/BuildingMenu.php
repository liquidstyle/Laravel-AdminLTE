<?php

namespace Liquidstyle\LaravelAdminLte\Events;

use Liquidstyle\LaravelAdminLte\Menu\Builder;

class BuildingMenu
{
    public $menu;

    public function __construct(Builder $menu)
    {
        $this->menu = $menu;
    }
}
