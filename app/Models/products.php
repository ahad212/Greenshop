<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;


    protected $table = 'products';

    protected $fillable = [
        'name',
        'category',
        'pdescription',
        'pimage',
        'price',
        'featured',
        'pstatus',
        'pimei',
        'pwarranty',
        'warrantytime',
    ];
}
