<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class income extends Model
{
    //
    protected $table = 'incomes';

    public function member()
    {
        return $this->hasMany('App\member');
    }
}
