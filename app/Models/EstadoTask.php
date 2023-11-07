<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoTask extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];
    

    //relacion con las tareas
    public function task()
    {
        return $this->hasMany(Task::class, 'estado_id');
    }
}
