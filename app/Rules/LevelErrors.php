<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class LevelErrors implements Rule
{
    
    public function __construct()
    {
        
    }

    public function passes($attribute, $value)
    {
        
    }

    
    public function message()
    {
        return 'The name exist in the database.';
    }
}
