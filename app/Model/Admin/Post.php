<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function tags(){
        return $this->belongsToMany('App\Model\Admin\Tag','post_tags')->withTimestamps();
    }

    public function categories(){
        return $this->belongsToMany('App\Model\Admin\Category','category_posts')->withTimestamps();
    }

    public function admin(){
        return $this->belongsTo('\App\User');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
