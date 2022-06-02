<?php

use Illuminate\Http\Request;

return [

    'animation' => [
        'main_animation' => 'animate__animated',
        'animationInClass' => '',
        'animationOutClass' => '',
        'navbarIn' => '',
        'navbarOut' => '',
        'toolbarIn' => '',
        'toolbarOut' => '',
        'timer' => 500,
    ],

    'roles' => [

        'names' => [
            'adminRole' => 'superadmin',
            'userRole' => 'user',
        ],

        'actions' => [
            'assignRole' => 'assign',
            'removeRole' => 'remove',
        ],
    ],

    'email' => [

        'action' => [
            'verify' => 'verify',
            'reset' => 'reset',
        ],

        'subject' => [
            'verify' => 'Please click on the link to verify your account in '.env('APP_NAME'),
            'reset' => 'Password Resset Link To Your '.env('APP_NAME').' account',
        ],

        'view' => [
            'verify' => 'auth.emails.verify',
            'reset' => 'auth.emails.reset',
        ]
    ],

];

?>
