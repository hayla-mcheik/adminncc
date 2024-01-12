<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    protected $table='contact';
    protected $fillable=['tel_head_uae','fax_head_uae','tel_ncc_uae','fax_ncc_uae','tel_dubai_uae','fax_dubai_uae','tel_head_kwt','fax_head_kwt',
'tel_ncc_kwt','fax_ncc_kwt','tel_dubai_kwt','fax_dubai_kwt'];
}
