<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable\Providers;

use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;

final class LightLivewireDataTableProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'light-livewire-data-table');

        Livewire::component('light-livewire-data-table', LightLivewireDataTable::class);
    }
}
