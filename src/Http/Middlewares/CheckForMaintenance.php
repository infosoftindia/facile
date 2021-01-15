<?php

namespace Facile\Http\Middlewares;

use Exception;

/**
 * Class CheckForMaintenance
 *
 * Exit if the application is under maintenance.
 *
 * @package Facile\Http\Middlewares
 */
class CheckForMaintenance
{
    /**
     * Exit if the application is under maintenance.
     *
     * @throws Exception
     */
    public function handle()
    {
        if (file_exists('down')) {
            view('vendor.maintenance');

            exit();
        }

        return true;
    }
}