<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies_CastMemer extends Model
{
    protected $fillable = [
       'id_movie',
       'id_cast_member'
    ];


    public function rules()
    {
        return [
            'id_movie'=>"required|exists:movies,id",
            'id_cast_member'=>"required|exists:cast_members,id"
        ];
    }
}
