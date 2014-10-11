<?php

return [

    'title' => 'Comment',
    'single' => 'Comment',
    'model' => 'Comment',

    'action_permissions'=> [
        'delete' => function($model)
        {
            return true;
        },
        'create' => function($model)
        {
            return false;
        }
    ],

    'columns' => [
        'id' => [
            'title' => 'ID'
        ],
        'body' => [
            'title' => 'Body',
            'sortable' => false,
        ],
        'user_name' => [
            'title' => "Author",
            'relationship' => 'user', //this is the name of the Eloquent relationship method!
            'select' => "(:table).username",
        ],
        'post_title' => [
            'title' => "Post Title",
            'relationship' => 'post',
            'select' => "(:table).title",
        ],
    ],

    'edit_fields' => [
        'body' => [
            'title' => 'Body',
            'type' => 'text'
        ],
    ],

    'filters' => [
        'body' => [
            'title' => 'Body',
        ]
    ],

];
