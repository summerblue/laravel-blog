<?php

return [

    'title' => '标签',
    'single' => '标签',
    'model' => 'Tag',

    'columns' => [
        'id' => [
            'title' => 'ID'
        ],
        'name' => [
            'title' => '名称',
        ],
        'slug' => [
            'title' => '别名 (用于 URI 中)',
            'sortable' => false,
        ],
        'created_at',
    ],

    'edit_fields' => [
        'name' => [
            'title' => '名称',
            'type' => 'text'
        ],
        'slug' => [
            'title' => '别名 (用于 URI 中)',
            'type' => 'text'
        ]
    ],

    'filters' => [
        'name' => [
            'title' => '名称',
        ]
    ]
];
