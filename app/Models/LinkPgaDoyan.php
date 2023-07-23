<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkPgaDoyan extends Model
{
    use HasFactory;

    protected $table = 'link_pga_doyan';
    protected $guarded = ['id'];
}
