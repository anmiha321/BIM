<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'cities';
    protected $fillable = ['title'];



    public function users()
    {
        return $this->hasMany(User::class, 'city_id');
    }
}
