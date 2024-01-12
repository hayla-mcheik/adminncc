<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhoWeAreModel extends Model
{
    use HasFactory;
    protected $table='who_we_are';
    protected $fillable=['title','description','image','arabic_title','arabic_description'];
}
