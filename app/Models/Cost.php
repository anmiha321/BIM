<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cost extends Model
{
    use HasFactory;
    protected $table = 'costs';
    protected $fillable = [
        'title',
        'sum_of_cost',
        'type_of_cost',
    ];




    public function getsumRight()
    {
        $cost = $this->sum_of_cost;
        $cost_right = number_format($cost,  0, ',', ' ');

        return($cost_right);
    }

    public function getsumRightfull_mouth()
    {
        $id = Auth::user()->getAuthIdentifier();
        $data = User::find($id)->company;
        $every_mouth_costs =  Company::find($data->id)->costs->where('type_of_cost', 0);
        $cost = $every_mouth_costs->sum('sum_of_cost');
        $cost_right_full = number_format($cost,  0, ',', ' ');

        return($cost_right_full);
    }

    public function getsumRightfull_ones()
    {
        $id = Auth::user()->getAuthIdentifier();
        $data = User::find($id)->company;
        $every_mouth_costs =  Company::find($data->id)->costs->where('type_of_cost', 1);
        $cost = $every_mouth_costs->sum('sum_of_cost');
        $cost_right_full = number_format($cost,  0, ',', ' ');

        return($cost_right_full);
    }


    public function getsumRightfullAll()
    {
        $id = Auth::user()->getAuthIdentifier();
        $data = User::find($id)->company;
        $every_mouth_costs =  Company::find($data->id)->costs;
        $cost = $every_mouth_costs->sum('sum_of_cost');
        $cost_right_full = number_format($cost,  0, ',', ' ');

        return($cost_right_full);
    }

    public function company()
    {
        return $this->belongsToMany(Company::class);
    }
}
