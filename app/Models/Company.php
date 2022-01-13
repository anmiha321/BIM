<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $fillable = [
        'user_id',
        'title',
        'INN',
        'BIK',
        'law_address',
        'mail_address',
        'fact_address',
        'KPP',
        'OKPO',
        'tax_system',
        'OGPH',
        'email',
        'bank_name',
        'P/C',
        'K/C',
        'bank_BIK',
        'manager_id',
    ];


    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    public function phones()
    {
        return $this->belongsToMany(Phone::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
