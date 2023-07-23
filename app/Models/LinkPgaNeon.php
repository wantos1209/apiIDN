<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkPgaNeon extends Model
{
    use HasFactory;

    protected $table = 'link_pga_neon';
    protected $guarded = ['id'];
}
