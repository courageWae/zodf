<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function materials()
    {
        return $this->hasMany('App\Model\Admin\Material');
    }
}
