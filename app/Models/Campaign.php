<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Donation;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'description',
        'goal_amount',
        'collected_amount',
        'deadline',
        'status',
        'thumbnail'
    ];

    //Relasi ke user
    public function user()
    {
        //campaign ini cuman dimiliki 1 user
        //yakni user_id yg ada di table Campaign ->id di table users
        return $this->belongsTo(User::class);
    }


    //relasi ke category
     public function category()
    {
        //campaign ini cuman punya kategori tertentu
        return $this->belongsTo(Category::class);
    }

    //relasi donasi
    public function donations()
    {
        //1 campaign punya banyak donasi
        return $this->hasMany(Donation::class);
    }
}
