<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestNewsModel extends Model
{
    use HasFactory;
    protected $table='latest_news';
    protected $fillable=['imageone','imagetwo','date','title','description','arabic_title','arabic_description'];
}
