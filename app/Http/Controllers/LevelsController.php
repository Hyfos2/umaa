<?php

namespace App\Http\Controllers;

use App\PrimarySubLevel;
use App\subLevel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Rules\LevelErrors;

class LevelsController extends Controller
{
    public function getFormStudents($id)
   {
   	   return $id;
   }
    public function createLevel(Request $request)
   {


       //return $request->all();
   		$checkErrors  = $this->validator($request->all())->validate();

   		if($checkErrors)
        {
            return $checkErrors->withErrors();
        }

	   	$level    		= new subLevel();
	   	$level->name    = ucfirst($request->name);
	   	$level->levelId =$request->level;
	   	$level->save();


	  return back();
	   	return view('newAdmin.levels',compact('data'));

   }
    protected function validator(array $data)
    {
        return Validator::make($data, 
            [
          		 'name'=>'unique:sub_levels',new LevelErrors
        ]);
    }
    public function subLevels($id)
    {
        return SubLevel::where('levelId',$id)->get(['name','id']);
    }
    public function createPrimarySubLevels(Request $request)
    {
        return  PrimarySubLevel::create([
                           'name'=>$request->name,
                        'primaryLevelId'=>$request->level]);
    }
    public function editPrimarySubLevel(Request $request, $id)
    {
        $data  =PrimarySubLevel::find($id)->update(['name'=>$request->name]);
        return PrimarySubLevel::all();
    }
    public function showPrimaryLevels()
    {
        $data  =PrimarySubLevel::with('primarylevel')->orderBy('name','asc')->get();
        return  \Response::json($data);
    }
}
