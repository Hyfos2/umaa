<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentSport;

class StudentSportsController extends Controller
{
   
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        // validate for duplicate records.

        $stdSport               = new StudentSport();
        $stdSport->studentId    = $request->studentId;
        $stdSport->sportId      = $request->sportId;
        $stdSport->save();

       return $stdSport;
        
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
