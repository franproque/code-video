<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CastMembers;
use Illuminate\Support\Facades\DB;
class CastMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return    DB::table('cast_members')
             ->select('id','name','type')
             ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $cast =new CastMembers;
        $validate = validator($data,$cast->rules() );

        if($validate->fails()){
        return $validate->errors();
        }

        if($data['type']==1 || $data['type']==2){
             return CastMembers::create($data);  
        }else{
            return array([
                "message"=>"informe o Type corretamente, 1- Diretor 2- Actor"
            ]);
        }
     

      
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return    DB::table('movies__cast_memers as mc')
        ->join('movies as m','mc.id_movie','=','m.id')
        ->join('cast_members as cm','mc.id_cast_member','=','cm.id')
        ->join('genres as g','m.id_genre','=','g.id')
        ->join('categorias as c','m.id_categoria','=','c.id')
        ->select('mc.id_cast_member as id ','cm.name','cm.type','m.name as title','m.description','m.synopsis','c.name as categoria','g.name as genero')->where('mc.id','=',$id)
        ->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $request->all();
        $cast =new CastMembers;
        $validate = validator($data,$cast->rules() );

        if($validate->fails()){
        return $validate->errors();
        }

        if($data['type']==1 || $data['type']==2){
            $cast =CastMembers::findOrFail($id);
            $cast->update($request->all());
            return $cast;
        }else{
            return array([
                "message"=>"informe o Type corretamente, 1- Diretor 2- Actor"
            ]);
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cast =CastMembers::findOrFail($id);
        $cast->delete();
    }
}
