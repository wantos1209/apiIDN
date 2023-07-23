<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerModal extends Model
{
    use HasFactory;

    protected $table = 'banner_modal';
    protected $guarded = ['id'];
}
