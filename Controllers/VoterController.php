<?php
namespace App\Http\Controllers;
 use App\Http\Controllers\Controller;

 class VoterController extends Controller 
 {
     public function vote(){
         $name='Dmachibya';
         return view('vote.voters')->with('name',$name);
     }
     public function votes($id){
         return view('vote.voters')->with('id',$id);
     }
 }
 



?>