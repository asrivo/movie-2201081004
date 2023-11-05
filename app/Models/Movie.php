<?php

namespace App\Models;

class Movie
{

    private static $movieData = [
        [
            'id' => 'tt0402217',
            'judul' => '20th Century Girl',
            'sinopsis' => '20th Century Girl adalah film televisi internet Korea Selatan yang akan datang yang ditulis dan disutradarai oleh Bang Woo-ri. Seri ini menggambarkan persahabatan dan kesegaran cinta pertama yang berlatar belakang tahun 1999.',
            'tahun' => 2022,
            'pemain' => [' Kim Yoo-jung', 'Byeon Woo-seok', 'Park Jung-woo',' Roh Yoon-seo'],
            'foto_sampul' => '20th-century-girl.jpeg',
        ],
        [
            'id' => 'tt1323044',
            'judul' => 'The Beauty Inside',
            'sinopsis' => 'The Beauty Inside adalah seri televisi Korea Selatan tahun 2018 yang diadaptasi dari film tahun 2015 yang berjudul sama, drama ini disiarkan di saluran kabel JTBC mulai 1 Oktober hingga 20 November 2018.',
            'tahun' => 2018,
            'pemain' => ['Seo Hyun-jin', 'Lee Min-ki', ' Lee Da-hee','Ahn Jae-hyun'],
            'foto_sampul' => 'thebeauty-inside.jpeg',
        ],
        [
            'id' => 'tt2313045',
            'judul' => 'Dilan 1990',
            'sinopsis' => 'Dilan 1990 adalah film drama romantis Indonesia tahun 2018 yang disutradarai oleh Fajar Bustomi dan Pidi Baiq, Film ini diangkat dari novel Dilan: Dia adalah Dilanku Tahun 1990.',
            'tahun' => 2018,
            'pemain' => ['Iqbaal Ramadhan', 'Vanesha Prescilla'],
            'foto_sampul' => 'dilan-1990.jpg',
        ],
        [
            'id' => 'tt0402175',
            'judul' => 'King The Land',
            'sinopsis' => 'Bercerita tentang seorang pemuda bernama Goo Won yang lahir sebagai penerus perusahaan raksasa di Korea Selatan bernama King Group.',
            'tahun' => 2023,
            'pemain' => ['Lee Jun-ho', 'Im Yoon-ah', 'Ahn Woo-yeon'],
            'foto_sampul' => 'kingtheland.jpg',
        ],
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible - Dead Reckoning Part One',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
        ],
        
        
    ];

    public static function all(){
        // pakai method collection
        return collect(self::$movieData);
    }

    public static function find($id){
        // panggil method all()
        $movie = static::all();
        return $movie->firstWhere('id', $id);
    }
}
