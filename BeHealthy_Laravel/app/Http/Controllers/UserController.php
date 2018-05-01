<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{
    public function store(request $request){
        //print_r($request->input());
        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        $height = $request->input('estatura');
        $weight = $request->input('peso');
        $gender = $request->input('genero');
        echo DB::insert('insert into users(id, nombre, email, password, estatura, peso, genero) values(?,?,?,?,?,?,?)',
            [null,$name,$email,$password,$height,$weight,$gender]);

        return view('login');
    }
    public function show(){
        
        
        return view('login');
    }

    public function logs(request $request){

        $email=$request->input('name');
        $password=$request->input('password');

        $data =  DB::select('select id from users where email=? and password=?', [$email,$password]);
        
    
        if(count($data)){
            info('haaaaaa');
            return view('index');
        }
        else{
            echo($email);
        }
    }
}
