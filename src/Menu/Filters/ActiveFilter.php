<?php

namespace Liquidstyle\LaravelAdminLte\Menu\Filters;

use Liquidstyle\LaravelAdminLte\Menu\Builder;
use Liquidstyle\LaravelAdminLte\Menu\ActiveChecker;

class ActiveFilter implements FilterInterface
{
    private $activeChecker;

    public function __construct(ActiveChecker $activeChecker)
    {
        $this->activeChecker = $activeChecker;
    }

    public function transform($item, Builder $builder)
    {
        if (! isset($item['header'])) {
            $item['active'] = $this->activeChecker->isActive($item);
        }

        return $item;
    }
}
