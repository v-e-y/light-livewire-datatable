<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable\Traits;

trait WithExports
{
    /** @var bool $exports */
    public bool $exports = false;

    /** @var array<array<string>> $exportsCallbacks ['buttonText' => '', 'buttonIcon' => '', 'methodName'] */
    public array $exportsOptions = [];
}