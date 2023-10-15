<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable\Cells;

final class Cell
{
    /** @var ?string $cssClasses */
    public ?string $cssClasses = null;

    /** @var array<string> $availableConditions */
    private array $availableConditions = ['===', '!==', '==', '!=', '>', '<', '>=', '<='];

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
     * @param string $condition Condition to be checked
     * Available conditions: ===, !==, ==, !=, >, <, >=, <=
     * @param string $cssClasses
     * @return self|Exception
     */
    public function setConditionCssClasses(string $condition, string $cssClasses): self
    {
        if (!in_array($condition, $this->availableConditions)) {
            throw new \Exception('Condition not available.');
        }

        $this->conditionCssClasses = [
            'condition' => $condition,
            'classes' => $cssClasses,
        ];
        return $this;
    }

    /**
     * Set cell CSS id based on condition.
     * @param string $cssId
     * @return self
     */
    public function setConditionCssId(string $condition, string $cssId): self
    {
        if (!in_array($condition, $this->availableConditions)) {
            throw new \Exception('Condition not available.');
        }

        $this->conditionCssId = [
            'condition' => $condition,
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