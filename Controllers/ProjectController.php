<?php
namespace App\Http\Controllers;
    
use App\Http\Controllers\Controller;

class ProjectController extends Controller {
    public function project(){
        $name_var ="David";

        $a= 10;
        $b=20;

        $r = $a + $b;

        return view("project.index")->with('njame', $r);
    }

    public function fetch($id){
        return view("project.show")->with('id', $id);
    }
}
?>