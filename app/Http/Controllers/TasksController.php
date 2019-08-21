<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;

class TasksController extends Controller
{
    //
    public function getAll(){
        $tasks = Tasks::all();
        return $tasks;
    }

    public function add(Request $resquest) {
        $tasks = Tasks::create($resquest->all());
        return $tasks;
    }
    
    public function get($id) {
        $tasks = Tasks::find($id);
        return $tasks;
    }

    public function update($id, Request $resquest) {
        $tasks = $this->get($id);
        $tasks->fill($resquest->all())->save();
        return $tasks;
    }

    public function delete($id) {
        $tasks = $this->get($id);
        $tasks->delete();
        return $tasks;
    }
}
