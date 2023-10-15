<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable\Traits;

trait WithChildLWComponents
{
    /** 
     * @var array<array<string|array>> $childTitleLWComponents
     * @example ['name' => 'component-name', 'params' => ['param1' => 'value1', 'param2' => 'value2'], 'cssWrapperClasses' => '']
     */
    public array $childTitleLWComponents = [];

    /** 
     * @var array<array<string|array>> $childPreTableLWComponents
     * @example ['name' => 'component-name', 'params' => ['param1' => 'value1', 'param2' => 'value2'], 'cssWrapperClasses' => '']
     */
    public array $childPreBodyLWComponents = [];

    /** 
     * @var array<array<string|array>> $childAfterTableLWComponents
     * @example ['name' => 'component-name', 'params' => ['param1' => 'value1', 'param2' => 'value2'], 'cssWrapperClasses' => '']
     */
    public array $childAfterBodyLWComponents = [];
}