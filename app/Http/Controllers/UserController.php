<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserController;
use App\Transformers\UserTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use App\User;
use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');


use DB;


class UserController extends Controller
{
use Helpers;
    
function  index(){
        
$users = DB::table('users')->get();

foreach ($users as $user)
{
    var_dump($user->name);
}
 
    }
 
public function getUsers()
    {
     
        $users = User::all();

        return $this->response->collection($users, new UserTransformer);

    }
    
}
