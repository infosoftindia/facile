<?php

namespace Facile\Commands;

use Facile\Utils\Console;

/**
 * Class Command
 *
 * Hide the underline implementation of a Tea command.
 *
 * @package Facile\Commands
 */
abstract class Command
{
    /**
     * Store the parameters of the command.
     *
     * @var array
     */
    protected $params = [];

    /**
     * This will show up when running 'php tea'.
     *
     * @var string
     */
    protected $description = '';

    /**
     * A utility class for console.
     *
     * @var Console
     */
    protected $console;

    /**
     * Command constructor.
     *
     * Command constructor.
     */
    public function __construct()
    {
        $this->console = new Console();
    }

    /**
     * Code to execute when running the command.
     *
     * @param object $args
     */
    public function handle(object $args)
    {
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Get params.
     *
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }
}