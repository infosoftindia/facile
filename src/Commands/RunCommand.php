<?php

namespace Facile\Commands;

/**
 * Class RunCommand
 *
 * Run the application.
 *
 * @package Facile\Commands
 */
class RunCommand extends Command
{
    /**
     * Store the parameters of the command.
     *
     * @var array
     */
    protected $params = ['port?'];

    /**
     * This will show up when running 'php facile'.
     *
     * @var string
     */
    protected $description = 'Run the application';

    /**
     * Code to execute when running the command.
     *
     * @param object $args
     */
    public function handle(object $args)
    {
        $port = 8000;

        if ($args->port) {
            $port = $args->port;
        }

        $this->console->green("Local Server start in  http://localhost:$port\n");
        exec("php -S localhost:$port -t public/");
    }
}