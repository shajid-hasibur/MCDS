<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_farmer extends Model
{
    use HasFactory;
    public $fillable = ['serial_no','id_no','name','locality','farmers_account','farmers_phone'];
}
