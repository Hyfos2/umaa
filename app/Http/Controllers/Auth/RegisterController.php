<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    use RegistersUsers;

//    public function __construct()
//    {
//        $this->middleware('guest');
//    }


    protected function validator(array $data)
    {
        return Validator::make($data,
            [
            'name' => 'string|max:255',
            'surname'=>'string',
            'gender'=>'string',
            'email' => 'required|string|email|max:255|unique:users'
        ]);
    }
    protected function create(array $data)
    {
        $pass  = $this->generateRandomString();
        return User::create([
            'name' => ucfirst($data['name']),
            'email' => $data['email'],
            'surname'=>ucfirst($data['surname']),
            'userTypeId'=>$data['userTypeId'],
            'gender'=>ucfirst($data['gender']),
            'userName'=>$pass,
            'imgUrl'=>'image/path',
            'password' =>bcrypt($pass),
        ]);
    }

    protected function createParentUser(array $data)
    {
        $pass  = $this->generateRandomString();

        return User::create([
            'name' => ucfirst($data['parentname']),
            'email' => $data['parentemail'],
            'surname'=>ucfirst($data['surname']),
            'userTypeId'=>$data['userTypeId'],
            'gender'=>ucfirst($data['gender']),
            'userName'=>$pass,
            'imgUrl'=>'image/path',
            'password' =>bcrypt($pass),
        ]);
    }
    public function generateRandomString()
    {
            $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
            $pass = array();
            $alphaLength = strlen($alphabet) - 1;
            for ($i = 0; $i < 5; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass);
    }
}
