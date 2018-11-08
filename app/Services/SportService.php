<?php
/**
 * Created by PhpStorm.
 * User: Hyfos2
 * Date: 8/28/2018
 * Time: 11:53 PM
 */

namespace App\Services;


use App\Sport;

class SportService
{
    public  function newSport($request)
    {
        return Sport::create([
                'name'=>$request->name
            ]);
    }
    public  function  showSports()
    {
        return Sport::orderBy('name','asc')->get();
    }
}