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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/article' => [[['_route' => 'app_api_article_generator', '_controller' => 'App\\Controller\\ApiArticleGeneratorController::index'], null, null, null, false, false, null]],
        '/dashboard/create_article' => [[['_route' => 'app_dashboard_create_article', '_controller' => 'App\\Controller\\ArticleGeneratorController::input'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::dashboard'], null, null, null, true, false, null]],
        '/dashboard/templates' => [[['_route' => 'app_dashboard_templates', '_controller' => 'App\\Controller\\DashboardController::templates'], null, null, null, false, false, null]],
        '/dashboard/template/add' => [[['_route' => 'app_dashboard_template_add', '_controller' => 'App\\Controller\\DashboardController::templateAdd'], null, null, null, false, false, null]],
        '/dashboard/history' => [[['_route' => 'app_dashboard_history', '_controller' => 'App\\Controller\\DashboardController::articlesHistory'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\MainController::homepage'], null, null, null, false, false, null]],
        '/try' => [[['_route' => 'app_try', '_controller' => 'App\\Controller\\MainController::try'], null, null, null, false, false, null]],
        '/dashboard/profile' => [[['_route' => 'app_dashboard_profile', '_controller' => 'App\\Controller\\ProfileController::profile'], null, null, null, false, false, null]],
        '/dashboard/profile/update' => [[['_route' => 'app_dashboard_profile_update', '_controller' => 'App\\Controller\\ProfileController::profileUpdate'], null, null, null, false, false, null]],
        '/verify/email_change' => [[['_route' => 'app_verify_email_change', '_controller' => 'App\\Controller\\ProfileController::verifyEmailChange'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/dashboard/subscription' => [[['_route' => 'app_dashboard_subscription', '_controller' => 'App\\Controller\\SubscriptionController::subscription'], null, null, null, false, false, null]],
        '/dashboard/subscription/order' => [[['_route' => 'app_dashboard_subscription_order', '_controller' => 'App\\Controller\\SubscriptionController::orderSubscription'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/dashboard/(?'
                    .'|template/delete/([^/]++)(*:207)'
                    .'|article_detail/([^/]++)(*:238)'
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
        207 => [[['_route' => 'app_dashboard_template_delete', '_controller' => 'App\\Controller\\DashboardController::templateDelete'], ['id'], null, null, false, true, null]],
        238 => [
            [['_route' => 'app_dashboard_article_detail', '_controller' => 'App\\Controller\\DashboardController::articleDetail'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
