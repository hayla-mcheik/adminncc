<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareersModel extends Model
{
    
    use HasFactory;
    protected $table='careers';
    protected $fillable=['fname','lname','email','linkone','linktwo','linkthree','file'];
}
