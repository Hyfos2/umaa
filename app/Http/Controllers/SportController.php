<?php

namespace App\Http\Controllers;

use App\Services\SportService;
use Illuminate\Http\Request;
use App\Sport;
use Illuminate\Support\Facades\Validator;

class SportController extends Controller
{
    protected $sports;
    public function __construct(SportService $sportService)
    {
        $this->sports  =$sportService;
    }
    public function index()
    {
        $data   = Sport::orderBy('name','asc')->get();
        return view('newAdmin.sports.new' ,compact('data'));
    }
    public function create()
    {
        
    }
    public function store(Request $request)
    {
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
    public function allSports()
    {
        return $this->sports->showSports();
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
