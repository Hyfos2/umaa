<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class schoolCalendar extends Model
{
    use SoftDeletes;
    protected $fillable = ['event', 'startDate', 'endDate','description'];
    protected $dates  =['deleted_at'];

}
