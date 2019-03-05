<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Controllers\Controller;

class ListsController extends Controller
{
    public function index(){
        $lists = DB::table('lists')->get();
        return view('todolist/index', ['lists' => $lists]);
    }

    public function create(){

    }

    public function get($id){
        $list = DB::table('lists')->where(['id' => $id ])->get();
        return view('todolist/edit',['list' => $list]);
    }

    public function delete(){
        
    }
   
}