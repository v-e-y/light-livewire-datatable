<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use VEY\LightLivewireDataTable\Columns\Columns;
use VEY\LightLivewireDataTable\Traits\WithExports;
use VEY\LightLivewireDataTable\Traits\WithFilters;
use VEY\LightLivewireDataTable\Traits\WithSearching;
use VEY\LightLivewireDataTable\Traits\WithChildLWComponents;
use VEY\LightLivewireDataTable\Traits\WithChildHTMLComponents;
use VEY\LightLivewireDataTable\Traits\WithHidingColumns;

abstract class LightLivewireDataTable extends Component
{
    use WithChildLWComponents;
    use WithChildHTMLComponents;
    use WithFilters;
    use WithSearching;
    use WithExports;
    use WithHidingColumns;

    /** @var ?string $model */
    public ?string $model = null;
    /** @var string $tableName */
    public string $tableName = '';
    /** @var ?string $tableSummary */
    public ?string $tableSummary = null;
    /** @var bool $tableCResponsive */
    public bool $tableResponsive = true;
    /** @var string $tableSize options: sm, md, lg */
    public string $tableSize = 'md';
    /** @var string $tableCssClasses */
    public string $tableCssClasses = '';
    /** @var string Message witch will show when table values not presented */
    public string $noTableDataMessage = 'Sorry have no data yet';

    abstract public function getColumnsProperty(): Columns;

    public function getQuery(): Builder
    {
        return $this->model::query();
    }

    public function getQueryValuesForTable(): Builder
    {
        $q = $this->getQuery();
    
        $this->applyOrdering($q);
        $this->applyFilters($q);

        return $q;
    }


    public function render()
    {
        return view('light-livewire-data-table::datatable');
    }
}