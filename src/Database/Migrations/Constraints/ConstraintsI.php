<?php

namespace Facile\Database\Migrations\Constraints;

/**
 * Interface ConstraintsI
 *
 * Constraints interface.
 *
 * @package Facile\Database\Migrations\Constraints
 */
interface ConstraintsI
{
    /**
     * Primary key constraint.
     *
     * @return string
     */
    public function primary(): string;

    /**
     * Default constraint.
     *
     * @param $value
     *
     * @return string
     */
    public function default($value): string;

    /**
     * Unique constraint.
     *
     * @return string
     */
    public function unique(): string;

    /**
     * Not null constraint.
     *
     * @return string
     */
    public function notNull(): string;
}