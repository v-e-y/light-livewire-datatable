<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable\Cells;

use VEY\LightLivewireDataTable\Enum\ConditionOptionsEnum;

final class Cell
{
    /** @var ?string $cssClasses */
    public ?string $cssClasses = null;

    /** @var ?array<string> $conditionCssId ['condition' => '', 'id' => ''] */
    public ?array $conditionCssId = null;

    /** @var ?array<string> $conditionCssClasses ['condition' => '', 'classes' => ''] */
    public ?array $conditionCssClasses = null;

    /** @var string|int|float|null $value */
    public string|int|float|null $value = null;

    /** @var ?array<callable> $callbacks */
    public ?array $callbacks = null;

    /**
     * Set cell CSS classes.
     * @param string $cssClasses
     * @return self
     */
    public function setCssClasses(string $cssClasses): self
    {
        $this->cssClasses = $cssClasses;
        return $this;
    }

    /**
     * Set cell CSS classes based on condition.
     * @param ConditionOptionsEnum $condition
     * @param string $cssClasses
     * @return self|Exception
     */
    public function setConditionCssClasses(ConditionOptionsEnum $condition, string $cssClasses): self
    {
        $this->conditionCssClasses = [
            'condition' => $condition->value,
            'classes' => $cssClasses,
        ];
        return $this;
    }

    /**
     * Set cell CSS id based on condition.
     * @param string $cssId
     * @return self
     */
    public function setConditionCssId(ConditionOptionsEnum $condition, string $cssId): self
    {
        $this->conditionCssId = [
            'condition' => $condition->value,
            'id' => $cssId,
        ];
        return $this;
    }

    /**
     * Set cell value.
     * @param string|int|float|null $value
     * @return self
     */
    public function setValue(string|int|float|null $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Set cell callback(s).
     * @param callable|array<callback> $callback
     * @return self
     */
    public function setCallback(callable|array $callback): self
    {
        $this->callbacks = is_callable($callback) ? [$callback] : $callback;
        return $this;
    }
}