<?php

return [

    'title' => 'User',
    'single' => 'User',
    'model' => 'User',

    'columns' => [
        'id' => [
            'title' => 'ID'
        ],
        'username' => [
            'title' => 'User Name',
        ],
        'display_name' => [
            'title' => 'Display Name',
        ],
        'email' => [
            'title' => 'Email',
        ],
        'created_at',
    ],

    'edit_fields' => [
        'username' => [
            'title' => 'User Name',
            'type' => 'text'
        ],
        'display_name' => [
            'title' => 'Display Name',
            'type' => 'text'
        ],
        'email' => [
            'title' => 'Email',
            'type' => 'text'
        ],
        'password' => [
            'title' => 'Password',
            'type' => 'password'
        ],
    ],

    'filters' => [
        'id' => [
            'title' => 'User ID',
        ],
        'username' => [
            'title' => 'User Name',
        ],
        'display_name' => [
            'title' => 'Display Name',
        ],
        'email' => [
            'title' => 'Email',
        ],
    ],
];
