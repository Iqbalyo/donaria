<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Campaign;

class Category extends Model
{
    //
    protected $fillable = ['name','slug'];

    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }
}
