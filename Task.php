<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_creacio',
        'data_finalitzacio',
        'nom',
        'descripcio',
        'responsable'
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
