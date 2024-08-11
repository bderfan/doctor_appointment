<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    
      public function get_doctor_name(){
        return $this->belongsto(Doctor::class,'doctor_id','id');
      }
}
