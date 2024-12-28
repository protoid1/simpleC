<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Nonstandard\Uuid;
use Illuminate\Support\Str;

class MstPosCategories extends Model
{
    use HasUuids;
    public $incrementing = false;
    protected $primaryKey = 'category_id';

    protected $table ='mst_pos_categories';
    protected $fillable = [
        'category_id',
        'category_name',
       'category_name',
       'category_description',
    ];

    public static function booted()
    {   
       
        self::creating(function ($model) {
            $uuid = (string) Uuid::uuid4();
            $model->category_id = "CAT-" . Str::padRight($uuid,12,'-') ;
        });
    }
}
