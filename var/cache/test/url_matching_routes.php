<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/api/products' => [[['_route' => 'product_all', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/csv' => [[['_route' => 'csv', '_controller' => 'App\\Controller\\CsvController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/([^/]++)(?'
                    .'|/(?'
                        .'|cart(?'
                            .'|(*:30)'
                            .'|/(?'
                                .'|([^/]++)/add(*:53)'
                                .'|show(*:64)'
                                .'|([^/]++)/remove(*:86)'
                                .'|empty(*:98)'
                            .')'
                        .')'
                        .'|product(?'
                            .'|(*:117)'
                            .'|/(?'
                                .'|new(*:132)'
                                .'|([^/]++)(?'
                                    .'|(*:151)'
                                    .'|/edit(*:164)'
                                    .'|(*:172)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|(*:184)'
                .')'
                .'|/log(?'
                    .'|in(*:202)'
                    .'|out(*:213)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], ['_locale'], null, null, true, false, null]],
        53 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::AddSale'], ['_locale', 'id'], null, null, false, false, null]],
        64 => [[['_route' => 'cart_show', '_controller' => 'App\\Controller\\CartController::show'], ['_locale'], null, null, false, false, null]],
        86 => [[['_route' => 'cart_remove_product', '_controller' => 'App\\Controller\\CartController::remove'], ['_locale', 'id'], null, null, false, false, null]],
        98 => [[['_route' => 'cart_empty', '_controller' => 'App\\Controller\\CartController::delete'], ['_locale'], null, null, false, false, null]],
        117 => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        132 => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        151 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        164 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        172 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
        184 => [[['_route' => 'locale', '_controller' => 'App\\Controller\\DefaultController::locale'], ['locale'], null, null, false, true, null]],
        202 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        213 => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
