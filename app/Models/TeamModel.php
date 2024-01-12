<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamModel extends Model
{
    use HasFactory;
    protected $table='team_about';
    protected $fillable=['image','name','title','description','arabic_name','arabic_title','arabic_description'];
}
