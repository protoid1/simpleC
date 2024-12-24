<?php

namespace App\Models;


use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class MstEmployee extends \Illuminate\Foundation\Auth\User implements FilamentUser,HasName 
{
    /** @use HasFactory<\Database\Factories\MstEmployeeFactory> */
    use HasFactory;

    public $incrementing = true;
    protected $primaryKey = 'employee_id';

    protected $table ='mst_employees';
    protected $fillable = [
        'employee_id',
        'employee_name',
        'employee_email',
        'employee_password',
        'employee_phone',
        'employee_role',
        'employee_unit',
        'email_verified_at',
        'employee_remember_token'
    ];

    
    public static function booted()
    {   
       
        self::creating(function ($model) {
            $model->employee_id = "EMPL-000000" . ($model::count() + 1);
        });
    }

    // Override kolom password
    public function getAuthPassword()
    {
        return $this->employee_password;
    }

    
    // Define custom username column
    public function getAuthIdentifierName()
    {
        return 'employee_email';
    }



    // Method dari FilamentUser untuk akses panel
    public function canAccessPanel(Panel $panel): bool
    {
        // $this->getAttributeValue('employee_name');
        return true; // Atur logika akses panel di sini
    }

    public function getFilamentName(): string {
        return $this->employee_name;
    }

}


