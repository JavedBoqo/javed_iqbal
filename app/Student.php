<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'level_id','std_name','std_father_name','std_contact_number','is_active'
     ];
}
