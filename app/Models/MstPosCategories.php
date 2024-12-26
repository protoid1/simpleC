<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MstPosCategories extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'category_id';

    protected $table ='mst_pos_categories';
    protected $fillable = [
        'category_id',
        'category_name',
       'category_name',
       'category_description',
    ];

}
