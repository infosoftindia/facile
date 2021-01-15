<?php

namespace Facile\Commands;

/**
 * Class ConsoleKernel
 *
 * Hide the underline implementation of Console Kernel.
 *
 * @package Facile\Commands
 */
abstract class ConsoleKernel
{
    /**
     * Store system commands.
     *
     * @var array
     */
    protected $commands = [];

    /**
     * Get commands.
     *
     * @return array
     */
    public function getCommands(): array
    {
        return $this->commands;
    }
}