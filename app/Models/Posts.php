<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';

    public function user()
    {
        // App\Models\User
        return $this->belongsTo('App\Models\User');
    }
}
