<?php

namespace Facile\Validation\Rules;

/**
 * Interface Rule
 *
 * Validation rule.
 *
 * @package Facile\Validation\Rules
 */
interface Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes(string $attribute, $value): bool;

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string;
}