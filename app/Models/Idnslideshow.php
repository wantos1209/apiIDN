<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idnslideshow extends Model
{
    use HasFactory;

    protected $table = 'idn_sliders_mobile';
    protected $guarded = ['id'];
}
