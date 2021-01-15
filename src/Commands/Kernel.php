<?php

namespace Facile\Commands;

/**
 * Class Kernel
 *
 * Keep track of all the registered system commands.
 *
 * @package Facile\Commands
 */
class Kernel extends ConsoleKernel
{
    /**
     * Store system commands.
     *
     * @var array
     */
    protected $commands
    = [
        'down'            => DownCommand::class,
        'key:generate'    => KeyGenerateCommand::class,
        'make:collection' => MakeCollectionCommand::class,
        'make:command'    => MakeCommandCommand::class,
        'make:controller' => MakeControllerCommand::class,
        'make:middleware' => MakeMiddlewareCommand::class,
        'make:migration'  => MakeMigrationCommand::class,
        'make:model'      => MakeModelCommand::class,
        'make:resource'   => MakeResourceCommand::class,
        'make:request'    => MakeRequestCommand::class,
        'migrate:refresh' => MigrateRefreshCommand::class,
        'make:observer'   => MakeObserverCommand::class,
        'make:rule'       => MakeRuleCommand::class,
        'serve'           => RunCommand::class,
        'up'              => UpCommand::class,
    ];
}
