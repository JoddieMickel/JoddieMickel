<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class MachibyaController extends Controller 
{
    public function machibya($name,$gender,$month){
        if($gender=="male"){
            $gender="Mr";
            $display="Hello ".$gender. " ".$name."<br>"."Congratulations for being born in ".$month.", people born in ".$month." are cheerful and loving.";
            
        }
        if($gender=="female"){
            $gender="Miss";
            $display="Hello ".$gender. " ".$name. "<br>"."Congratulations for being born in ".$month.", people born in ".$month." are cheerful and loving.";
            
        }
        return view('machibya')->with('display',$display);
    }
}


?>