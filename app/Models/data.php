<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;
    protected $fillable = ['id','name' , 'gender' , 'phone' ,'father_name' ,'mother_name' ,'birthday'];
  
}
