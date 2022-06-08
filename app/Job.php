<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
         'job_title','company_name','c_name', 'employment_status',
        'location', 'vacancy', 'educational_experiance', 'experience_requirements','additional_requirements',
        'salary','published_on', 'application_deadline', 
        
    ];
}
