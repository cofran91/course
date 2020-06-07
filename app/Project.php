<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    public $timestamps = false;

    protected $primaryKey = 'project_id';

    public function getRouteKeyName()
    {
    	return 'project_url';
    }


}
