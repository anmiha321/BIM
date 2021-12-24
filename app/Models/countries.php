<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countries extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'countries';
    protected $fillable = ['title'];


    public function users()
    {
        return $this->hasMany(User::class, 'country_id');
    }
}
