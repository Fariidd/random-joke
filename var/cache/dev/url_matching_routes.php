<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/blagues' => [[['_route' => 'app_joke_index', '_controller' => 'App\\Controller\\JokeController::showAll'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'app_joke_new', '_controller' => 'App\\Controller\\JokeController::newJoke'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/random-joke' => [[['_route' => 'api_random_joke', '_controller' => 'App\\Controller\\JokeController::getRandomJoke'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_random_joke', '_controller' => 'App\\Controller\\JokeController::showRandomJokePage'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/([^/]++)(?'
                    .'|(*:19)'
                    .'|/edit(*:31)'
                    .'|(*:38)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:77)'
                    .'|wdt/([^/]++)(*:96)'
                    .'|profiler(?'
                        .'|(*:114)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:152)'
                                .'|router(*:166)'
                                .'|exception(?'
                                    .'|(*:186)'
                                    .'|\\.css(*:199)'
                                .')'
                            .')'
                            .'|(*:209)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        19 => [[['_route' => 'app_joke_show', '_controller' => 'App\\Controller\\JokeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        31 => [[['_route' => 'app_joke_edit', '_controller' => 'App\\Controller\\JokeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        38 => [[['_route' => 'app_joke_delete', '_controller' => 'App\\Controller\\JokeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        77 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        96 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        114 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        152 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        166 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        186 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        199 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        209 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
