<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkPgaRoma extends Model
{
    use HasFactory;

    protected $table = 'link_pga_roma';
    protected $guarded = ['id'];
}
