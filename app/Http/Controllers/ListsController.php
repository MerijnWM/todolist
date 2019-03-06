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
        return view('todolist/create');
    }

    public function insert(){
        DB::table('lists')->insert([
            ['name' => $_POST['name']]            
        ]);
       return redirect('/');
    }

    public function get($id){
        $list = DB::table('lists')->where(['id' => $id ])->get();
        return view('todolist/edit',['list' => $list]);
    }

    public function edit(){
        DB::table('lists')->where('id', $_POST['id'])
        ->update(['name' => $_POST['name']]
        );
        return redirect('/');
    }

    public function view($id){
        $list = DB::table('tasks')->where(['list_id' => $id])->get();
        return view('todolist/view',['list' => $list]);
    }

    public function delete($id){
        DB::table('lists')->where('id', $id)->delete();

        DB::table('tasks')->where('list_id', $id)->delete();
        return redirect('/');
    }
   
}