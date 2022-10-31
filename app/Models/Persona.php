<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public function conocimientos(){
        return $this->hasMany(Conocimiento::class);
    }
    public function trabajos(){
        return $this->hasMany(Trabajo::class);
    }
    public function educacions(){
        return $this->hasMany(Educacion::class);
    }
    public function proyectos(){
        return $this->hasMany(Proyecto::class);
    }
}
