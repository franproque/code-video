<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CastMembers extends Model
{
    protected $fillable = [
        'name', 'type'
    ];

    public function rules(){

        return [
            "name"=>"required|unique:cast_members,name",
            "type"=>"required|min:1|max:1"
        ];
    }

}
