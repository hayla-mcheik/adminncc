<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicesdetail extends Model
{
    use HasFactory;
    protected $table='services_detail';
    protected $fillable=['service_id','title','description','services'];
}
