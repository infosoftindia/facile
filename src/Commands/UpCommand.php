<?php

namespace Facile\Commands;

/**
 * Class UpCommand
 *
 * Bring up the application.
 *
 * @package Facile\Commands
 */
class UpCommand extends Command
{
    /**
     * This will show up when running 'php facile'.
     *
     * @var string
     */
    protected $description = 'Bring up the application';

    /**
     * Code to execute when running the command.
     *
     * @param object $args
     */
    public function handle(object $args)
    {
        if (file_exists('down')) {
            unlink('down');
        }

        $this->console->green("Application is up and running");
    }
}