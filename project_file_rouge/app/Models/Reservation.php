<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Reservation extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'number_de_reservation',
        'Classes',
        'date',
        'parcour_id',
        'user_id',
        'price'
    ];
    public function Parcours()
    {
        return $this->belongsTo(Parcours::class, 'parcour_id');
    }



}
