<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //relacion uno a uno

    public function description()
    {
        return $this->hasOne('App\Models\Description');
    }

    //relacion inversa

    public function section()
    {
        $this->belongsTo('App\Models\Section');
    }


    public function platform()
    {
        return $this->belongsTo('App\Models\Platform');
    }


    //relacion muchos a muchos

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }


    //relacion uno a uno POLIMORFICA

    public function resource()
    {
        return $this->morphOne('App\Models\Resource', 'resourceable');
    }

    //relacion uno a mucho POLIMORFICA

    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }


    public function ractions()
    {
        return $this->morphMany('App\Models\Raction', 'reactionable');
    }
}
