<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkPgaJeep extends Model
{
    use HasFactory;

    protected $table = 'link_pga_jeep';
    protected $guarded = ['id'];
}
