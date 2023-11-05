<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable\Traits;

use VEY\LightLivewireDataTable\Columns\Column;

trait WithHidingColumns 
{
     /** @var bool $hidingColumns */
     public bool $hidingColumns = false;

     /**
      * Toggle column visibility.
      * @param string $columnName
      * @return void
      */
     public function toggleColumnVisibility(string $columnName): void
     {
         /** @var ?Column $column */
         $column = $this->columns->findColumnByName($columnName);
 
         if (!$column) return;
 
         $column->hidden = !$column->hidden;
     }
}