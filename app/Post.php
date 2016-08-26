<?php

namespace PlatziPHP;
use PlatziPHP\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //public function author(){
    //    $this->belongsTo(User::class, 'author_id');
    //}
    
    public function user(){
        $this->belongsTo(User::class);
    }
}
