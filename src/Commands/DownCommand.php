<?php

namespace Facile\Commands;

/**
 * Class DownCommand
 *
 * Bring down the application.
 *
 * @package Facile\Commands
 */
class DownCommand extends Command
{
    /**
     * This will show up when running 'php facile'.
     *
     * @var string
     */
    protected $description = 'Bring down the application';

    /**
     * Code to execute when running the command.
     *
     * @param object $args
     */
    public function handle(object $args)
    {
        file_put_contents('down', '');

        $this->console->green("Application is down");
    }
}