<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $posts = [
            [
                'foto' => '/img/posts_std/festa.jpg',
                'legenda' => 'Essa Festa de quinta-feira foi um Arraso!'
            ],
            [
                'foto' => '/img/posts_std/carnaval.jpg',
                'legenda' => 'Oooh saudades do carnaval 😪'
            ],
            [
                'foto' => '/img/posts_std/games.jpg',
                'legenda' => 'Dia de play! Qual seu game preferido?'
            ],
            [
                'foto' => '/img/posts_std/cozinhar.jpg',
                'legenda' => 'Meu hobby favorito... Fazer comidas gostosas!'
            ],
            [
                'foto' => '/img/posts_std/paisagem.jpg',
                'legenda' => 'Gente, meu sonho viajar pra um lugar desse 😍'
            ],
            [
                'foto' => '/img/posts_std/faculdade.jpg',
                'legenda' => 'Ta chegando finalmente minha formatura! mau posso esperar.'
            ],
            [
                'foto' => '/img/posts_std/piano.jpg',
                'legenda' => 'Depois que aprendi a tocar piano, minha vida mudou completamente.'
            ],
            [
                'foto' => '/img/posts_std/violao.jpg',
                'legenda' => 'Vai uma moda boa ai ?'
            ],
            [
                'foto' => '/img/posts_std/futebol.jpg',
                'legenda' => 'Maior paixao do mundo ⚽'
            ],
            [
                'foto' => '/img/posts_std/atletismo.jpg',
                'legenda' => 'Sonho de chegar nas olimpiadas continua vivo'
            ],
            [
                'foto' => '/img/posts_std/jornalismo.jpg',
                'legenda' => 'Cobrindo a entrista do presidente da republica'
            ],
            [
                'foto' => '/img/posts_std/show.jpg',
                'legenda' => 'Fala sério, Charlie Brown JR e dms'
            ],
            [
                'foto' => '/img/posts_std/estudio.jpg',
                'legenda' => 'Gravando uma trackzinha'
            ],
            [
                'foto' => '/img/posts_std/rede_social.jpg',
                'legenda' => 'Estudos indicam que mais da metade dos jovens de 10 a 17 anos passam mais de 3 horas nas redes socias, bizarro'
            ],
            [
                'foto' => '/img/posts_std/bicicleta.jpg',
                'legenda' => 'Bora pedalar ?'
            ],
            [
                'foto' => '/img/posts_std/viagem.jpg',
                'legenda' => 'Como eu AMO viajar ✈'
            ]
        ];

        for ($i= 0; $i < count($posts); $i++) {
            $x = rand(2, 5);
            DB::table('posts')->insert([
                'usuario_id' => $x,
                'legenda' => $posts[$i]['legenda'],
                'post' => $posts[$i]['foto'],
                'created_at'=> date('Y-m-d'),
                'updated_at'=> date('Y-m-d')
            ]);
        }
    }
}
