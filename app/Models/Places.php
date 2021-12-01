<?php

namespace App\Models;

use App\Models\User;
use App\Models\Story;
use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Places extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['country', 'author'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function stories()
    {
        return $this->hasMany(Story::class);
    }
}
