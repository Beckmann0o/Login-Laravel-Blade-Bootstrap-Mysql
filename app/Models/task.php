<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre','user_id'
    ];

    //relacion con el estado
    public function estado()
    {
        return $this->belongsTo(EstadoTask::class, 'estado_id');
    }

    //relacion con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
