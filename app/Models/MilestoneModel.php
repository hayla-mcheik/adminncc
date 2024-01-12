<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MilestoneModel extends Model
{
    use HasFactory;
    protected $table='milestone';
    protected $fillable=['title','date','description','arabic_title','arabic_description'];
}
