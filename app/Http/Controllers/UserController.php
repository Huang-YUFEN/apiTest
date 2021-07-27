<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //
    public function showAll(){
        return User::all(); 
    }
    public function show($id){
        return User::find($id);
    }
    public function store(Request $request){
         return User::create($request->all());
    }
    public function update(Request $request, $id){
        $article=User::findOrFail($id);
        $article->update($request->all());
        return $article;
    }
    public function delete($id){
        $article=User::findOrFail($id);
        $article->delete();
        return "id=".$id."刪除完成";
    }
}
