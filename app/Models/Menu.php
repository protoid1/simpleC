<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mst_menus';

    protected $fillable = [
        'menu_name',
        'menu_price',
        'menu_image',
        'menu_stock',
        'menu_status',
        'created_id',
        'updated_id',
    ];

    protected $dates = ['deleted_at'];
}
