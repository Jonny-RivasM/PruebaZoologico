<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    //use HasFactory;
    protected $table="animals";
    protected $primaryKey="id";
    protected $fillable= [
        'id' ,'name', 'species', 'gender', 'bithdate', 'admissiondate', 'color', 'race', 'photo', 'user_id'
    ];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function parent(){
        return $this->belongsToMany(Animal::class);
    }

    public function animals(){
        return $this->hasMany(Animal::class, 'parent_id');
    }
}


