<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $table = 'managers';
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'phone',
        'email',
    ];

    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
