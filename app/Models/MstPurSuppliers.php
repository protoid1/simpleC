<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Nonstandard\Uuid;
use Illuminate\Support\Str;

class MstPurSuppliers extends Model
{
    protected $table ='mst_pur_suppliers';
    protected $primaryKey = 'supplier_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'supplier_id',
        'supplier_name',
       'contact_name',
       'contact_email',
       'contact_phone'
    ];

    public static function booted()
    {   
       
        self::creating(function ($model) {
            $uuid = (string) Uuid::uuid4();
            $model->category_id = "SUP-" . Str::padRight($uuid,12,'-') ;
        });
    }
}
