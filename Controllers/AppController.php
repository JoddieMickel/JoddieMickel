<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class AppController extends Controller 
{
    public function app($n1, $op, $n2){
        if($op=="add"){
            $r = $n1 + $n2;
            $display = $n1." + ".$n2." = ".$r;
        }
        else if($op=="minus"){
            $r = $n1 - $n2;
            $display = $n1." - ".$n2." = ".$r;
        }

       else if($op=="mult"){
            $r = $n1 * $n2;
            $display = $n1." * ".$n2." = ".$r;
        }

        else if($op=="div"){
            $r = $n1 / $n2;
            $display = $n1." / ".$n2." = ".$r;
        }

         return view('calculators.calculator')->with('display', $display);
    }

}

?>