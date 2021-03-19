<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Movies;
class Genres extends Model
{
    protected $fillable = [
        'name'
    ];
    public function rules(){
       return [

        'name'=>'required|min:3|max:20|unique:genres,name',
        
    ];
}

public function movies(){
    return $this->hasMany(Movies::class);
}
}
