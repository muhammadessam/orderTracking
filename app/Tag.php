<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
