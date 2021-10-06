<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table = 'members';

    public function profetion()
    {
        return $this->belongsTo('App\profetion','role_id','id');
    }
    public function interest()
    {
        return $this->belongsTo('App\interest','role_id','id');
    }
    public function income()
    {
        return $this->belongsTo('App\income','role_id','id');
    }
}
