<?php

return [

    'title' => '文章',
    'single' => '文章',
    'model' => 'Post',

    'columns' => [
        'id' => [
            'title' => 'ID'
        ],
        'title' => [
            'title' => '标题',
        ],
        'body' => [
            'title' => '内容',
            'sortable' => false,
            'output' => function($value)
            {
                $excerpt = trim(preg_replace('/\s\s+/', ' ', strip_tags($value)));
                return str_limit($excerpt, 200);
            },
        ],
        'user_name' => [
            'title' => "发布者",
            'relationship' => 'user', //this is the name of the Eloquent relationship method!
            'select' => "(:table).username",
        ],
        'category_name' => [
            'title' => "分类名称",
            'relationship' => 'category', //this is the name of the Eloquent relationship method!
            'select' => "(:table).name",
        ],
        'comments_count' => [
            'title' => '回复数'
        ],
        'created_at',
    ],

    'edit_fields' => [
        'title' => [
            'title' => '标题',
            'type' => 'text'
        ],
        'category' => array(
            'type' => 'relationship',
            'title' => '分类',
            'name_field' => 'name',
        )
    ],

    'filters' => [
        'title' => [
            'title' => '标题',
        ]
    ],

    'link' => function($model)
    {
        return URL::route('posts.edit', $model->id);
    },


];
