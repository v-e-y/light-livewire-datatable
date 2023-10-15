<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable;

use Livewire\Component;

abstract class LightLivewireDataTable extends Component
{
    public function render()
    {
        return view('light-livewire-data-table::datatable');
    }
}