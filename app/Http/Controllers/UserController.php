<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function __construct()
    {
        //
    }

    public function createUser(Request $req){
        
        $dados_user = [
            'name'=> $req->nome,
            'email' => $req->email,
            'ativo' => 1,
            'password' => 'ddd'
        ];
        $user = User::create($dados_user);
        return response()->json($user);
   
    }
    
}
