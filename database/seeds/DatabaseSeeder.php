<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $now = now()->format('Y-m-d G:i:s');

        (new \App\EventList([
            'id' => 1,
            'site_name' => 'Rock in paris',
            'description' => 'All rock shows in Paris',
            'subdomain' => 'paris',
            'domain' => 'parisrockshows.test',
            'created_at' => $now,
            'updated_at' => $now,
        ]))->save();

        (new \App\Event([
            'event_list_id' => 1,
            'name' => 'Knocked Loose X Cruel Hand X Kublai Khan @ Gibus',
            'start_date' => '2019-05-27 19:00:00',
            'description' => <<<EOF
                Le 27 Mai le Gibus va trembler avec le retour de KNOCKED LOOSE !!!
                
                KNOCKED LOOSE ( HxC Usa )
                https://www.facebook.com/KnockedLoose
                
                KUBLAI KHAN ( Metalcore / Usa ) 
                https://www.facebook.com/KublaiKhanTexoma
                
                CRUEL HAND ( HxC / Usa ) 
                https://www.facebook.com/Cruelhand/
                
                JUDICIARY ( Hxc Trash / Usa ) 
                https://www.facebook.com/judiciarytx/
                
                CAGED EXISTENCE ( HxC / Australie ) 
                https://www.facebook.com/cagedexistence/
                
                VAMACHARA ( HxC / Usa ) 
                https://www.facebook.com/vamacharahc/
                EOF,
            'created_at' => $now,
            'updated_at' => $now,
        ]))->save();

        (new \App\Event([
            'event_list_id' => 1,
            'name' => 'Alice In Chains & Black Rebel Motorcycle Club',
            'start_date' => '2019-05-28 19:30:00',
            'description' => <<<EOF
Billetterie : http://bit.ly/2S3nKmh

Alice In Chains reste l’un des groupes de rock américain les plus influents et prospères de tous les temps. Au delà de leur incroyable carrière, Alice In Chains a été à de multiples reprises nommé aux Grammy, vendu plus de 20 millions d’albums à travers le monde et a su fidéliser des millions de fans à travers les continents. Aux côtés de Nirvana, Pearl Jam et Soundgarden, Alice In Chains fut l’un des quatre plus grands groupes à émerger de Seattle dans les années 90, et changer l’identité du rock moderne.

Plus qu’un concert, une réelle soirée pour les amoureux de musique et de rock puisque Black Rebel Motorcycle Club s’annonce comme special guest sur cette unique date parisienne. Acclamé par Rolling Stone pour leur rock n roll audacieux, la musique de BRMC est qualifiée de précieuse et hypnotique.
EOF,
            'created_at' => $now,
            'updated_at' => $now,
        ]))->save();



        (new \App\EventList([
            'id' => 2,
            'site_name' => 'Madrid concert',
            'description' => 'Concerts in Madrid',
            'subdomain' => 'madrid',
            'domain' => 'madrid-concerts.test',
            'created_at' => $now,
            'updated_at' => $now,
        ]))->save();

        (new \App\Event([
            // https://www.salacaracol.com/events/mr-kilombo-2/
            'event_list_id' => 2,
            'name' => 'Mr. Kilombo @ Sala Caracol',
            'start_date' => '2019-06-01 21:00:00',
            'description' => '
                Grupos:  MR. KILOMBO
                Fecha: 1 DE JUNIO DE 2019
                Localidad:  Madrid
                Lugar: Sala Caracol
                Dirección: Calle Bernardino Obregón, 18 | 28012 Madrid
                Hora: 20:30 horas (apertura de puertas)
                Entradas: 12€ (anticipada)
                Venta online: WEGOW
                Venta física: 15€  (Taquilla Caracol el mismo día del evento)
            ',
            'created_at' => $now,
            'updated_at' => $now,
        ]))->save();
    }
}
