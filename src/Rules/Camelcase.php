<?php

namespace Intervention\Validation\Rules;

use Intervention\Validation\AbstractRegexRule;

class Camelcase extends AbstractRegexRule
{
    protected function pattern(): string
    {
        return "/^(?:\p{Lu}?\p{Ll}+)(?:\p{Lu}\p{Ll}+)*$/u";
    }
}
