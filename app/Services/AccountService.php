<?php
/**
 * Created by PhpStorm.
 * User: Hyfos2
 * Date: 8/20/2018
 * Time: 9:46 PM
 */

namespace App\Services;


use App\Account;

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
}