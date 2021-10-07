<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Posts;

class Usuarios extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nome',
        'user_name',
        'email',
        'senha',
        'data_nascimento',
        'telefone',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'foto'
    ];

    /* protected $hidden = [
        'senha',
    ]; */

    public function posts(){
        return $this->hasMany(Posts::class, 'id', 'usuario_id');
    }
}
