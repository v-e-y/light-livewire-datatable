<?php

declare(strict_types=1);

namespace VEY\LightLivewireDataTable\Enum;

enum ConditionOptionsEnum: string
{
    case EQUALS = '===';
    case NOT_EQUALS = '!==';
    case EQUALS_WEAK = '==';
    case NOT_EQUALS_WEAK = '!=';
    case GREATER_THAN = '>';
    case LESS_THAN = '<';
    case GREATER_THAN_OR_EQUALS = '>=';
    case LESS_THAN_OR_EQUALS = '<=';
}
