<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brandModel extends Model
{
    use HasFactory;

    protected $table = 'brands';
    
    protected $fillable = [
        'cname',
        'cdescription',
        'cfeatured',
        'bimage',
        'status',
        'parent',
    ];
}
