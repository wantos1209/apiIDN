<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkPgaArta extends Model
{
    use HasFactory;

    protected $table = 'link_pga_arta';
    protected $guarded = ['id'];
}
