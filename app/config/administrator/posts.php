<?php

return [

    'title' => 'Post',
    'single' => 'Post',
    'model' => 'Post',

    'columns' => [
        'id' => [
            'title' => 'ID'
        ],
        'title' => [
            'title' => 'Title',
        ],
        'body' => [
            'title' => 'Content',
            'sortable' => false,
            'output' => function($value)
            {
                return make_excerpt($value);
            },
        ],
        'user_name' => [
            'title' => "Author",
            'relationship' => 'user', //this is the name of the Eloquent relationship method!
            'select' => "(:table).username",
        ],
        'category_name' => [
            'title' => "Category",
            'relationship' => 'category', //this is the name of the Eloquent relationship method!
            'select' => "(:table).name",
        ],
        'comments_count' => [
            'title' => 'Comments Count'
        ],
        'created_at',
    ],

    'edit_fields' => [
        'title' => [
            'title' => 'Title',
            'type' => 'text'
        ],
        'category' => array(
            'type' => 'relationship',
            'title' => 'Category',
            'name_field' => 'name',
        )
    ],

    'filters' => [
        'title' => [
            'title' => 'Title',
        ]
    ],

    'link' => function($model)
    {
        return URL::route('posts.edit', $model->id);
    },


];
