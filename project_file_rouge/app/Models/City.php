<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];


    public function Parcours_depart()
    {
        return $this->hasMany(Parcours::class, 'depart_id');
    }

    public function Parcours_arrive()
    {
        return $this->hasMany(Parcours::class, 'arrive_id');
    }

    public function Promos_depart()
    {
        return $this->hasMany(Promos::class, 'depart_id');
    }

    public function Promos_arrive()
    {
        return $this->hasMany(Promos::class, 'arrive_id');
    }
}
