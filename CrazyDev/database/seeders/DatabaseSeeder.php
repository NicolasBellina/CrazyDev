<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::factory()->create([
            'first_name' => 'super',
            'last_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('mdpadmin'),
            'age' => 20,
            'height' => 182.5,
            'weight' => 75.4,
            'planet' => 'Zarkona Prime',
            'language' => 'Oolbian',
            'avatar_path' => 'img/avatar/par_default.png'
        ]);
        
        User::factory(20)->create();

        Post::factory()->create([
            'title' => 'Général',
            'body' => 'Bienvenue à toutes et à tous, êtres de la galaxie Zynk\'tar-Oolb ! Ce fil de conversation est votre espace privilégié pour échanger, partager et poser toutes vos questions. Que vous veniez de la planète Zarkona Prime, d\'Oolb, ou d\'un autre coin lointain de notre vaste galaxie, vos pensées, idées et ressentis sont les bienvenus ici.

Nous comprenons que pour beaucoup d\'entre vous, c\'est votre première fois dans cet espace intergalactique de discussion, mais n\'ayez crainte ! Nous sommes ici pour créer ensemble une communauté bienveillante où chacun se sent libre de s’exprimer. Que vous souhaitiez poser une question, raconter une expérience ou simplement saluer vos voisins stellaires, ce fil est le lieu idéal pour vous faire entendre.

N’oubliez pas, aucun commentaire n’est trop petit ou insignifiant. Votre voix compte, et nous sommes impatients de lire vos contributions ! Prenez votre temps, installez-vous confortablement, et n\'hésitez pas à poster un commentaire sous ce fil. Que la communication entre les étoiles commence ! 🌌',
            'user_id' => 1,
            'is_main_thread' => true,
        ]);

        Comment::factory(6)->create([
            'post_id' => 1,
            'user_id' => fn() => User::inRandomOrder()->whereBetween('id', [2, 10])->first()->id,
            'body' => 'Bonjour !',
        ]);
    }
}
