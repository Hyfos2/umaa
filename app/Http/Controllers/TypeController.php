<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userTypes;
use Illuminate\Support\Facades\Validator;
use App\Rules\LevelErrors;


class TypeController extends Controller
{
    public function createType(Request $request)
    {
    	$this->validator($request->all())->validate();
        $userType          = new userTypes();
        $userType->name    = ucfirst($request->name);
        $userType->save();

        return $userType;

    }

    protected function validator(array $data)
    {
        return Validator::make($data, 
            [
                 'name'=>'unique:user_types',new LevelErrors
        ]);
    }
}
