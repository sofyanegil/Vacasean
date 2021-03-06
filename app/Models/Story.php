<?php

namespace App\Models;

use App\Models\User;
use App\Models\Places;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Story extends Model
{

 public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        });

    }


    use HasFactory, Sluggable;
    protected $guarded = ['id'];
    protected $with = ['places', 'author'];

    public function places()
    {
        return $this->belongsTo(Places::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
