<?php

namespace Facile\Routing;

use ReflectionClass;
use ReflectionException;

/**
 * Class Renderer
 *
 * Render response.
 *
 * @package Facile\Routing
 */
class Renderer
{
    /**
     * Render response.
     *
     * @param $response
     *
     * @return void|null
     * @throws ReflectionException
     */
    public function render($response)
    {
        if (class_exists(get_parent_class($response))
            && (new ReflectionClass(get_parent_class($response)))->getShortName() === 'ResourceCollection'
        ) {
            return json($response->toArray());
        } elseif (class_exists(get_parent_class($response))
                  && (new ReflectionClass(get_parent_class($response)))->getShortName() === 'JsonResource'
        ) {
            return json([
                'data' => $response->toArray()
            ]);
        } elseif (is_array($response) || is_object($response)) {
            return json($response);
        } else {
            echo $response;
        }

        return null;
    }
}