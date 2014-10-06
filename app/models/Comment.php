<?php

class Comment extends \Eloquent
{
	protected $fillable = ['body', 'post_id', 'user_id'];

    public function post()
    {
        return $this->belongsTo('Post');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
