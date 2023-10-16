<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable\Traits;

trait WithChildHTMLComponents
{
    /** @var string $childTitleHTMLComponents */
    public array $childTitleHTMLComponents = [];

    /** @var string $childPreTableHTMLComponents */
    public array $childPreTableHTMLComponents = [];

    /** @var string $childAfterTableHTMLComponents */
    public array $childAfterBodyHTMLComponents = [];
}