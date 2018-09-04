<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $user  =User::find(\Auth::user()->id);
        return view('settings.index',compact('user'));
    }
    public function create()
    {
    
    }
    public function store(Request $request)
    {

        return $request->all();
        $user  = User::where('email',$request->email)->first();

        $name   = $user->name."_".$user->surname;
        $destinationFolder = 'profile_pictures' ."/". $name;

        if (!\File::exists($destinationFolder)) {
            $createDir = \File::makeDirectory($destinationFolder, 0777, true);
        }


        return $request->file('image');

        $fileName = $request->file('image')->getClientOriginalName();
        $fileFullPath = $destinationFolder . '/' . $fileName;

        if (!\File::exists($fileFullPath)) {

            $request->file('image')->move($destinationFolder, $fileName);
            User::find($user->id)->update(['imgUrl'=>$fileName]);
            return redirect()->back()->with('alert','Photo uploaded successfully');

        }
    }
    public function show($id)
    {
    
    }
    public function edit($id)
    {
    }
    public function updatePwd(Request $request)
    {
        $userInformation   = User::where('email',$request->email)->first(['password','id']);
        //return $userInformation->id;
        //maireturn decrypt($userInformation->password);
        User::find($userInformation->id)->update(['password'=>bcrypt($request->password)]);

        //$oldPwd  =$request->old_password;
        return redirect()->back()->with('message','Password has been changed');

    }
    public function update(Request $request, $id)
    {



        
    }
    public function destroy($id)
    {
        
    }
}
