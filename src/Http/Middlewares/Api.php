<?php

namespace Facile\Http\Middlewares;

use Facile\Auth\JWT;
use Exception;

/**
 * Class Api
 *
 * Deny access to non authenticated users.
 *
 * @package Facile\Http\Middlewares
 */
class Api
{
    /**
     * Deny access to non authenticated users.
     *
     * @throws Exception
     */
    public function handle()
    {
        $jwt = str_replace('Bearer ', '', request()->httpAuthorization);

        if ((new JWT())->validate($jwt)) {
            return true;
        }

        return json([
            'message' => 'Unauthenticated'
        ], 401);
    }
}