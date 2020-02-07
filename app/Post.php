<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['titre','description','categorie','image','date_publication','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeDernier($q){
        $q->latest('date_publication')->take(5);
    }

  
}
