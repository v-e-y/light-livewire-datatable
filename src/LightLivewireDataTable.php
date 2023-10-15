<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable;

use Livewire\Component;
use VEY\LightLivewireDataTable\Traits\WithChildLWComponents;

abstract class LightLivewireDataTable extends Component
{
    use WithChildLWComponents;

    /** @var string $tableName */
    public string $tableName = 'Table name';
    /** @var ?string $tableSummary */
    public ?string $tableSummary = null;

    public function render()
    {
        return view('light-livewire-data-table::datatable');
    }
}