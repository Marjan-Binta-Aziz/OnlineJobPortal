<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable = [
        'id', 'company_name','company_email','company_phoneNo','company_adderss','company_status',
        
    ];
}
