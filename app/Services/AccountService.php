<?php
/**
 * Created by PhpStorm.
 * User: Hyfos2
 * Date: 8/20/2018
 * Time: 9:46 PM
 */

namespace App\Services;


use App\Account;
use App\Student;
use App\StudentAccount;

class AccountService
{
    public function totalRevenueFromFees()
    {
        return \DB::table('accounts')
               ->select(\DB::raw('SUM(debit) as total'))
               ->get();
    }
    public function studentsInArrears()
    {
        return \DB::table('accounts')
            ->select(\DB::raw('SUM(credit) as total'))
            ->get();
    }
    public function payFees($request)
    {

        $studentId   =Student::where('userId', \Auth::user()->id)->first()->id;

            return Account::create([
                'studentId'=>$studentId,
                'reference'=>'Inv'.$this->generateRandomString(),
                'description'=>$request->description,
                'term'=>$request->term,
                'credit'=>$request->amount
            ]);

    }
    public function calculateBalance()
    {
        $studentId   =Student::where('userId', \Auth::user()->id)->first()->id;
        $totalCredit  = \DB::table('accounts')
            ->select(\DB::raw('SUM(credit) as credit_total'))
            ->where('studentId',$studentId)
            ->get();

        $totalDebit  = \DB::table('accounts')
            ->select(\DB::raw('SUM(debit) as debit_total'))
            ->where('studentId',$studentId)
            ->get();

        return StudentAccount::create([
            'studentId'=>$studentId,
            'balance'=>$totalCredit[0]->credit_total - $totalDebit[0]->debit_total
        ]);
        //here('userId', \Auth::user()->id)->first()->id;


    }
    public function feesForNewStudent($student)
    {
        return Account::create([
            'studentId'=>$student->id,
            'reference'=>'Inv-school-fees',
            'description'=>'school fees',
            'term'=>'enrolled term',
            'debit'=>'500.00'
        ]);
    }
    public function generateRandomString()
    {
        $alphabet = "0123456789";
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 9; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }
}