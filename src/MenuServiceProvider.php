<?php

namespace Monet\Framework\Menu;

use Monet\Framework\Support\Services\Package;
use Monet\Framework\Support\Services\ServiceProvider;
use Spatie\Menu\Laravel\MenuServiceProvider as BaseMenuServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('monet.menu');
    }

    protected function packageBooted(): void
    {
        $this->app->register(BaseMenuServiceProvider::class);
    }
}