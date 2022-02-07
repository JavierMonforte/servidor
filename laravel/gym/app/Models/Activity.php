<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'descripcion',
        'duracion',
        'participantes'
    ];
    public function sesions() {
        return $this->hasMany(Sesion::class);
}
}
