<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return  DB::table('categorias')
        ->select('id','name')
        ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
        $data = $request->all();
        $categoria =new Categoria;
        $validate = validator($data,$categoria->rules() );

if($validate->fails()){
    return $validate->errors();
}

        return Categoria::create($data);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ret = DB::table('movies as m')
        ->join('genres as g','m.id_genre','=','g.id')
       ->join('categorias as c','m.id_categoria','=','c.id')
       ->select('m.id','m.name as title','m.description','m.synopsis','g.name as genre','c.name as categorie')
       ->where('c.id','=',$id)
       ->get();
     return $ret ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

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
        $categoria =new Categoria;
        $validate = validator($data,$categoria->rules() );

        if($validate->fails()){
        return $validate->errors();
        }
        $cat =Categoria::findOrFail($id);
           
           
        $cat->update($request->all());
        return $cat;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat =Categoria::findOrFail($id);
           
           
        $cat->delete($request->all());
        return $cat;    
    
    }
}
