<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function branch()
    {
        return $this->belongsToMany(Branch::class);
    }
}
