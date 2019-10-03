<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AccessRequest;
use App\User;

class UserController extends Controller
{
    public function register(AccessRequest $req)
    {
        //validate the user here
        $validate = $req->validated();
        if(!$validate){
            return response()->json(['status'=>401, 'message'=>'Error']);
        }    

        // save users after validation
        try {
            $user = new User();
            $user->firstname = $req->input('firstname');
            $user->lastname  = $req->input('lastname');
            $user->email = $req->input('email');
            $user->password = bcrypt($req->input('password'));
            if($user->save()){
                return response()->json(['status'=>200, 'message'=>'Success']);
            }

        } catch (Exception $e){
            return $e->getMessage();
        }
     }
}
