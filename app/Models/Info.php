<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Info extends Model
{
    use HasFactory;
    protected $table = 'info';
    protected $primaryKey = 'ids';
    protected $fillable = ['ids','action_type','aliasID','data_type','date','detected_image_url','deviceID','deviceName','hash','id','keycode','personID','personName','personTitle','personType','placeID','placeName','mask','time','updated_at','created_at'];

}
