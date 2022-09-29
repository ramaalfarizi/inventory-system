<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomingItem extends Model
{
    use HasFactory;
    // memastikan sesuai dg db
    // protected $table = 'warga';
    protected $guarded = [];
}
