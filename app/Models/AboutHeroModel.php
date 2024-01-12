<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutHeroModel extends Model
{
    use HasFactory;
    protected $table='about_hero';
    protected $fillable=['title','description','arabic_title','arabic_description','image','imageone','imagetwo'];
}
