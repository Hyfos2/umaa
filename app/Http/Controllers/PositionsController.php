<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Rules\LevelErrors;
use App\Position;

class PositionsController extends Controller
{
    
    public function index()
    {
        
    }

    
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $position          = new Position();
        $position->name    = ucfirst($request->name);
        $position->save();

        return $position;
        
    }

    protected function validator(array $data)
    {
        return Validator::make($data, 
            [
                 'name'=>'unique:positions',new LevelErrors
        ]);
    }
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
