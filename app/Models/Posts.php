<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuarios;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'legenda',
        'post',
    ];

    public function usuario(){
        return $this->belongsTo(Usuarios::class, 'usuario_id', 'id');
    }
}
