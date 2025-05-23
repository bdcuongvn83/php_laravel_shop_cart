<?php

namespace App\Models;

// use Illuminate\Auth\Events\Authenticated;
// use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

//class Employee extends Model
class Employee extends Authenticatable
{
      use Notifiable;
    //
    protected $table = 'employees';//TODO nếu muôn đổi tên bảng thì đổi ở đây
    protected $fillable = ['name', 'email', 'password'];
   // protected $hidden = ['password'];
       protected $hidden = ['password', 'remember_token'];
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
