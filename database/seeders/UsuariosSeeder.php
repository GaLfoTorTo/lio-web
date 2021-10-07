<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuarios;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuarios::create([
            'nome' => 'Usuario Default',
            'user_name' => '@usuarioDefault',
            'email' => 'usuarioDefault@email.com',
            'senha' => bcrypt('usuario123'),
            'data_nascimento' => '01/01/2021',
            'telefone' => '(61) 99999-9999',
            'cep' => '12345-678',
            'logradouro' => 'Rua Jardine',
            'numero' => '1',
            'complemento' => '',
            'bairro' => 'São Vicente',
            'cidade' => 'Brasília',
            'uf' => 'DF',
            'foto' => '/uploads/usersFoto/user-default.png',
        ]);
    }
}
