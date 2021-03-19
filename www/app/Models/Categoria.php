<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'name'
    ];

    public function rules(){

        return[
            "name"=>"required|min:3|max:20|unique:categorias,name"
        ];
    }
    public function movies(){
        return $this->hasMany(Movies::class);
    }

}
