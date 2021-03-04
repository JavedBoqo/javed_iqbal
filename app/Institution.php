<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable = [
        'ins_name','ins_phone_number','ins_address','is_active'
     ];
}
