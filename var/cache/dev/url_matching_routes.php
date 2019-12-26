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
        '/' => [[['_route' => 'sweet', '_controller' => 'App\\Controller\\SweetController::index'], null, null, null, false, false, null]],
        '/newSweet' => [[['_route' => 'newSweet', '_controller' => 'App\\Controller\\SweetController::formS'], null, null, null, false, false, null]],
        '/ingredient' => [[['_route' => 'listIngredients', '_controller' => 'App\\Controller\\SweetController::listIngredients'], null, null, null, false, false, null]],
        '/newIngredient' => [[['_route' => 'newIngredient', '_controller' => 'App\\Controller\\SweetController::formIngredient'], null, null, null, false, false, null]],
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
                .'|/sweet/([^/]++)(?'
                    .'|(*:187)'
                    .'|/(?'
                        .'|edit(*:203)'
                        .'|delete(*:217)'
                    .')'
                .')'
                .'|/ingredient/([^/]++)(?'
                    .'|(*:250)'
                    .'|/(?'
                        .'|delete(*:268)'
                        .'|edit(*:280)'
                    .')'
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
        187 => [[['_route' => 'sweetDetails', '_controller' => 'App\\Controller\\SweetController::sweetDetails'], ['id'], null, null, false, true, null]],
        203 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\SweetController::formS'], ['id'], null, null, false, false, null]],
        217 => [[['_route' => 'deleteSweet', '_controller' => 'App\\Controller\\SweetController::deleteSweet'], ['id'], null, null, false, false, null]],
        250 => [[['_route' => 'ingredient', '_controller' => 'App\\Controller\\SweetController::ingredient'], ['id'], null, null, false, true, null]],
        268 => [[['_route' => 'deleteIngredient', '_controller' => 'App\\Controller\\SweetController::deleteIngredient'], ['id'], null, null, false, false, null]],
        280 => [
            [['_route' => 'editIngredient', '_controller' => 'App\\Controller\\SweetController::formIngredient'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
