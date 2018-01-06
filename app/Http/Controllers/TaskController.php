<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    public static function index(){
    	$tasks = Task::all();
    	return $tasks;
    }

    public static function show($id){
    	$task = Task::find($id);
	    return $task->title;
    }
}
