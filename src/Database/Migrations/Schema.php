<?php

namespace Facile\Database\Migrations;

use App\Bootstrap\App;
use Closure;
use Exception;

/**
 * Class Schema
 *
 * Migration schema.
 *
 * @package Facile\Database\Migrations
 */
class Schema
{
    /**
     * Create table.
     *
     * @param string  $table
     * @param Closure $callback
     *
     * @return mixed
     * @throws Exception
     */
    public static function create(string $table, Closure $callback)
    {
        $response = call_user_func($callback, new Blueprint());

        return App::get('Database')->createTable($table, $response->getColumns(), $response->getConstraints());
    }

    /**
     * Drop existing table.
     *
     * @param string $table
     *
     * @return mixed
     * @throws Exception
     */
    public static function dropIfExists(string $table)
    {
        return App::get('Database')->dropTable($table);
    }
}