<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

use Cviebrock\EloquentTaggable\Taggable;
use Cviebrock\EloquentTaggable\TaggableImpl;


class Post extends \Eloquent implements SluggableInterface, Taggable
{
    use SluggableTrait;
    use TaggableImpl;

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

    public static $rules = array(
        'title'       => 'required|min:3',
        'category_id' => 'required|exists:categories,id',
        'tags'        => 'required|min:3',
        'body'        => 'required|min:3'
    );

    protected $fillable = ['title', 'slug', 'body', 'user_id', 'category_id'];

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

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
