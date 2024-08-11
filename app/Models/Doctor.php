<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
  public function get_department_name(){
    return $this->belongsto(Department::class,'department_id','id');
  }
}
