<?php

namespace Liquidstyle\LaravelAdminLte\Menu\Filters;

use Liquidstyle\LaravelAdminLte\Menu\Builder;

interface FilterInterface
{
    public function transform($item, Builder $builder);
}
