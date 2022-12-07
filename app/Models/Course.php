<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    const BORRADOR =1;
    const REVISION =2;
    const PUBLICADO =3;


    
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }




    //Relacion uno a muchos inversa

    public function teacher()
    {
       return $this->belongsTo('App\Models\User','user_id') ;
    }


    //Relacion uno a muchos a muchos

    public function students()
    {
       return $this->belongsToMany('App\Models\User') ;
    }

}
