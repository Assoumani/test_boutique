<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/api/products' => [[['_route' => 'product_all', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/csv' => [[['_route' => 'csv', '_controller' => 'App\\Controller\\CsvController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/([^/]++)(?'
                    .'|/(?'
                        .'|cart(?'
                            .'|(*:192)'
                            .'|/(?'
                                .'|([^/]++)/add(*:216)'
                                .'|show(*:228)'
                                .'|([^/]++)/remove(*:251)'
                                .'|empty(*:264)'
                            .')'
                        .')'
                        .'|product(?'
                            .'|(*:284)'
                            .'|/(?'
                                .'|new(*:299)'
                                .'|([^/]++)(?'
                                    .'|(*:318)'
                                    .'|/edit(*:331)'
                                    .'|(*:339)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|(*:351)'
                .')'
                .'|/log(?'
                    .'|in(*:369)'
                    .'|out(*:380)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], ['_locale'], null, null, true, false, null]],
        216 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::AddSale'], ['_locale', 'id'], null, null, false, false, null]],
        228 => [[['_route' => 'cart_show', '_controller' => 'App\\Controller\\CartController::show'], ['_locale'], null, null, false, false, null]],
        251 => [[['_route' => 'cart_remove_product', '_controller' => 'App\\Controller\\CartController::remove'], ['_locale', 'id'], null, null, false, false, null]],
        264 => [[['_route' => 'cart_empty', '_controller' => 'App\\Controller\\CartController::delete'], ['_locale'], null, null, false, false, null]],
        284 => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        299 => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        318 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        331 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        339 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
        351 => [[['_route' => 'locale', '_controller' => 'App\\Controller\\DefaultController::locale'], ['locale'], null, null, false, true, null]],
        369 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], [], null, null, false, false, null]],
        380 => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
