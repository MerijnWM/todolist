<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function create($list_id){
    	return view('tasks/create', ['list_id' => $list_id]);
    }

    public function insert(){
        DB::table('tasks')->insert([
            'duration' => $_POST['duration'],
            'description' => $_POST['description'],
            'status' => $_POST['status'],
            'list_id' => $_POST['list_id']
        ]);
      	return redirect()->route('viewlist', $_POST['list_id']);
    }

    public function get($id){
        $task = DB::table('tasks')->where(['id' => $id ])->get();
        return view('tasks/edit',['task' => $task]);
    }

    public function edit(){
        DB::table('tasks')->where('id', $_POST['id'])
        ->update([
            'duration' => $_POST['duration'],
            'description' => $_POST['description'],
            'status' => $_POST['status']
        ]);
        return redirect()->route('viewlist', $_POST['list_id']);
    }

    public function delete($id){
        DB::table('tasks')->where('id', $id)->delete();

        return redirect()->back();
    }

    public function filterDescription($filter, $id){
        $list = DB::table('tasks')->where(['list_id' => $id, 'duration' => $filter])->get();
        return view('todolist/view',['list' => $list , 'list_id' => $id]);
    }


    public function filterStatus($filter, $id){
        $list = DB::table('tasks')->where(['list_id' => $id, 'status' => $filter])->get();
        return view('todolist/view',['list' => $list , 'list_id' => $id]);
    }
}