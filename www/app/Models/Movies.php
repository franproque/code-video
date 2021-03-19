<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Genres;
use App\Models\Categoria;
class Movies extends Model
{

    protected $fillable = [
        'name', 'description', 'synopsis','id_genre','id_categoria'
    ];

 

   public function rules(){

    return[
        "name"=>"required|min:3|max:50|unique:movies,name",
        "description"=>"required|min:3|max:100",
        "synopsis"=>"required|min:3|max:100",
        "id_genre"=>"required|int|exists:genres,id",
        "id_categoria"=>"required|int|exists:categorias,id"

    ];
   }

 public function genres(){

    return $this->belongsTo(Genres::class);
 }
 public function categoria(){

    return $this->belongsTo(Categoria::class);
 }
 


}
