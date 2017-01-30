<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['message', 'user_id', 'title'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
