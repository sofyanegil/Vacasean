<?php

namespace App\Models;

use App\Models\Places;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function places()
    {
        return $this->hasMany(Places::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
