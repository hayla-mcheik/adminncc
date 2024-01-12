<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutValues extends Model
{
    use HasFactory;
    protected $table='about_values';
    protected $fillable=['titleone','descone','titletwo','desctwo','titlethree','descthree','titlefour','descfour',
'arabic_titleone','arabic_titletwo','arabic_titlethree','arabic_titlefour','arabic_descone','arabic_desctwo','arabic_descthree','arabic_descfour'
];
}
