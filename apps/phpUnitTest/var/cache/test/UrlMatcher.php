<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/commande/list' => [[['_route' => 'commande_list', '_controller' => 'App\\Controller\\ApiCommandeController::index'], null, null, null, false, false, null]],
        '/api/commande/post' => [[['_route' => 'commande_post', '_controller' => 'App\\Controller\\ApiCommandeController::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/commande/(?'
                    .'|put/([^/]++)(*:36)'
                    .'|delete/([^/]++)(*:58)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'commande_put', '_controller' => 'App\\Controller\\ApiCommandeController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        58 => [
            [['_route' => 'commande_delete', '_controller' => 'App\\Controller\\ApiCommandeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
