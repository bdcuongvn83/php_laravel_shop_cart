<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employees';//TODO nếu muôn đổi tên bảng thì đổi ở đây
    protected $fillable = ['name', 'email'];
}
