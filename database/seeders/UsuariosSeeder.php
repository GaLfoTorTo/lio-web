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
            'foto' => '/img/usersFoto/user-default.png',
        ]);
        Usuarios::create([
            'nome' => 'Carla Freitas',
            'user_name' => '@Carlina_fre',
            'email' => 'carla_freitas@email.com',
            'senha' => bcrypt('carla123'),
            'data_nascimento' => '05/06/1997',
            'telefone' => '(61) 98728-9922',
            'cep' => '76827-612',
            'logradouro' => 'quadra 4',
            'numero' => '56',
            'complemento' => '',
            'bairro' => 'Cristovan Ferreira',
            'cidade' => 'Matriz',
            'uf' => 'SA',
            'foto' => '/img/perfil_std/carla_freitas.jpg',
        ]);
        Usuarios::create([
            'nome' => 'Beatriz Martins',
            'user_name' => '@Bia_Martins',
            'email' => 'bia_martins@email.com',
            'senha' => bcrypt('bia123'),
            'data_nascimento' => '12/09/1998',
            'telefone' => '(61) 99718-9112',
            'cep' => '67097-122',
            'logradouro' => 'Rua 2, quadra 5',
            'numero' => '12',
            'complemento' => '',
            'bairro' => 'São Bartolomeu',
            'cidade' => 'Viena',
            'uf' => 'ES',
            'foto' => '/img/perfil_std/bia_martins.jpg',
        ]);
        Usuarios::create([
            'nome' => 'Marlon Coimbra',
            'user_name' => '@Marlon_coimbra',
            'email' => 'marlom_coimbra@email.com',
            'senha' => bcrypt('marlom123'),
            'data_nascimento' => '25/03/1992',
            'telefone' => '(61) 99273-8739',
            'cep' => '71147-187',
            'logradouro' => 'Rua 14',
            'numero' => '56',
            'complemento' => '',
            'bairro' => 'São Vicente',
            'cidade' => 'Barra Nova',
            'uf' => 'MT',
            'foto' => '/img/perfil_std/marlon_coimbra.jpg',
        ]);
        Usuarios::create([
            'nome' => 'Wagner Filho',
            'user_name' => '@Wagner_filho',
            'email' => 'Wagner_filho@email.com',
            'senha' => bcrypt('wagner123'),
            'data_nascimento' => '17/12/1980',
            'telefone' => '(61) 99771-9028',
            'cep' => '98305-387',
            'logradouro' => 'Rua 08',
            'numero' => '5',
            'complemento' => 'Apt 2',
            'bairro' => 'Curicica',
            'cidade' => 'Barra Funda',
            'uf' => 'RJ',
            'foto' => '/img/perfil_std/wagner_filho.jpg',
        ]);
    }
}
