<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\Category;

class CategoryController extends Controller
{
    function loadMainCategories(){
        $cat=Category::where("parent_id",0)->get();
        if($cat->isEmpty()){
        return Response()->json(  ["result"=>false ,"rows"=> $cat]);
       }else{
        return Response()->json(  ["result"=>true ,"rows"=> $cat]);
       }
    }
    function loadSubCategories(Request $request){
        $cat=Category::where("parent_id",$request->parent_id)->get();
        if($cat->isEmpty()){
            return Response()->json(  ["result"=>false ,"rows"=> $cat]);
           }else{
            return Response()->json(  ["result"=>true ,"rows"=> $cat]);
        }
    }
    
}
