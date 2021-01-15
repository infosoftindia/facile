<?php

namespace Facile\Database\Migrations\Constraints\Drivers;

use Facile\Database\Migrations\Constraints\ConstraintsI;

/**
 * Class MySqlConstraint
 *
 * MySql constraints.
 *
 * @package Facile\Database\Migrations\Constraints\Drivers
 */
class MySqlConstraint implements ConstraintsI
{
    /**
     * Primary key constraint.
     *
     * @return string
     */
    public function primary(): string
    {
        return 'PRIMARY KEY';
    }

    /**
     * Default constraint.
     *
     * @param $value
     *
     * @return string
     */
    public function default($value): string
    {
        if (is_bool($value)) {
            return 'DEFAULT ' . ($value === true ? 'TRUE' : 'FALSE');
        } else {
            return "DEFAULT '$value'";
        }
    }

    /**
     * Unique constraint.
     *
     * @return string
     */
    public function unique(): string
    {
        return 'UNIQUE';
    }

    /**
     * Not null constraint.
     *
     * @return string
     */
    public function notNull(): string
    {
        return 'NOT NULL';
    }
}