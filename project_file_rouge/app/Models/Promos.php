<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promos extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'parcour_id',
        'Prix_Parcour',
        'discount',
    ];


    public function Parcours()
    {
        return $this->belongsTo(Parcours::class, 'parcour_id');
    }
}
