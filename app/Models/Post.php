<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //use HasFactory;
    protected $dates = ['deleted_at'];

    protected $fillable =[
        'title',
        'content',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo('App\Models\User');

        
    }
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }


   public function photos(){
       return $this->morphMany('App\Models\Photo', 'imageable');
   }


   public function tags(){
       return $this->morphToMany('App\Models\Tag', 'taggable');
   }
    

    // public function photos(){
    //     return $this->morphMany('App\Models\Photo', 'imageable');
    // }


    // public function tags(){
    //     return $this->morphToMany('App\Models\Tag', 'taggable');
    // }






}
