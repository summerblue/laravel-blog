<?php

class Post extends \Eloquent
{
    // manually maintian
    public $timestamps = false;

	protected $fillable = [
        'title', 'slug', 'body',
        'body_original', 'user_id', 'category_id',
        'comments_count'
    ];

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function category()
    {
        return $this->belongsTo('Category');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
