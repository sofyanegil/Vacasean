<?php

namespace App\Models;

use App\Models\User;
use App\Models\Places;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Story extends Model
{
    use HasFactory;
    protected $with = ['places', 'author'];

    public function places()
    {
        return $this->belongsTo(Places::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
