<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Database\QueryException;

class RegistrasiController extends Controller
{
    public function index(){
        return view('registrasi');
    }

    public function store(){
        try{
         $user = new User;
         $user->id ='1';
         $user->name = 'aliem';
         $user->email = 'aliemtakarai@gmail.com';
         $user->password = bcrypt('takarai48');
         $user->phone = '08882345';
         $user->gender = 'laki';
         $user->birthdate = '1992-04-14';   
         $user->nationality = 'jepang';
         $user->save();
         return redirect('/berhasil');
        } catch(QueryException $e){
            $error = $e->errorInfo[1];
            if($error == '1062'){
                return response('Duplicate Entry', 403)
                  ->header('Content-Type', 'text/plain');
            }
            elseif($error == '1064'){
                return response('Not Null Exception', 422)
                  ->header('Content-Type', 'text/plain');
            }
        }
    }
}
