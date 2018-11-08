<?php

namespace App\Http\Controllers;

use App\Account;
use App\activityLog;
use App\User;
use App\Student;
use App\StudentAccount;
use App\UserDeviceInformation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Services\AccountService;


class AccountsController extends Controller
{
    protected $account;
    public  function __construct(AccountService $accountService)
    {
        $this->account  =$accountService;
    }

    public function index()
    {
       $credit  = \DB::table('accounts')
            ->select(\DB::raw('SUM(credit) as credit_total'))
            ->get();

       $debit  = \DB::table('accounts')
            ->select(\DB::raw('SUM(debit) as debt_total'))
            ->get();

      $totalCredit  =$credit[0]->credit_total;
      $totalDebit  =$debit[0]->debt_total;
        return view('newAdmin.accounts.index',compact('totalCredit','totalDebit'));
    }

    public function create()
    {
    }
    public function viewBalanceStatement()
    {
        $pageName  ='Balance-Statement';
        $studentId   =Student::where('userId',\Auth::user()->id)->first()->id;
        $studentAccount  =Account::where('studentId',$studentId)->get();
        $balance      =StudentAccount::where('studentId',$studentId)->latest()->first();
        return view('newAdmin.accounts.balanceStatement',compact('pageName','studentAccount','balance'));
    }
    public function payFees()
    {
        $pageName   ='Pay-Fees';
       return view('newAdmin.accounts.payFees',compact('pageName'));
    }
    public function store(Request $request)
    {
        //return $request->all();
        $this->account->payFees($request);
        $this->account->calculateBalance();
        return redirect()->back()->with('alert','the transaction was successful');
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
    public function communicationDepartment()
    {

    }
    public function accountsDepartment()
    {
        $usersDetails  =UserDeviceInformation::with('user')->get();


        $accountants  =[];
        foreach($usersDetails  as $item)
        {
            if($item->user->userTypeId ==4)
            {
                array_push($accountants,$item);
            }
        }
        $users  =array_unique($accountants);
        return view('newAdmin.accounts.adminAccountSide',compact('users'));
    }
    public function accountantProfile($id)
    {

        $userDetails = User::where('id',$id)->first();
        $userActivity  =activityLog::where('userId',$id)->get();
        //return $userActivity;

        $latestActivities =[];
        $oldActivities =[];
        foreach($userActivity as $value)
        {
            if($value->created_at !==Carbon::today())
            {
                array_push($oldActivities,$value);
            }
            else{
                array_push($latestActivities,$value);
            }
        }
        return view('newAdmin.accounts.accountantProfile',compact('id','userDetails','latestActivities','oldActivities'));
    }

     public function dashboard()
    {
             return view('accounting.dashboard');
    }
     public function studentAccount()
    {
        return view('accounting.studentAccount');

    }
     public function activatedStudents()
    {
         return view('accounting.activatedStudent');

    } 
    public function deactivatedStudents()
    {
             return view('accounting.deactivated');
    }



}
