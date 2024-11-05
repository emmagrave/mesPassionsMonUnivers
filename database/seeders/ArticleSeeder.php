<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'title' => 'Quel livre choisir pour sa première lecture ?',
            'slug' => Str::slug('Quel livre choisir pour sa première lecture'),
            'content' => '
            Bienvenue sur Mes Passions, Mon Univers !

            Si vous êtes sur le point de vous plonger dans l\'univers fascinant de la lecture, le choix de votre premier livre peut susciter à la fois excitation et appréhension. La bonne nouvelle, c\'est qu\'il existe une multitude d\'options qui peuvent répondre à vos goûts et vous aider à découvrir le plaisir de lire. Voici quelques suggestions pour vous guider dans cette nouvelle aventure.

            *"L\'Étranger" d\'Albert Camus*

            Pourquoi le lire ?
            Bien que ce roman soit complexe, il aborde des thèmes essentiels tels que l\'absurdité de la vie. L\'écriture de Camus est à la fois limpide et frappante, et ce livre est souvent cité comme étant une bonne première lecture pour ceux qui s\'intéressent à la philosophie.

            [Lien vers l\'article](https://www.fnac.com/a269088/Albert-Camus-L-Etranger)

            *"Nos étoiles contraires" de John Green*

            Pourquoi le lire ?
            Bien que ce roman soit profondément émouvant, il aborde des thèmes essentiels tels que l\'amour, la mortalité et l\'adolescence. Ce livre sait conserver un regard sur le monde adulte, et en fait une excellente première lecture pour les adolescents souhaitant explorer des sujets complexes avec sensibilité et humour.

            [Lien vers l\'article](https://www.fnac.com/a10664204/John-Green-Nos-etoiles-contraires)

            *"Du Rouge aux Lèvres" de Makoto Kemmoku*

            Pourquoi le lire ?
            ... (ajoutez le contenu restant ici) ...',

            'category' => 'Lecture',
            'author' => 'Emma',
            'image' => '/images/articles/premiereLecture.jpg',
            'published_at' => Carbon::now(),
        ]);
    }
}

