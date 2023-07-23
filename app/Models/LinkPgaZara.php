<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkPgaZara extends Model
{
    use HasFactory;

    protected $table = 'link_pga_zara';
    protected $guarded = ['id'];
}
