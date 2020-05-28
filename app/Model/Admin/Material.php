<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function project()
    {
        return $this->belongsTo('App\Model\Admin\Project', 'project_id');
    }
}
