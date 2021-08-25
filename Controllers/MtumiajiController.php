<?php
namespace App\Http\Controllers;

session_start();

Use App\Http\Controllers\Controller;
Use Illuminate\Http\Request;
use App\Models\Mtumiaji;

class MtumiajiController extends Controller 
{
    public function index(){
        return view('org.index');
    }
    public function save(Request $request){
        $mtumiaji=new Mtumiaji();
        $mtumiaji->first_name=$request->first_name;
        $mtumiaji->second_name=$request->second_name;
        $mtumiaji->email=$request->email;
        $mtumiaji->password=$request->password;

        $mtumiaji->save();
        return'Registration Successfully';
    }
    public function log(Request $request){
        $mtumiaji=Mtumiaji::where('email',$request->email)->first();

        if($request->password==$mtumiaji->password){
            $_SESSION['user'] = $request->email;
            return'login successfully';
        }else {
            return'Incorrect Username or Password';
        }
    }
}



?>