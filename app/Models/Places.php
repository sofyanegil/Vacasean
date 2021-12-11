<?php

namespace App\Models;

use App\Models\User;
use App\Models\Story;
use App\Models\Country;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Places extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'places';
    protected $guarded = ['id'];
    protected $with = ['country', 'author'];

 public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('city', 'like', '%' . $search . '%')->orWhere('about', 'like', '%' . $search . '%');
            });
        });

    }

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

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
