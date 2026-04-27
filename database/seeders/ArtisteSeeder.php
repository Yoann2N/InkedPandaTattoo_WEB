<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Artiste;

class ArtisteSeeder extends Seeder
{

    public function run(): void
        {
            //Artiste::factory()->count(6)->create();

            $artists = [
                [
                    
                    'profession'      => 'Tatoueur',
                    'style'    => 'Réaliste',
                    'pseudo'        => 'Alexis Panda',
                    'bio'  => 'Alexis, tatoueur spécialisé dans le réalisme et fondateur du studio inked panda 🐼🖋️ Avec 8 ans d’expérience dans le tatouage et l’ouverture de son premier tattoo shop il y a 6 ans, Alexis a su construire un univers fort, précis et profondément artistique. Passionné de dessin depuis l’enfance, il a perfectionné son art en se formant auprès de grands tatoueurs français lors de séminaires, nourrissant sans cesse sa technique et sa vision. Chaque projet est pensé comme une œuvre unique : réalisme puissant, détails saisissants et compositions sur mesure. 🎨 Sa créativité et son imagination vous plongent dans son univers, où chaque tatouage raconte une histoire et prend vie sur la peau. 🖤 Plus qu’un tatouage, une expérience artistique.',
                    'instagram' => 'https://www.instagram.com/alexis.panda.tattooartist/',
                    'facebook' => 'https://www.facebook.com/84.TOTI',
                    'banniereUrl' => 'banniere_studio.jpg',
                    'vignetteUrl' => 'logo_tatoo1.png',
                    'rss' => 'https://rss.app/embed/v1/wall/acckayZAFJUSUYuf',
                    'css' => 'body { background-color: #f0f0f0; }aqua',
                    'user_id' => 1
                ],
                [
                    
                    'profession'      => 'Tatoueuse',
                    'style'    => 'Ligne fine',
                    'pseudo'        => 'Sarah Pendragon',
                    'bio'  => 'Sarah, née en 1999, est une artiste tatoueuse au parcours ancré dans les arts plastiques. Après l’obtention d’un baccalauréat général, elle poursuit ses études aux Beaux-Arts d’Avignon, où elle développe une sensibilité artistique marquée et une approche rigoureuse de la création.À la fin de son master en 2022, elle se tourne naturellement vers le tatouage, un médium qui lui permet de mêler précision technique et expression personnelle. Aujourd’hui, Sarah est spécialisée dans le fineline et le whip shading, des styles délicats qui demandent finesse et maîtrise. Son univers s’articule autour de la typographie, des motifs floraux et de la pop culture, qu’elle interprète avec subtilité et élégance. Attentive et minutieuse, elle accorde une importance particulière à l’expérience de ses clients, qu’elle accompagne avec douceur à chaque étape, de la conception du projet à sa réalisation.',

                    'instagram' => 'https://www.instagram.com/sarahpendragon/',
                    'facebook' => '',
                    'banniereUrl' => 'banniere_sarah.jpg',
                    'vignetteUrl' => 'logo_sarah.png',
                    'rss' => 'https://rss.app/embed/v1/wall/AOpj0IYvvxWjoour',
                    'css' => 'body { background-color: #f0f0f0; }teal',
                    'user_id' => 2
                ],
                [
                    
                    'profession'      => 'Tatoueur',
                    'style'    => 'Manga, Japonais',
                    'pseudo'        => 'Tomsaw',
                    'bio'  => 'Je m’appelle Tom, j’ai 28 ans et je tatoue dans le sud de la France, au studio Inked Panda. Je suis passionné par l’univers manga et la culture japonaise, qui influencent beaucoup mon travail, mais j’aime aussi explorer des styles plus graphiques et épurés. J’utilise surtout le noir, le gris, avec des touches de rouge pour créer des contrastes forts et donner du caractère à mes pièces. Ce que je préfère, c’est construire des projets avec les gens, prendre le temps de comprendre leurs idées et les adapter pour créer un tatouage qui leur correspond vraiment. Chaque pièce est pensée pour s’intégrer au corps et durer dans le temps. Mon objectif, c’est de faire des tatouages qui ont du sens, avec une vraie identité, autant pour la personne qui le porte que pour moi.',
                    'instagram' => 'https://www.instagram.com/tomsaw.tattoo/?hl=fr',
                    'facebook' => '',
                    'banniereUrl' => 'banniere_studio.jpeg',
                    'vignetteUrl' => 'logo_tatoo3.jpg',
                    'rss' => 'https://rss.app/embed/v1/wall/JsKrzWQ1UZeuTd9N',
                    'css' => 'body { background-color: #f0f0f0; }aqua',
                    'user_id' => 3
                ],
                [
                    
                    'profession'      => 'Perceur',
                    'style'    => '',
                    'pseudo'        => 'Anatomix',
                    'bio'  => 'Anatomix est un perceur professionnel né en 1992 à Marseille, reconnu comme l&apos;une des références françaises dans l&apos;art du piercing haut de gamme. Autodidacte dans l&apos;âme, il commence à explorer le monde du piercing dès l&apos;adolescence avant de se former sérieusement auprès de praticiens européens reconnus, notamment en Allemagne et aux Pays-Bas, pays pionniers dans les techniques de piercing avancées. De retour à Marseille, il ouvre son studio **Anatomix Piercing** en 2018, un espace épuré et stérile où l&apos;hygiène et le confort du client sont au cœur de chaque prestation. Spécialisé dans les placements complexes tels que le piercing de surface, le piercing d&apos;oreille en curation et les bijoux en titane implant-grade, il est particulièrement apprécié pour sa précision et sa pédagogie. Anatomix accorde une importance capitale au suivi post-piercing et à l&apos;éducation de sa clientèle sur les soins à apporter, ce qui lui vaut une excellente réputation en matière de cicatrisation. Il participe régulièrement aux plus grandes conventions européennes de tatouage et de piercing, où il anime des démonstrations et des conférences. Engagé pour la professionnalisation de son métier, il milite activement pour une meilleure réglementation du piercing en France.',
                    'instagram' => 'https://www.instagram.com/anatomix84?igsh=ejdjdDlyc3FxZDFs&fbclid=PAZXh0bgNhZW0CMTEAc3J0YwZhcHBfaWQMMjU2MjgxMDQwNTU4AAGnpe-k51gRMjkwKjBfA2WDJfht_gDlJ_eHXCJGoyPvQURDAX_HiiCLV3ud7u8_aem_REPZ-0sNj1B0XlvMLYvqRg',
                    'facebook' => '',
                    'banniereUrl' => 'banniere_studio.jpg',
                    'vignetteUrl' => 'logo_anatomix.jpg',
                    'rss' => 'https://rss.app/embed/v1/wall/9MkfvNkqJnfT6g6u',
                    'css' => 'body { background-color: #f0f0f0; }aqua',
                    'user_id' => 4
                ],
                [
                    
                    'profession'      => 'Head spa',
                    'style'    => 'Head Spa japonais & massage crânien',
                    'pseudo'        => 'Capiluna',
                    'bio'  => 'Bienvenue chez CAPILUNA., un espace dédié à l’art du soin capillaire à L’Isle-sur-la-Sorgue. Formée à Paris, je vous propose des rituels head spa alliant détente profonde, expertise et bien-être dans un cadre intimiste et apaisant. Chaque soin est pensé comme une véritable parenthèse, grâce à une expérience sensorielle unique, un matelas massant intégral et des soins adaptés aux besoins de vos cheveux et de votre cuir chevelu. CAPILUNA. est une invitation à ralentir, à prendre soin de soi et à révéler toute la beauté naturelle du cheveu.',
                    'instagram' => 'https://www.instagram.com/maison.capiluna/?hl=fr',
                    'facebook' => '',
                    'banniereUrl' => 'banniere_capiluna.jpg',
                    'vignetteUrl' => 'logo_capiluna.jpg',
                    'rss' => 'https://rss.app/embed/v1/wall/oPdoLVUYk61yHmVV',
                    'css' => 'body { background-color: #f0f0f0; }aqua',
                    'user_id' => 5
                ],
            ];

            foreach ($artists as $artist) {
                Artiste::create($artist);
            }



        }
}