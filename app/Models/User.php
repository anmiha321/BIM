<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'image',
        'surname',
        'name',
        'patronymic',
        'id_company',
        'city',
        'INN',
        'country',
        'city',
        'phone',
        'email',
        'tariff_id',
        'role',
        'acssess_as',
        'role_work',
        'experience',
        'password',
        'salary',
        'designed_sections',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getNameInitials()
    {
        $words = $this->name;
        $first_char = mb_substr($words, 0, 1);

        return($first_char);
    }

    public function getPatronymicInitials()
    {
        $words = $this->patronymic;
        $first_char = mb_substr($words, 0, 1);

        return($first_char);
    }

    public function getsalaryRight()
    {
        $salary = $this->salary;
        $salary_right = number_format($salary,  0, ',', ' ');

        return($salary_right);
    }

    public function getsDateOfRegistrationRight()
    {
        $date = $this->created_at;
        $date_display = date($date, 'd/m/Y');

        return($date_display);
    }

    public function company()
    {
        return $this->hasOne(Company::class);
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
