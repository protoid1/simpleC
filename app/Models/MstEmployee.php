<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel as FilamentPanel;
use Filament\Tables\Columns\Layout\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MstEmployee extends \Illuminate\Foundation\Auth\User implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\MstEmployeeFactory> */
    use HasFactory;

    public $incrementing = true;
    protected $primaryKey= 'employee_id';
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


    public static function booted(){
        self::creating(function ($model){
            $model->employee_id = "EMPL-000000".($model::count() + 1);
        });
    }
    
    public function canAccessPanel(FilamentPanel $panel): bool
    {
        // if ($panel->getId() === 'admin') {
        //     return str_ends_with($this->email, '@yourdomain.com') && $this->hasVerifiedEmail();
        // }
 
        return true;
    }

}


