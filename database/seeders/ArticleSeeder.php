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

        Article::create([
            'title' => 'Octobre Rose : Le Mois est Passé, mais la Lutte Continue',
            'slug' => Str::slug('Octobre Rose la Lutte Continue'),
            'content' => '
Le mois d\'octobre est terminé, mais la sensibilisation au cancer du sein doit rester présente toute l’année. Chaque année, Octobre Rose met en lumière l\'importance du dépistage et de la recherche, mais il est essentiel de rappeler que la lutte contre cette maladie ne se limite pas à un seul mois. Parlons du cancer du sein, agissons, et restons vigilants, car chaque jour compte pour sauver des vies.

Pourquoi Parler du Cancer du Sein Toute l’Année ?

Le cancer du sein est l\'un des cancers les plus fréquents, touchant environ 1 femme sur 8 en France. Même si on en parle souvent comme un "cancer féminin," il peut aussi toucher les hommes. Aborder ce sujet tout au long de l’année permet de maintenir une prise de conscience continue et de souligner l’importance des actions préventives et de soutien.

    Dépistage Précoce : Prendre l’habitude de se faire dépister régulièrement est essentiel pour une détection précoce. Les mammographies et les auto-examens des seins devraient être intégrés dans les habitudes de santé, et pas seulement en octobre.

    Informer et Éduquer : Parler du cancer du sein toute l’année permet de sensibiliser davantage aux risques, aux symptômes et aux traitements. En partageant des informations fiables, nous contribuons à faire tomber les tabous et encourageons les femmes, et les hommes, à surveiller leur santé.

    Comment Agir Toute l’Année

Pour soutenir cette cause au-delà d’octobre, voici quelques actions que chacun peut intégrer dans sa vie quotidienne :

Planifiez des examens réguliers : Ne laissez pas l’année s’écouler sans un rendez-vous pour un examen. Se tenir à jour avec les dépistages est un geste simple mais crucial.

    Soutenez des associations : Plusieurs associations œuvrent toute l’année pour accompagner les personnes atteintes de cancer du sein. Que ce soit par des dons ou du bénévolat, chaque geste fait la différence.

    Diffusez l’information : Profitez de vos réseaux sociaux pour parler du cancer du sein et des moyens de prévention. Informez vos proches sur les signes à surveiller et les ressources disponibles.

    Adoptez un mode de vie sain : Manger équilibré, faire de l’exercice régulièrement, et gérer son stress contribuent à une meilleure santé globale et peuvent aider à réduire le risque de cancer.

    Ensemble, Continuons le Combat !

    Ensemble, faisons de la sensibilisation et du soutien une priorité de tous les jours. Continuons à éduquer, à aider, et à motiver ceux qui en ont besoin, pour faire une réelle différence dans la vie de millions de personnes.
            ',

            'category' => 'Prévention',
            'author' => 'Emma',
            'image' => '/images/articles/cancerSein.jpg',
            'published_at' => Carbon::now(),
        ]);
    }
}

