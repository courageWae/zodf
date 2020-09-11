<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    // public function posts(){
    //     return $this->belongsToMany('App\Model\Admin\Post','PostTags')->orderBy('created_at','DESC')->paginate(5);
    // }

    public function posts(){
        return $this->belongsToMany('App\Model\Admin\Post','post_tags')->orderBy('created_at','DESC')->paginate(5);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}