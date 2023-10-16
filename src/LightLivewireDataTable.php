<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable;

use Livewire\Component;
use VEY\LightLivewireDataTable\Traits\WithChildHTMLComponents;
use VEY\LightLivewireDataTable\Traits\WithFilters;
use VEY\LightLivewireDataTable\Traits\WithChildLWComponents;
use VEY\LightLivewireDataTable\Traits\WithExports;
use VEY\LightLivewireDataTable\Traits\WithSearching;

abstract class LightLivewireDataTable extends Component
{
    use WithChildLWComponents;
    use WithChildHTMLComponents;
    use WithFilters;
    use WithSearching;
    use WithExports;

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

    public function render()
    {
        return view('light-livewire-data-table::datatable');
    }
}