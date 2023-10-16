<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable\Traits;

trait WithFilters 
{
    /** @var array<string|int|float> $filters Applied filters [columnName => value, ...] */
    public array $filters = [];

    /**
     * Drop all filters
     * @return void
     */
    public function dropFilters(): void
    {
        $this->filters = [];

        // Drop all multiSelect filters
        if ($this->columns->all()->where('filterType', 'multiSelect')->count()) {
            $this->dispatchBrowserEvent('dropFilters_' . $this->id);
        }
    }
}