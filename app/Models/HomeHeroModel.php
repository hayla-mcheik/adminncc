<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHeroModel extends Model
{
    use HasFactory;
    protected $table='home_hero';
    protected $fillable=['image','title','description','arabic_title','arabic_description','imageone','imagetwo','imagethree','imagefour','imagefive'];
}
