<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'sweet' => [[], ['_controller' => 'App\\Controller\\SweetController::index'], [], [['text', '/']], [], []],
    'sweetDetails' => [['id'], ['_controller' => 'App\\Controller\\SweetController::sweetDetails'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/sweet']], [], []],
    'newSweet' => [[], ['_controller' => 'App\\Controller\\SweetController::formS'], [], [['text', '/newSweet']], [], []],
    'edit' => [['id'], ['_controller' => 'App\\Controller\\SweetController::formS'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/sweet']], [], []],
    'deleteSweet' => [['id'], ['_controller' => 'App\\Controller\\SweetController::deleteSweet'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/sweet']], [], []],
    'ingredient' => [['id'], ['_controller' => 'App\\Controller\\SweetController::ingredient'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ingredient']], [], []],
    'deleteIngredient' => [['id'], ['_controller' => 'App\\Controller\\SweetController::deleteIngredient'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ingredient']], [], []],
    'listIngredients' => [[], ['_controller' => 'App\\Controller\\SweetController::listIngredients'], [], [['text', '/ingredient']], [], []],
    'newIngredient' => [[], ['_controller' => 'App\\Controller\\SweetController::formIngredient'], [], [['text', '/newIngredient']], [], []],
    'editIngredient' => [['id'], ['_controller' => 'App\\Controller\\SweetController::formIngredient'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/ingredient']], [], []],
];