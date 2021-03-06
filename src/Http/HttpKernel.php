<?php

namespace Facile\Http;

/**
 * Class HttpKernel
 *
 * Hide the underline implementation of a Kernel.
 *
 * @package Facile\Http
 */
abstract class HttpKernel
{
    /**
     * Stores global middlewares.
     *
     * @var array
     */
    protected $globalMiddlewares = [];

    /**
     * Stores route middlewares.
     *
     * @var array
     */
    protected $routeMiddlewares = [];

    /**
     * Get global middlewares.
     *
     * @return array
     */
    public function getGlobalMiddlewares(): array
    {
        return $this->globalMiddlewares;
    }

    /**
     * Get route middlewares.
     *
     * @return array
     */
    public function getRouteMiddlewares(): array
    {
        return $this->routeMiddlewares;
    }
}