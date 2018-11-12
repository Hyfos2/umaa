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

    protected function paymentMethodUsed($str)
    {
        return Account::where('paymentMethod',$str)->get();
    }

    protected function accountsInfo()
    {
        return Account::all();
    } 

    protected function arrears()
    {
        $total  =0;
        foreach($this->accountsInfo() as $item)
        {
            $total+=$item->balance;
        }
        return $total;
    } 

    protected function totalRevenuePerMethod($str)
    {
        $totalRev  =0;
         foreach($this->paymentMethodUsed($str) as $item)
                {
                    $totalRev+=$item->credit;
                }
                return $totalRev;
    }

     public function dashboard()
    {
          $ecocash =$this->totalRevenuePerMethod('Ecocash');
          $telecash =$this->totalRevenuePerMethod('Telecash');
          $bankTransfer =$this->totalRevenuePerMethod('Bank');
          $cash =$this->totalRevenuePerMethod('Cash');
          $revenue   =$ecocash+$telecash+$bankTransfer+$cash;
          $arrears  =$this->arrears();
          $total  =$arrears+$revenue;
        return view('accounting.dashboard',compact('ecocash','telecash','bankTransfer','cash','revenue','arrears','total'));
    }
     public function studentAccount($id)
    {

            $transactionHistory   =Account::where('studentId',$id)->get();
        return view('accounting.studentAccount',compact('transactionHistory','id'));
    }
     public function activatedStudents()
    {
               
        $form1   =$this->activatedStudentsPerLevel(1);
        $form2   =$this->activatedStudentsPerLevel(2);
        $form3   =$this->activatedStudentsPerLevel(3);
        $form4   =$this->activatedStudentsPerLevel(4);
        $form5   =$this->activatedStudentsPerLevel(5);
        $form6   =$this->activatedStudentsPerLevel(6);
         return view('accounting.activatedStudent', compact('form1','form2','form3','form4','form5','form6'));
    } 

    public function activatedStudentsPerLevel($level)
    {
        $levelArray  =[];
        foreach($this->allActivatedStudents() as $item)
        {
            if($item->levelId ===$level)
            {
                array_push($levelArray,$item);
            }
        }
        return $levelArray;

    } 

    public function deactivatedStudentsPerLevel($level)
    {
        $levelArray  =[];
        foreach($this->allDeactivatedStudents() as $item)
        {
            if($item->levelId ===$level)
            {
                array_push($levelArray,$item);
            }
        }
        return $levelArray;

    }

    public function allActivatedStudents()
    {
         return Student::with('user')->where('activated',2)->get();
    }
    public function allDeactivatedStudents()
    {
         return Student::with('user')->where('activated',1)->get();
    }
    public function deactivatedStudents()
    {
                
        $form1   =$this->deactivatedStudentsPerLevel(1);
        $form2   =$this->deactivatedStudentsPerLevel(2);
        $form3   =$this->deactivatedStudentsPerLevel(3);
        $form4   =$this->deactivatedStudentsPerLevel(4);
        $form5   =$this->deactivatedStudentsPerLevel(5);
        $form6   =$this->deactivatedStudentsPerLevel(6);

         return view('accounting.deactivated', compact('form1','form2','form3','form4','form5','form6'));
    }

    public function recordTransaction(Request $request)
    {
        return $request->all();

    }



}
