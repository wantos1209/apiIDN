<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkPgaNero extends Model
{
    use HasFactory;

    protected $table = 'link_pga_nero';
    protected $guarded = ['id'];
}
