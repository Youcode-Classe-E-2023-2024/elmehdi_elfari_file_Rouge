<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parcours extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'depart_id',
        'arrive_id',
        'longeur_Parcour',
        'Prix_Parcour',
        'nbr_place',
        'duree',
        'time_depart',
        'arrive_time',
        'arrive_date',
        'depart_date'
    ];

    protected $dates = [
        'time_depart',
        'arrive_time',
    ];

    public function City_depart()
    {
        return $this->belongsTo(City::class, 'depart_id');
    }

    public function City_arrive()
    {
        return $this->belongsTo(City::class, 'arrive_id');
    }
}
