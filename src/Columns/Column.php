<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable\Columns;

use VEY\LightLivewireDataTable\Cells\Cell;

final class Column
{
    /** @var ?Cell $cell */
    public ?Cell $cell = null;

    /** @var string $name Column name (attribute name) */
    public string $name;

    /** @var string $label Column label */
    public string $label;

    /** @var bool $sortable Is column sortable? */
    public bool $sortable = false;

    /** @var bool $searchable Is column searchable? */
    public bool $searchable = false;

    /** @var bool $hidden Is column hidden? */
    public bool $hidden = false;

    /** @var ?string $cssClasses */
    public ?string $cssClasses = null;

    /** @var ?string $cssId */
    public ?string $cssId = null;

    /** @var ?string $filterType */
    public ?string $filterType = null;

    /** @var array<string> $filterTypes Available filter types */
    public static array $filterTypes = [
        // TODO: Add more filter types
    ];

    /** @var callable $filterCallback */
    public $filterCallback;

    /**
     * Set is column sortable.
     * @return self
     */
    public function setSortable(): self
    {
        $this->sortable = true;
        return $this;
    }

    /**
     * Set is column searchable.
     * @return self
     */
    public function setSearchable(): self
    {
        $this->searchable = true;
        return $this;
    }

    /**
     * Set is column hidden.
     * @return self
     */
    public function setHidden(): self
    {
        $this->hidden = true;
        return $this;
    }

    /**
     * Set column css classes or id.
     * @param string|null $classes
     * @param string|null $id
     * @return self
     */
    public function setCss(?string $classes = null, ?string $id = null): self
    {
        $this->cssClasses = $classes;
        $this->cssId = $id;
        return $this;
    }

    /**
     * Set Column filter type.
     * @param string $type
     * @return self|Exception
     */
    public function setFilterType(string $type): self
    {
        if (!in_array($type, self::$filterTypes)) {
            throw new \Exception("Filter type '$type' is not available.");
        }
        $this->filterType = $type;
        return $this;
    }

    /**
     * Set column filter callback.
     * @param callable $callback
     * @return self
     */
    public function setFilterCallback(callable $callback): self
    {
        $this->filterCallback = $callback;
        return $this;
    }

    /**
     * Apply column filter callback.
     * @param array|int|string|float $filterValue
     * @return void
     */
    public function applyFilterCallback(&$queryBuilder, array|int|string|float $filterValue): void
    {
        // TODO: Add more filter types - queryBuilder is not always a query builder maybe Collection?
        if ($this->filterCallback) {
            call_user_func($this->filterCallback, $queryBuilder, $filterValue);
        }
    }
}