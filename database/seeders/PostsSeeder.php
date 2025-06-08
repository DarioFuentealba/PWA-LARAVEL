<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'user_id' => '1',
                'category_id' => '2',
                'title' => 'Atenea: Diosa de la Sabiduría y la Guerra Justa',
                'poster' => 'atenea.jpg',
                'habilitated' => '1',
                'content' => 'La estratega del Olimpo Atenea es una de las diosas más fascinantes y completas del panteón griego. No solo es la diosa de la sabiduría, también representa la estrategia militar, la justicia y las artes. Mientras otros dioses encarnan pasiones descontroladas, Atenea es el símbolo de la inteligencia y el equilibrio en el conflicto.',
            ],
            [
                'user_id' => '2',
                'category_id' => '1',
                'title' => 'Ares: Dios de la Guerra Salvaje',
                'poster' => 'ares2.png',
                'habilitated' => '1',
                'content' => 'Aunque era hijo de Zeus y Hera, Ares no era muy querido entre los dioses del Olimpo. Su temperamento impulsivo y su sed de sangre lo convertían en una figura temida, incluso entre los suyos. Su relación más famosa fue con Afrodita, diosa del amor. De esta unión nacieron varios hijos, entre ellos Deimos (terror) y Fobos (miedo), símbolos de lo que Ares llevaba al campo de batalla. ',
            ],
            [
                'user_id' => '2',
                'category_id' => '1',
                'title' => ' Zeus: Rey del Olimpo',
                'poster' => 'zeus2.jpg',
                'habilitated' => '1',
                'content' => 'El padre de los dioses: Zeus es el dios supremo del panteón griego. Gobierna el cielo, el rayo y el orden cósmico. Desde su trono en el Monte Olimpo, controla a dioses y mortales por igual.',
            ],
            [
                'user_id' => '3',
                'category_id' => '1',
                'title' => 'Poseidón: Dios del Mar y los Terremotos',
                'poster' => 'poseidon.jpeg',
                'habilitated' => '1',
                'content' => 'Poseidón gobierna todos los mares, ríos y océanos. Es uno de los tres grandes hermanos junto a Zeus y Hades. Su presencia domina el mundo marino y también es responsable de terremotos. Se lo representa con un tridente, con el que puede calmar o desatar tormentas. Su carácter es cambiante como el mar: puede ser protector, pero también destructivo cuando se enfurece.',
            ],
            [
                'user_id' => '3',
                'category_id' => '5',
                'title' => 'El Kraken',
                'poster' => 'Kraken.jpg',
                'habilitated' => '1',
                'content' => 'Criatura marina gigantesca, temida por marineros y dioses por igual. El Kraken podía hundir barcos enteros con sus tentáculos y era símbolo del caos en el mar.',
            ],
            [
                'user_id' => '5',
                'category_id' => '5',
                'title' => 'El basilisco',
                'poster' => 'basilisco.jpeg',
                'habilitated' => '1',
                'content' => 'Ser mitológico con forma de serpiente o gallo que mataba con la mirada. Era una bestia de muerte instantánea, símbolo del veneno y lo prohibido.',
            ],
            [
                'user_id' => '4',
                'category_id' => '2',
                'title' => 'Afrodita: Diosa del Amor y la Belleza',
                'poster' => 'afrodita.jpg',
                'habilitated' => '1',
                'content' => 'Afrodita es la personificación del deseo, la atracción y la belleza. Nacida de la espuma del mar, su encanto era irresistible incluso para los dioses.',
            ],
            [
                'user_id' => '2',
                'category_id' => '2',
                'title' => 'Artemisa: Diosa de la Caza y la Naturaleza',
                'poster' => 'artemisa.jpg',
                'habilitated' => '1',
                'content' => 'Artemisa es la diosa virgen de la caza, los animales salvajes y la luna. Hermana gemela de Apolo, protectora de mujeres y de lo salvaje.',
            ],
            [
                'user_id' => '1',
                'category_id' => '4',
                'title' => 'Teseo: El Vencedor del Minotauro',
                'poster' => 'teseo.jpg',
                'habilitated' => '1',
                'content' => 'Héroe ateniense que descendió al laberinto y mató al Minotauro. Símbolo del coraje y la inteligencia al servicio del bien común.',
            ],
            [
                'user_id' => '3',
                'category_id' => '4',
                'title' => 'Perseo: El que Derrotó a Medusa',
                'poster' => 'perseo.jpg',
                'habilitated' => '1',
                'content' => 'Hijo de Zeus, Perseo venció a la gorgona Medusa con la ayuda de los dioses. Su victoria representa la lucha contra el miedo petrificante.',
            ],
            [
                'user_id' => '5',
                'category_id' => '4',
                'title' => 'Aquiles: El Héroe de Troya',
                'poster' => 'aquiles.jpg',
                'habilitated' => '1',
                'content' => 'Invulnerable salvo por su talón, Aquiles fue el más poderoso guerrero de la Guerra de Troya. Su furia y dolor marcaron su leyenda.',
            ],
            [
                'user_id' => '2',
                'category_id' => '3',
                'title' => 'Hércules: El Héroe de los 12 Trabajos',
                'poster' => 'hercules.jpg',
                'habilitated' => '1',
                'content' => 'Hijo de Zeus y una mortal, Hércules destacó por su fuerza sobrehumana. Sus doce trabajos son el mayor ejemplo de redención mitológica.',
            ],
            [
                'user_id' => '4',
                'category_id' => '3',
                'title' => 'Orfeo: El Músico del Inframundo',
                'poster' => 'orfeo.jpg',
                'habilitated' => '1',
                'content' => 'Semidiós con el don de la música. Viajó al Hades para recuperar a su amada Eurídice, conmoviendo incluso a los dioses del inframundo.',
            ],
            [
                'user_id' => '1',
                'category_id' => '3',
                'title' => 'Eneas: El Fundador Legendario',
                'poster' => 'eneas.jpg',
                'habilitated' => '1',
                'content' => 'Hijo de Afrodita y héroe troyano. Su viaje tras la caída de Troya inspiró la fundación mítica de Roma. Figura de perseverancia y destino.',
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
