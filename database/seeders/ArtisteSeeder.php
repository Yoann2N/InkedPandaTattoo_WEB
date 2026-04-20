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
                    'bio'  => 'Alexis Panda est un tatoueur franco-japonais né en 1988 à Bordeaux, célèbre pour son style unique mêlant l&apos;esthétique du tatouage japonais traditionnel et les influences de la culture pop contemporaine. Fasciné dès l&apos;adolescence par les mangas et l&apos;art asiatique, il part s&apos;installer à Tokyo à l&apos;âge de 24 ans pour se former auprès de maîtres tatoueurs irezumi. De retour en France, il ouvre son studio **Panda Ink** à Bordeaux en 2016, qui devient rapidement un lieu incontournable pour les amateurs de tatouage haut de gamme. Son trait fluide, ses dégradés d&apos;encre maîtrisés et son sens du détail lui valent une reconnaissance internationale, avec une liste d&apos;attente de plusieurs mois. Alexis puise son inspiration dans la nature, les légendes japonaises et l&apos;univers du tatouage old school américain, créant un style hybride immédiatement reconnaissable. Il a été primé dans plusieurs conventions européennes et ses œuvres ont été publiées dans des magazines spécialisés tels que Tattoo Life et Inked Magazine. En parallèle de son activité, il anime une chaîne YouTube suivie par des dizaines de milliers d&apos;abonnés, dans laquelle il partage sa technique et sa vision de l&apos;art du tatouage.',
                    'instagram' => 'https://www.instagram.com/alexis.panda.tattooartist/',
                    'facebook' => 'https://www.facebook.com/84.TOTI',
                    'banniereUrl' => 'banniere_studio.jpg',
                    'vignetteUrl' => 'logo_tatoo1.png',
                    'rss' => 'https://rss.app/embed/v1/imageboard/WvQISdq1zYHX8GlM',
                    'css' => 'body { background-color: #f0f0f0; }aqua',
                    'user_id' => 1
                ],
                [
                    
                    'profession'      => 'Tatoueuse',
                    'style'    => 'Ligne fine',
                    'pseudo'        => 'Sarah Pendragon',
                    'bio'  => 'Sarah Pendragon est une tatoueuse française née en 1990 à Lyon, reconnue pour son style mêlant le néo-traditionnel et les motifs celtiques. Passionnée de dessin depuis l&apos;enfance, elle suit une formation aux Beaux-Arts avant de découvrir le tatouage à l&apos;âge de 22 ans lors d&apos;un voyage à Londres. De retour en France, elle fait ses armes dans plusieurs studios parisiens avant d&apos;ouvrir son propre atelier, Pendragon Ink, dans le 11ème arrondissement de Paris en 2018. Son trait précis et sa palette de couleurs profondes lui valent rapidement une clientèle fidèle et une solide réputation sur les réseaux sociaux. Inspirée par la mythologie arthurienne — dont elle a emprunté le nom — elle intègre souvent des symboles médiévaux et des entrelacs dans ses créations. Elle a participé à plusieurs conventions internationales, notamment à Amsterdam, Berlin et Montréal, où elle a remporté des prix dans la catégorie "Best Color Work". En dehors du studio, Sarah donne des ateliers de dessin et s&apos;engage pour une meilleure représentation des femmes dans le milieu du tatouage.',

                    'instagram' => 'https://www.instagram.com/sarahpendragon/',
                    'facebook' => '',
                    'banniereUrl' => 'banniere_sarah.jpg',
                    'vignetteUrl' => 'logo_tatoo2.png',
                    'rss' => 'https://rss.app/embed/v1/imageboard/WvQISdq1zYHX8GlM',
                    'css' => 'body { background-color: #f0f0f0; }teal',
                    'user_id' => 2
                ],
                [
                    
                    'profession'      => 'Tatoueur',
                    'style'    => 'Manga, Japonais',
                    'pseudo'        => 'Tomsaw',
                    'bio'  => 'Isabelle Fontaine est une artiste spécialisée dans le maquillage permanent, née en 1985 à Nantes. Après une carrière de plusieurs années en tant que maquilleuse professionnelle pour le cinéma et la mode, elle découvre le maquillage permanent à l&apos;âge de 30 ans et y voit immédiatement une façon de sublimer la beauté de manière durable. Elle se forme auprès des meilleures écoles européennes, notamment à Paris et à Milan, avant d&apos;ouvrir son propre institut, **Belle Encre**, dans le centre de Nantes en 2017. Spécialisée dans la technique de la microblading pour les sourcils, l&apos;eye-liner permanent et le rehaussement des lèvres, elle est reconnue pour son souci du naturel et sa capacité à adapter chaque prestation au visage et à la personnalité de sa cliente. Son approche bienveillante et son sens du détail lui ont valu une clientèle fidèle et de nombreuses recommandations bouche-à-oreille. Isabelle se forme régulièrement aux nouvelles techniques et aux pigments les plus innovants afin de garantir des résultats durables et sûrs. Elle intervient également en tant que formatrice auprès de professionnels souhaitant se reconvertir dans le maquillage permanent, transmettant avec passion son savoir-faire et son exigence.',
                    'instagram' => 'https://www.instagram.com/tomsaw.tattoo/?hl=fr',
                    'facebook' => '',
                    'banniereUrl' => 'banniere_studio.jpg',
                    'vignetteUrl' => 'logo_tatoo3.jpg',
                    'rss' => 'https://rss.app/embed/v1/imageboard/WvQISdq1zYHX8GlM',
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
                    'vignetteUrl' => 'logo_tatoo4.jpg',
                    'rss' => 'https://rss.app/embed/v1/imageboard/WvQISdq1zYHX8GlM',
                    'css' => 'body { background-color: #f0f0f0; }aqua',
                    'user_id' => 4
                ],
                [
                    
                    'profession'      => 'Head spa',
                    'style'    => 'Head Spa japonais & massage crânien',
                    'pseudo'        => 'Capiluna',
                    'bio'  => 'Alma Reyes est une nail artiste née en 1995 à Toulouse, passionnée par l&apos;art et la mode depuis son plus jeune âge. Après des études en design graphique, elle découvre le nail art comme une extension naturelle de sa créativité et se forme auprès de professionnelles reconnues à Paris et à Londres. Elle ouvre son propre studio, **Alma Nails**, à Toulouse en 2020, proposant des créations sur mesure alliant techniques traditionnelles et innovations les plus récentes, telles que la pose en gel, l&apos;acrylique et les pigments effet miroir. Son univers esthétique, inspiré par la nature, l&apos;art contemporain et les cultures asiatiques, lui a permis de se forger une identité visuelle forte et immédiatement reconnaissable sur les réseaux sociaux, où elle compte plusieurs dizaines de milliers d&apos;abonnés. Alma est réputée pour sa minutie, sa capacité à transformer chaque ongle en une véritable œuvre d&apos;art et son souci constant de travailler avec des produits respectueux de la santé de ses clientes. Elle participe chaque année aux principales compétitions de nail art françaises et internationales, décrochant plusieurs podiums dans les catégories fantasy et nail art freestyle. En parallèle de son activité, elle propose des formations pour les professionnelles souhaitant perfectionner leur technique et développer leur propre style.',
                    'instagram' => 'https://www.instagram.com/maison.capiluna/?hl=fr',
                    'facebook' => '',
                    'banniereUrl' => 'banniere_studio.jpg',
                    'vignetteUrl' => 'logo_tatoo5.jpg',
                    'rss' => 'https://rss.app/embed/v1/imageboard/WvQISdq1zYHX8GlM',
                    'css' => 'body { background-color: #f0f0f0; }aqua',
                    'user_id' => 5
                ],
            ];

            foreach ($artists as $artist) {
                Artiste::create($artist);
            }



        }
}