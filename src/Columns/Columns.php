<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable\Columns;

use Illuminate\Support\Collection;
use VEY\LightLivewireDataTable\Columns\Column;

final class Columns
{
    /** @var Collection<Column> $columns */
    public Collection $columns;

    /**
     * @param array<Column> $columns
     */
    public function __construct(array $columns)
    {
        $this->columns = collect($columns);
    }

    /**
     * Get searchable columns.
     * @return ?Collection<Column>
     */
    public function getSearchableColumns(): ?Collection
    {
        return $this->columns->where('searchable', true);
    }

    /**
     * Get sortable columns.
     * @return ?Collection<Column>
     */
    public function getSortableColumns(): ?Collection
    {
        return $this->columns->where('sortable', true);
    }

    /**
     * Find column by name.
     * @param string $name
     * @return ?Column
     */
    public function findColumnByName(string $name): ?Column
    {
        return $this->columns->first(fn($c) => $c->name === $name);
    }

    /**
     * Is any Column has filter
     * @return bool
     */
    public function hasFilters(): bool
    {
        return $this->columns->where('filterType', '!=', null)->count() > 0;
    }

    /**
     * Get Columns names
     * @return array<string>
     */
    public function getColumnsNames(): array
    {
        return $this->columns->pluck('name')->toArray();
    }

    /**
     * Get Columns labels
     * @return array<string>
     */
    public function getColumnsLabels(): array
    {
        return $this->columns->pluck('label')->toArray();
    }
}