<?php

return [

    'title' => '评论',
    'single' => '评论',
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
            'title' => '内容',
            'sortable' => false,
        ],
        'user_name' => [
            'title' => "发布者",
            'relationship' => 'user', //this is the name of the Eloquent relationship method!
            'select' => "(:table).username",
        ],
        'post_title' => [
            'title' => "文章标题",
            'relationship' => 'post',
            'select' => "(:table).title",
        ],
    ],

    'edit_fields' => [
        'body' => [
            'title' => '内容',
            'type' => 'text'
        ],
    ],

    'filters' => [
        'body' => [
            'title' => '内容',
        ]
    ],

];
