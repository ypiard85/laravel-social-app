<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comments;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Posts extends Authenticatable
{
    use HasFactory, Notifiable;


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comments::class);
    }

}
