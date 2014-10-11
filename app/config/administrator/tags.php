<?php

return [

    'title' => 'Tag',
    'single' => 'Tag',
    'model' => 'Tag',

    'columns' => [
        'id' => [
            'title' => 'ID'
        ],
        'name' => [
            'title' => 'Name',
        ],
        'slug' => [
            'title' => 'Slug (use for URI)',
            'sortable' => false,
        ],
        'created_at',
    ],

    'edit_fields' => [
        'name' => [
            'title' => 'Name',
            'type' => 'text'
        ],
        'slug' => [
            'title' => 'Slug (use for URI)',
            'type' => 'text'
        ]
    ],

    'filters' => [
        'name' => [
            'title' => 'Name',
        ]
    ]
];
