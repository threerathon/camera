<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete
class Employee extends Model
{
    use HasFactory;
    use Notifiable,
        SoftDeletes;// add soft delete
    protected $table = 'employee';
    protected $primaryKey = 'id';
    protected $fillable = ['id','code_employee','img_cover','name','title','sex','cccd','phone_number','birthday','	address','code_dm','code_timesheet','code_bonus','code_salary','updated_at','created_at','deleted_at'];

}
