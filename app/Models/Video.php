<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Comment; // import model

class Video extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    // use hasMany relation with foreignkey & reduce read query  
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
