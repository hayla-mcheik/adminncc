<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubsidiariesModel extends Model
{
    use HasFactory;
    protected $table='subsidiaries';
    protected $fillable=['image','name','slug','description','services','arabic_name','arabic_slug','arabic_description','arabic_services','website','phone'];
}
