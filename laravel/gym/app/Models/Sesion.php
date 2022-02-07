<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    use HasFactory;
    protected $fillable = [
        'inicio',
        'fin',
        'activity_id'
    ];
    public function activity()
    { // el nombre es significativo
        return $this->belongsTo(Activity::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function addUser(User $user)
    {

        $this->users()->attach($user);
    }
}
