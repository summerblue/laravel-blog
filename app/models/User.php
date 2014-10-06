<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;

use Zizaco\Entrust\HasRole;

class User extends Eloquent implements ConfideUserInterface
{
    use ConfideUser;
    use HasRole;

    public function posts()
    {
        return $this->hasMany('Post');
    }

    public function comments()
    {
        return $this->hasMany('Comment');
    }
}
