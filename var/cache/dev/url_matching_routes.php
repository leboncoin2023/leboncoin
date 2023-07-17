<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/auction' => [[['_route' => 'app_auction', '_controller' => 'App\\Controller\\AuctionController::index'], null, null, null, true, false, null]],
        '/auction/test2' => [[['_route' => 'app_auction_test', '_controller' => 'App\\Controller\\AuctionController::test'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'app_category', '_controller' => 'App\\Controller\\CategoryController::category'], null, null, null, true, false, null]],
        '/category/subcategory' => [[['_route' => 'app_subcategory', '_controller' => 'App\\Controller\\CategoryController::subCategory'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, true, false, null]],
        '/user/edit' => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], null, null, null, false, false, null]],
        '/user/delete' => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
