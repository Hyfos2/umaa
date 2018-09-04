<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sport;
use Illuminate\Support\Facades\Validator;
use App\Rules\LevelErrors;

class SportController extends Controller
{
    public function index()
    {
        $data   = Sport::orderBy('name','asc')->get();
        return view('sports.new' ,compact('data'));
    }
    public function create()
    {
        
    }
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $sport          = new Sport();
        $sport->name    = ucfirst($request->name);
        $sport->save();
       return redirect()->back()->with('alert','new sport was added');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, 
        [
                 'name'=>'unique:sports',new LevelErrors
        ]);
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
