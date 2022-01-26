<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;
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

    public function documents()
    {
        return $this->belongsToMany(Document::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function workers()
    {
        return $this->belongsToMany(User::class);
    }
    public function workers_archive()
    {
        return $this->belongsToMany(User::class)->onlyTrashed();
    }

    public function costs()
    {
        return $this->belongsToMany(Cost::class);
    }
}
