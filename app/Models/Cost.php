<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;
    protected $table = 'costs';
    protected $fillable = [
        'title',
        'sum_of_cost',
        'type_of_cost',
    ];







    public function company()
    {
        return $this->belongsToMany(Company::class);
    }
}
