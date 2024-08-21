<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/veto/animal' => [[['_route' => 'app_animal_index', '_controller' => 'App\\Controller\\AnimalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/veto/animal/new' => [[['_route' => 'app_animal_new', '_controller' => 'App\\Controller\\AnimalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/animal' => [[['_route' => 'app_animal_list', '_controller' => 'App\\Controller\\AnimalController::list'], null, null, null, false, false, null]],
        '/employee/animal/feeding' => [[['_route' => 'app_animal_feeding_index', '_controller' => 'App\\Controller\\AnimalFeedingController::index'], null, null, null, true, false, null]],
        '/employee/animal/feeding/new' => [[['_route' => 'app_animal_feeding_new', '_controller' => 'App\\Controller\\AnimalFeedingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, true, false, null]],
        '/contact/send' => [[['_route' => 'app_contact_send', '_controller' => 'App\\Controller\\ContactController::send'], null, null, null, false, false, null]],
        '/contact/confirmation' => [[['_route' => 'app_contact_confirmation', '_controller' => 'App\\Controller\\ContactController::confirmation'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/dashboard/filter' => [[['_route' => 'app_admin_dashboard_filter', '_controller' => 'App\\Controller\\DashboardController::filterReports'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/habitat' => [[['_route' => 'app_habitat', '_controller' => 'App\\Controller\\DefaultController::habitat'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/service' => [[['_route' => 'app_service', '_controller' => 'App\\Controller\\DefaultController::service'], null, null, null, false, false, null]],
        '/veto/habitat' => [[['_route' => 'app_habitat_index', '_controller' => 'App\\Controller\\HabitatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/veto/habitat/new' => [[['_route' => 'app_habitat_new', '_controller' => 'App\\Controller\\HabitatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mentions-legal' => [[['_route' => 'app_legal', '_controller' => 'App\\Controller\\LegalController::index'], null, null, null, false, false, null]],
        '/password-reset/request' => [[['_route' => 'app_password_reset_request', '_controller' => 'App\\Controller\\PasswordResetController::request'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/review/new' => [[['_route' => 'app_review_new', '_controller' => 'App\\Controller\\ReviewController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employee/reviews' => [[['_route' => 'app_employee_reviews', '_controller' => 'App\\Controller\\ReviewController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/schedule' => [[['_route' => 'app_schedule_index', '_controller' => 'App\\Controller\\ScheduleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/schedule/new' => [[['_route' => 'app_schedule_new', '_controller' => 'App\\Controller\\ScheduleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/employee/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employee/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_list', '_controller' => 'App\\Controller\\UserController::list'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/veto/veterinary_report' => [[['_route' => 'app_veterinary_report_index', '_controller' => 'App\\Controller\\VeterinaryReportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/veto/veterinary_report/new' => [[['_route' => 'app_veterinary_report_new', '_controller' => 'App\\Controller\\VeterinaryReportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/veto/(?'
                    .'|animal/([^/]++)(?'
                        .'|/edit(*:39)'
                        .'|(*:46)'
                    .')'
                    .'|habitat/([^/]++)(?'
                        .'|(*:73)'
                        .'|/edit(*:85)'
                        .'|(*:92)'
                    .')'
                    .'|veterinary_report/([^/]++)(?'
                        .'|(*:129)'
                        .'|/edit(*:142)'
                        .'|(*:150)'
                    .')'
                .')'
                .'|/a(?'
                    .'|nimal/([^/]++)(*:179)'
                    .'|dmin/(?'
                        .'|schedule/([^/]++)(?'
                            .'|/edit(*:220)'
                            .'|(*:228)'
                        .')'
                        .'|user/(?'
                            .'|([^/]++)(?'
                                .'|/edit(*:261)'
                                .'|(*:269)'
                            .')'
                            .'|dashboard(*:287)'
                        .')'
                    .')'
                .')'
                .'|/employee/(?'
                    .'|animal/feeding/([^/]++)(?'
                        .'|(*:337)'
                        .'|/edit(*:350)'
                        .'|(*:358)'
                    .')'
                    .'|review/([^/]++)/(?'
                        .'|approve(*:393)'
                        .'|delete(*:407)'
                    .')'
                    .'|service/([^/]++)(?'
                        .'|(*:435)'
                        .'|/edit(*:448)'
                        .'|(*:456)'
                    .')'
                .')'
                .'|/habitat/([^/]++)/animals(*:491)'
                .'|/password\\-reset/reset/([^/]++)(*:530)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'app_animal_edit', '_controller' => 'App\\Controller\\AnimalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        46 => [[['_route' => 'app_animal_delete', '_controller' => 'App\\Controller\\AnimalController::delete'], ['id'], ['POST' => 0], null, true, true, null]],
        73 => [[['_route' => 'app_habitat_show', '_controller' => 'App\\Controller\\HabitatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        85 => [[['_route' => 'app_habitat_edit', '_controller' => 'App\\Controller\\HabitatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        92 => [[['_route' => 'app_habitat_delete', '_controller' => 'App\\Controller\\HabitatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        129 => [[['_route' => 'app_veterinary_report_show', '_controller' => 'App\\Controller\\VeterinaryReportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        142 => [[['_route' => 'app_veterinary_report_edit', '_controller' => 'App\\Controller\\VeterinaryReportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        150 => [[['_route' => 'app_veterinary_report_delete', '_controller' => 'App\\Controller\\VeterinaryReportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        179 => [[['_route' => 'app_animal_show', '_controller' => 'App\\Controller\\AnimalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        220 => [[['_route' => 'app_schedule_edit', '_controller' => 'App\\Controller\\ScheduleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        228 => [[['_route' => 'app_schedule_delete', '_controller' => 'App\\Controller\\ScheduleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        261 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        269 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        287 => [[['_route' => 'app_user_dashboard', '_controller' => 'App\\Controller\\UserController::dashboard'], [], ['GET' => 0], null, false, false, null]],
        337 => [[['_route' => 'app_animal_feeding_show', '_controller' => 'App\\Controller\\AnimalFeedingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        350 => [[['_route' => 'app_animal_feeding_edit', '_controller' => 'App\\Controller\\AnimalFeedingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [[['_route' => 'app_animal_feeding_delete', '_controller' => 'App\\Controller\\AnimalFeedingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        393 => [[['_route' => 'app_review_approve', '_controller' => 'App\\Controller\\ReviewController::approve'], ['id'], ['POST' => 0], null, false, false, null]],
        407 => [[['_route' => 'app_review_delete', '_controller' => 'App\\Controller\\ReviewController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        435 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        448 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        456 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        491 => [[['_route' => 'app_habitat_animals', '_controller' => 'App\\Controller\\DefaultController::getAnimalsByHabitat'], ['id'], ['GET' => 0], null, false, false, null]],
        530 => [
            [['_route' => 'app_password_reset_reset', '_controller' => 'App\\Controller\\PasswordResetController::reset'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
