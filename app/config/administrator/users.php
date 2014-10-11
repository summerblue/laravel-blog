<?php

return [

    'title' => '用户',
    'single' => '用户',
    'model' => 'User',

    'columns' => [
        'id' => [
            'title' => 'ID'
        ],
        'username' => [
            'title' => '用户名',
        ],
        'display_name' => [
            'title' => '显示名字',
        ],
        'email' => [
            'title' => '邮箱',
        ],
        'created_at',
    ],

    'edit_fields' => [
        'username' => [
            'title' => '用户名',
            'type' => 'text'
        ],
        'display_name' => [
            'title' => '显示名称',
            'type' => 'text'
        ],
        'email' => [
            'title' => '邮箱',
            'type' => 'text'
        ],
        'password' => [
            'title' => '密码',
            'type' => 'password'
        ],
    ],

    'filters' => [
        'id' => [
            'title' => '用户ID',
        ],
        'username' => [
            'title' => '用户名',
        ],
        'display_name' => [
            'title' => '用户名',
        ],
        'email' => [
            'title' => '邮箱',
        ],
    ],
];
