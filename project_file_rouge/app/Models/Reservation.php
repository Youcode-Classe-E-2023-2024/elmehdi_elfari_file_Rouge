<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'number_de_reservation',
        'Classes',
        'date',
        'parcour_id',
        'user_id'
    ];
    public function Parcours()
    {
        return $this->belongsTo(Parcours::class, 'parcour_id');
    }



}
