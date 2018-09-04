<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schoolFees;

class SchoolFeesController extends Controller
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
        $total  =$this->totalAmount($request);
        schoolFees::create([
            'fees'=>$request->fees,
            'levy'=>$request->levy,
            'busFee'=>$request->busFee,
            'accommodation'=>$request->accommodation,
            'modeOfEntry'=>$request->mode,
            'sportFee'=>$request->sportFee,
            'total'=>$total
        ]);
        return "fees saved";
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
        $total  =$this->totalAmount($request);

        schoolFees::find($id)->update([
            'fees'=>$request->fees,
            'levy'=>$request->levy,
            'busFee'=>$request->busFee,
            'accommodation'=>$request->accommodation,
            'modeOfEntry'=>$request->mode,
            'sportFee'=>$request->sportFee,
            'total'=>$total
        ]);
        return "fees update";
    }
    public function destroy($id)
    {
        //
    }
    public function totalAmount(Request $request)
    {
        return $request->fees+$request->levy+$request->busFee+$request->accommodation+$request->sportFee;
    }
    public function totalFeesPaid()
    {

    } public function studentInArrears()
    {

    }
}
