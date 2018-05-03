<?php

namespace App\Http\Controllers;

use Cookie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Diets;


class UserController extends Controller{

    public $username = "";
    public $id_User = "";

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

    public function retName(){
        return $username;
    }

    public function LogOut(){
        Cookie::forget('sesion');
        return view('login');
    }

    public function logs(request $request){
        $email=$request->input('name');
        $password=$request->input('password');



        $data =  DB::select('select id from users where email=? and password=?', [$email,$password]);

        foreach ($data as $user) {
            $id_User=$user->id;
        }
        if(count($data)){
          $names = DB::select('select nombre from users where id=?', [$id_User]);

          foreach ($names as $user) {
            $username = $user->nombre;
        }
      }
        if(count($data)){
            $users = User::find($id_User);
            $comida =  Diets::find(date("G"));




            return view('index', array('users'=>$users),array('comida'=>$comida));

        } else{
            return view('login');
            echo('Usuario y/o contraseña incorrectos');
        }
    }
}
