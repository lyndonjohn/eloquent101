<?php

use Illuminate\Database\Seeder;

class ActorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('actor')->delete();
        
        \DB::table('actor')->insert(array (
            0 => 
            array (
                'actor_id' => 1,
                'first_name' => 'PENELOPE',
                'last_name' => 'GUINESS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            1 => 
            array (
                'actor_id' => 2,
                'first_name' => 'NICK',
                'last_name' => 'WAHLBERG',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            2 => 
            array (
                'actor_id' => 3,
                'first_name' => 'ED',
                'last_name' => 'CHASE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            3 => 
            array (
                'actor_id' => 4,
                'first_name' => 'JENNIFER',
                'last_name' => 'DAVIS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            4 => 
            array (
                'actor_id' => 5,
                'first_name' => 'JOHNNY',
                'last_name' => 'LOLLOBRIGIDA',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            5 => 
            array (
                'actor_id' => 6,
                'first_name' => 'BETTE',
                'last_name' => 'NICHOLSON',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            6 => 
            array (
                'actor_id' => 7,
                'first_name' => 'GRACE',
                'last_name' => 'MOSTEL',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            7 => 
            array (
                'actor_id' => 8,
                'first_name' => 'MATTHEW',
                'last_name' => 'JOHANSSON',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            8 => 
            array (
                'actor_id' => 9,
                'first_name' => 'JOE',
                'last_name' => 'SWANK',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            9 => 
            array (
                'actor_id' => 10,
                'first_name' => 'CHRISTIAN',
                'last_name' => 'GABLE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            10 => 
            array (
                'actor_id' => 11,
                'first_name' => 'ZERO',
                'last_name' => 'CAGE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            11 => 
            array (
                'actor_id' => 12,
                'first_name' => 'KARL',
                'last_name' => 'BERRY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            12 => 
            array (
                'actor_id' => 13,
                'first_name' => 'UMA',
                'last_name' => 'WOOD',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            13 => 
            array (
                'actor_id' => 14,
                'first_name' => 'VIVIEN',
                'last_name' => 'BERGEN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            14 => 
            array (
                'actor_id' => 15,
                'first_name' => 'CUBA',
                'last_name' => 'OLIVIER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            15 => 
            array (
                'actor_id' => 16,
                'first_name' => 'FRED',
                'last_name' => 'COSTNER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            16 => 
            array (
                'actor_id' => 17,
                'first_name' => 'HELEN',
                'last_name' => 'VOIGHT',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            17 => 
            array (
                'actor_id' => 18,
                'first_name' => 'DAN',
                'last_name' => 'TORN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            18 => 
            array (
                'actor_id' => 19,
                'first_name' => 'BOB',
                'last_name' => 'FAWCETT',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            19 => 
            array (
                'actor_id' => 20,
                'first_name' => 'LUCILLE',
                'last_name' => 'TRACY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            20 => 
            array (
                'actor_id' => 21,
                'first_name' => 'KIRSTEN',
                'last_name' => 'PALTROW',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            21 => 
            array (
                'actor_id' => 22,
                'first_name' => 'ELVIS',
                'last_name' => 'MARX',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            22 => 
            array (
                'actor_id' => 23,
                'first_name' => 'SANDRA',
                'last_name' => 'KILMER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            23 => 
            array (
                'actor_id' => 24,
                'first_name' => 'CAMERON',
                'last_name' => 'STREEP',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            24 => 
            array (
                'actor_id' => 25,
                'first_name' => 'KEVIN',
                'last_name' => 'BLOOM',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            25 => 
            array (
                'actor_id' => 26,
                'first_name' => 'RIP',
                'last_name' => 'CRAWFORD',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            26 => 
            array (
                'actor_id' => 27,
                'first_name' => 'JULIA',
                'last_name' => 'MCQUEEN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            27 => 
            array (
                'actor_id' => 28,
                'first_name' => 'WOODY',
                'last_name' => 'HOFFMAN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            28 => 
            array (
                'actor_id' => 29,
                'first_name' => 'ALEC',
                'last_name' => 'WAYNE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            29 => 
            array (
                'actor_id' => 30,
                'first_name' => 'SANDRA',
                'last_name' => 'PECK',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            30 => 
            array (
                'actor_id' => 31,
                'first_name' => 'SISSY',
                'last_name' => 'SOBIESKI',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            31 => 
            array (
                'actor_id' => 32,
                'first_name' => 'TIM',
                'last_name' => 'HACKMAN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            32 => 
            array (
                'actor_id' => 33,
                'first_name' => 'MILLA',
                'last_name' => 'PECK',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            33 => 
            array (
                'actor_id' => 34,
                'first_name' => 'AUDREY',
                'last_name' => 'OLIVIER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            34 => 
            array (
                'actor_id' => 35,
                'first_name' => 'JUDY',
                'last_name' => 'DEAN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            35 => 
            array (
                'actor_id' => 36,
                'first_name' => 'BURT',
                'last_name' => 'DUKAKIS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            36 => 
            array (
                'actor_id' => 37,
                'first_name' => 'VAL',
                'last_name' => 'BOLGER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            37 => 
            array (
                'actor_id' => 38,
                'first_name' => 'TOM',
                'last_name' => 'MCKELLEN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            38 => 
            array (
                'actor_id' => 39,
                'first_name' => 'GOLDIE',
                'last_name' => 'BRODY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            39 => 
            array (
                'actor_id' => 40,
                'first_name' => 'JOHNNY',
                'last_name' => 'CAGE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            40 => 
            array (
                'actor_id' => 41,
                'first_name' => 'JODIE',
                'last_name' => 'DEGENERES',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            41 => 
            array (
                'actor_id' => 42,
                'first_name' => 'TOM',
                'last_name' => 'MIRANDA',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            42 => 
            array (
                'actor_id' => 43,
                'first_name' => 'KIRK',
                'last_name' => 'JOVOVICH',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            43 => 
            array (
                'actor_id' => 44,
                'first_name' => 'NICK',
                'last_name' => 'STALLONE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            44 => 
            array (
                'actor_id' => 45,
                'first_name' => 'REESE',
                'last_name' => 'KILMER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            45 => 
            array (
                'actor_id' => 46,
                'first_name' => 'PARKER',
                'last_name' => 'GOLDBERG',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            46 => 
            array (
                'actor_id' => 47,
                'first_name' => 'JULIA',
                'last_name' => 'BARRYMORE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            47 => 
            array (
                'actor_id' => 48,
                'first_name' => 'FRANCES',
                'last_name' => 'DAY-LEWIS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            48 => 
            array (
                'actor_id' => 49,
                'first_name' => 'ANNE',
                'last_name' => 'CRONYN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            49 => 
            array (
                'actor_id' => 50,
                'first_name' => 'NATALIE',
                'last_name' => 'HOPKINS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            50 => 
            array (
                'actor_id' => 51,
                'first_name' => 'GARY',
                'last_name' => 'PHOENIX',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            51 => 
            array (
                'actor_id' => 52,
                'first_name' => 'CARMEN',
                'last_name' => 'HUNT',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            52 => 
            array (
                'actor_id' => 53,
                'first_name' => 'MENA',
                'last_name' => 'TEMPLE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            53 => 
            array (
                'actor_id' => 54,
                'first_name' => 'PENELOPE',
                'last_name' => 'PINKETT',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            54 => 
            array (
                'actor_id' => 55,
                'first_name' => 'FAY',
                'last_name' => 'KILMER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            55 => 
            array (
                'actor_id' => 56,
                'first_name' => 'DAN',
                'last_name' => 'HARRIS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            56 => 
            array (
                'actor_id' => 57,
                'first_name' => 'JUDE',
                'last_name' => 'CRUISE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            57 => 
            array (
                'actor_id' => 58,
                'first_name' => 'CHRISTIAN',
                'last_name' => 'AKROYD',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            58 => 
            array (
                'actor_id' => 59,
                'first_name' => 'DUSTIN',
                'last_name' => 'TAUTOU',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            59 => 
            array (
                'actor_id' => 60,
                'first_name' => 'HENRY',
                'last_name' => 'BERRY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            60 => 
            array (
                'actor_id' => 61,
                'first_name' => 'CHRISTIAN',
                'last_name' => 'NEESON',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            61 => 
            array (
                'actor_id' => 62,
                'first_name' => 'JAYNE',
                'last_name' => 'NEESON',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            62 => 
            array (
                'actor_id' => 63,
                'first_name' => 'CAMERON',
                'last_name' => 'WRAY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            63 => 
            array (
                'actor_id' => 64,
                'first_name' => 'RAY',
                'last_name' => 'JOHANSSON',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            64 => 
            array (
                'actor_id' => 65,
                'first_name' => 'ANGELA',
                'last_name' => 'HUDSON',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            65 => 
            array (
                'actor_id' => 66,
                'first_name' => 'MARY',
                'last_name' => 'TANDY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            66 => 
            array (
                'actor_id' => 67,
                'first_name' => 'JESSICA',
                'last_name' => 'BAILEY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            67 => 
            array (
                'actor_id' => 68,
                'first_name' => 'RIP',
                'last_name' => 'WINSLET',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            68 => 
            array (
                'actor_id' => 69,
                'first_name' => 'KENNETH',
                'last_name' => 'PALTROW',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            69 => 
            array (
                'actor_id' => 70,
                'first_name' => 'MICHELLE',
                'last_name' => 'MCCONAUGHEY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            70 => 
            array (
                'actor_id' => 71,
                'first_name' => 'ADAM',
                'last_name' => 'GRANT',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            71 => 
            array (
                'actor_id' => 72,
                'first_name' => 'SEAN',
                'last_name' => 'WILLIAMS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            72 => 
            array (
                'actor_id' => 73,
                'first_name' => 'GARY',
                'last_name' => 'PENN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            73 => 
            array (
                'actor_id' => 74,
                'first_name' => 'MILLA',
                'last_name' => 'KEITEL',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            74 => 
            array (
                'actor_id' => 75,
                'first_name' => 'BURT',
                'last_name' => 'POSEY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            75 => 
            array (
                'actor_id' => 76,
                'first_name' => 'ANGELINA',
                'last_name' => 'ASTAIRE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            76 => 
            array (
                'actor_id' => 77,
                'first_name' => 'CARY',
                'last_name' => 'MCCONAUGHEY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            77 => 
            array (
                'actor_id' => 78,
                'first_name' => 'GROUCHO',
                'last_name' => 'SINATRA',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            78 => 
            array (
                'actor_id' => 79,
                'first_name' => 'MAE',
                'last_name' => 'HOFFMAN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            79 => 
            array (
                'actor_id' => 80,
                'first_name' => 'RALPH',
                'last_name' => 'CRUZ',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            80 => 
            array (
                'actor_id' => 81,
                'first_name' => 'SCARLETT',
                'last_name' => 'DAMON',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            81 => 
            array (
                'actor_id' => 82,
                'first_name' => 'WOODY',
                'last_name' => 'JOLIE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            82 => 
            array (
                'actor_id' => 83,
                'first_name' => 'BEN',
                'last_name' => 'WILLIS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            83 => 
            array (
                'actor_id' => 84,
                'first_name' => 'JAMES',
                'last_name' => 'PITT',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            84 => 
            array (
                'actor_id' => 85,
                'first_name' => 'MINNIE',
                'last_name' => 'ZELLWEGER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            85 => 
            array (
                'actor_id' => 86,
                'first_name' => 'GREG',
                'last_name' => 'CHAPLIN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            86 => 
            array (
                'actor_id' => 87,
                'first_name' => 'SPENCER',
                'last_name' => 'PECK',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            87 => 
            array (
                'actor_id' => 88,
                'first_name' => 'KENNETH',
                'last_name' => 'PESCI',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            88 => 
            array (
                'actor_id' => 89,
                'first_name' => 'CHARLIZE',
                'last_name' => 'DENCH',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            89 => 
            array (
                'actor_id' => 90,
                'first_name' => 'SEAN',
                'last_name' => 'GUINESS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            90 => 
            array (
                'actor_id' => 91,
                'first_name' => 'CHRISTOPHER',
                'last_name' => 'BERRY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            91 => 
            array (
                'actor_id' => 92,
                'first_name' => 'KIRSTEN',
                'last_name' => 'AKROYD',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            92 => 
            array (
                'actor_id' => 93,
                'first_name' => 'ELLEN',
                'last_name' => 'PRESLEY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            93 => 
            array (
                'actor_id' => 94,
                'first_name' => 'KENNETH',
                'last_name' => 'TORN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            94 => 
            array (
                'actor_id' => 95,
                'first_name' => 'DARYL',
                'last_name' => 'WAHLBERG',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            95 => 
            array (
                'actor_id' => 96,
                'first_name' => 'GENE',
                'last_name' => 'WILLIS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            96 => 
            array (
                'actor_id' => 97,
                'first_name' => 'MEG',
                'last_name' => 'HAWKE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            97 => 
            array (
                'actor_id' => 98,
                'first_name' => 'CHRIS',
                'last_name' => 'BRIDGES',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            98 => 
            array (
                'actor_id' => 99,
                'first_name' => 'JIM',
                'last_name' => 'MOSTEL',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            99 => 
            array (
                'actor_id' => 100,
                'first_name' => 'SPENCER',
                'last_name' => 'DEPP',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            100 => 
            array (
                'actor_id' => 101,
                'first_name' => 'SUSAN',
                'last_name' => 'DAVIS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            101 => 
            array (
                'actor_id' => 102,
                'first_name' => 'WALTER',
                'last_name' => 'TORN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            102 => 
            array (
                'actor_id' => 103,
                'first_name' => 'MATTHEW',
                'last_name' => 'LEIGH',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            103 => 
            array (
                'actor_id' => 104,
                'first_name' => 'PENELOPE',
                'last_name' => 'CRONYN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            104 => 
            array (
                'actor_id' => 105,
                'first_name' => 'SIDNEY',
                'last_name' => 'CROWE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            105 => 
            array (
                'actor_id' => 106,
                'first_name' => 'GROUCHO',
                'last_name' => 'DUNST',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            106 => 
            array (
                'actor_id' => 107,
                'first_name' => 'GINA',
                'last_name' => 'DEGENERES',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            107 => 
            array (
                'actor_id' => 108,
                'first_name' => 'WARREN',
                'last_name' => 'NOLTE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            108 => 
            array (
                'actor_id' => 109,
                'first_name' => 'SYLVESTER',
                'last_name' => 'DERN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            109 => 
            array (
                'actor_id' => 110,
                'first_name' => 'SUSAN',
                'last_name' => 'DAVIS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            110 => 
            array (
                'actor_id' => 111,
                'first_name' => 'CAMERON',
                'last_name' => 'ZELLWEGER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            111 => 
            array (
                'actor_id' => 112,
                'first_name' => 'RUSSELL',
                'last_name' => 'BACALL',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            112 => 
            array (
                'actor_id' => 113,
                'first_name' => 'MORGAN',
                'last_name' => 'HOPKINS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            113 => 
            array (
                'actor_id' => 114,
                'first_name' => 'MORGAN',
                'last_name' => 'MCDORMAND',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            114 => 
            array (
                'actor_id' => 115,
                'first_name' => 'HARRISON',
                'last_name' => 'BALE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            115 => 
            array (
                'actor_id' => 116,
                'first_name' => 'DAN',
                'last_name' => 'STREEP',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            116 => 
            array (
                'actor_id' => 117,
                'first_name' => 'RENEE',
                'last_name' => 'TRACY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            117 => 
            array (
                'actor_id' => 118,
                'first_name' => 'CUBA',
                'last_name' => 'ALLEN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            118 => 
            array (
                'actor_id' => 119,
                'first_name' => 'WARREN',
                'last_name' => 'JACKMAN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            119 => 
            array (
                'actor_id' => 120,
                'first_name' => 'PENELOPE',
                'last_name' => 'MONROE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            120 => 
            array (
                'actor_id' => 121,
                'first_name' => 'LIZA',
                'last_name' => 'BERGMAN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            121 => 
            array (
                'actor_id' => 122,
                'first_name' => 'SALMA',
                'last_name' => 'NOLTE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            122 => 
            array (
                'actor_id' => 123,
                'first_name' => 'JULIANNE',
                'last_name' => 'DENCH',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            123 => 
            array (
                'actor_id' => 124,
                'first_name' => 'SCARLETT',
                'last_name' => 'BENING',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            124 => 
            array (
                'actor_id' => 125,
                'first_name' => 'ALBERT',
                'last_name' => 'NOLTE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            125 => 
            array (
                'actor_id' => 126,
                'first_name' => 'FRANCES',
                'last_name' => 'TOMEI',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            126 => 
            array (
                'actor_id' => 127,
                'first_name' => 'KEVIN',
                'last_name' => 'GARLAND',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            127 => 
            array (
                'actor_id' => 128,
                'first_name' => 'CATE',
                'last_name' => 'MCQUEEN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            128 => 
            array (
                'actor_id' => 129,
                'first_name' => 'DARYL',
                'last_name' => 'CRAWFORD',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            129 => 
            array (
                'actor_id' => 130,
                'first_name' => 'GRETA',
                'last_name' => 'KEITEL',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            130 => 
            array (
                'actor_id' => 131,
                'first_name' => 'JANE',
                'last_name' => 'JACKMAN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            131 => 
            array (
                'actor_id' => 132,
                'first_name' => 'ADAM',
                'last_name' => 'HOPPER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            132 => 
            array (
                'actor_id' => 133,
                'first_name' => 'RICHARD',
                'last_name' => 'PENN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            133 => 
            array (
                'actor_id' => 134,
                'first_name' => 'GENE',
                'last_name' => 'HOPKINS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            134 => 
            array (
                'actor_id' => 135,
                'first_name' => 'RITA',
                'last_name' => 'REYNOLDS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            135 => 
            array (
                'actor_id' => 136,
                'first_name' => 'ED',
                'last_name' => 'MANSFIELD',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            136 => 
            array (
                'actor_id' => 137,
                'first_name' => 'MORGAN',
                'last_name' => 'WILLIAMS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            137 => 
            array (
                'actor_id' => 138,
                'first_name' => 'LUCILLE',
                'last_name' => 'DEE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            138 => 
            array (
                'actor_id' => 139,
                'first_name' => 'EWAN',
                'last_name' => 'GOODING',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            139 => 
            array (
                'actor_id' => 140,
                'first_name' => 'WHOOPI',
                'last_name' => 'HURT',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            140 => 
            array (
                'actor_id' => 141,
                'first_name' => 'CATE',
                'last_name' => 'HARRIS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            141 => 
            array (
                'actor_id' => 142,
                'first_name' => 'JADA',
                'last_name' => 'RYDER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            142 => 
            array (
                'actor_id' => 143,
                'first_name' => 'RIVER',
                'last_name' => 'DEAN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            143 => 
            array (
                'actor_id' => 144,
                'first_name' => 'ANGELA',
                'last_name' => 'WITHERSPOON',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            144 => 
            array (
                'actor_id' => 145,
                'first_name' => 'KIM',
                'last_name' => 'ALLEN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            145 => 
            array (
                'actor_id' => 146,
                'first_name' => 'ALBERT',
                'last_name' => 'JOHANSSON',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            146 => 
            array (
                'actor_id' => 147,
                'first_name' => 'FAY',
                'last_name' => 'WINSLET',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            147 => 
            array (
                'actor_id' => 148,
                'first_name' => 'EMILY',
                'last_name' => 'DEE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            148 => 
            array (
                'actor_id' => 149,
                'first_name' => 'RUSSELL',
                'last_name' => 'TEMPLE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            149 => 
            array (
                'actor_id' => 150,
                'first_name' => 'JAYNE',
                'last_name' => 'NOLTE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            150 => 
            array (
                'actor_id' => 151,
                'first_name' => 'GEOFFREY',
                'last_name' => 'HESTON',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            151 => 
            array (
                'actor_id' => 152,
                'first_name' => 'BEN',
                'last_name' => 'HARRIS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            152 => 
            array (
                'actor_id' => 153,
                'first_name' => 'MINNIE',
                'last_name' => 'KILMER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            153 => 
            array (
                'actor_id' => 154,
                'first_name' => 'MERYL',
                'last_name' => 'GIBSON',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            154 => 
            array (
                'actor_id' => 155,
                'first_name' => 'IAN',
                'last_name' => 'TANDY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            155 => 
            array (
                'actor_id' => 156,
                'first_name' => 'FAY',
                'last_name' => 'WOOD',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            156 => 
            array (
                'actor_id' => 157,
                'first_name' => 'GRETA',
                'last_name' => 'MALDEN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            157 => 
            array (
                'actor_id' => 158,
                'first_name' => 'VIVIEN',
                'last_name' => 'BASINGER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            158 => 
            array (
                'actor_id' => 159,
                'first_name' => 'LAURA',
                'last_name' => 'BRODY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            159 => 
            array (
                'actor_id' => 160,
                'first_name' => 'CHRIS',
                'last_name' => 'DEPP',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            160 => 
            array (
                'actor_id' => 161,
                'first_name' => 'HARVEY',
                'last_name' => 'HOPE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            161 => 
            array (
                'actor_id' => 162,
                'first_name' => 'OPRAH',
                'last_name' => 'KILMER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            162 => 
            array (
                'actor_id' => 163,
                'first_name' => 'CHRISTOPHER',
                'last_name' => 'WEST',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            163 => 
            array (
                'actor_id' => 164,
                'first_name' => 'HUMPHREY',
                'last_name' => 'WILLIS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            164 => 
            array (
                'actor_id' => 165,
                'first_name' => 'AL',
                'last_name' => 'GARLAND',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            165 => 
            array (
                'actor_id' => 166,
                'first_name' => 'NICK',
                'last_name' => 'DEGENERES',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            166 => 
            array (
                'actor_id' => 167,
                'first_name' => 'LAURENCE',
                'last_name' => 'BULLOCK',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            167 => 
            array (
                'actor_id' => 168,
                'first_name' => 'WILL',
                'last_name' => 'WILSON',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            168 => 
            array (
                'actor_id' => 169,
                'first_name' => 'KENNETH',
                'last_name' => 'HOFFMAN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            169 => 
            array (
                'actor_id' => 170,
                'first_name' => 'MENA',
                'last_name' => 'HOPPER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            170 => 
            array (
                'actor_id' => 171,
                'first_name' => 'OLYMPIA',
                'last_name' => 'PFEIFFER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            171 => 
            array (
                'actor_id' => 172,
                'first_name' => 'GROUCHO',
                'last_name' => 'WILLIAMS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            172 => 
            array (
                'actor_id' => 173,
                'first_name' => 'ALAN',
                'last_name' => 'DREYFUSS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            173 => 
            array (
                'actor_id' => 174,
                'first_name' => 'MICHAEL',
                'last_name' => 'BENING',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            174 => 
            array (
                'actor_id' => 175,
                'first_name' => 'WILLIAM',
                'last_name' => 'HACKMAN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            175 => 
            array (
                'actor_id' => 176,
                'first_name' => 'JON',
                'last_name' => 'CHASE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            176 => 
            array (
                'actor_id' => 177,
                'first_name' => 'GENE',
                'last_name' => 'MCKELLEN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            177 => 
            array (
                'actor_id' => 178,
                'first_name' => 'LISA',
                'last_name' => 'MONROE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            178 => 
            array (
                'actor_id' => 179,
                'first_name' => 'ED',
                'last_name' => 'GUINESS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            179 => 
            array (
                'actor_id' => 180,
                'first_name' => 'JEFF',
                'last_name' => 'SILVERSTONE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            180 => 
            array (
                'actor_id' => 181,
                'first_name' => 'MATTHEW',
                'last_name' => 'CARREY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            181 => 
            array (
                'actor_id' => 182,
                'first_name' => 'DEBBIE',
                'last_name' => 'AKROYD',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            182 => 
            array (
                'actor_id' => 183,
                'first_name' => 'RUSSELL',
                'last_name' => 'CLOSE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            183 => 
            array (
                'actor_id' => 184,
                'first_name' => 'HUMPHREY',
                'last_name' => 'GARLAND',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            184 => 
            array (
                'actor_id' => 185,
                'first_name' => 'MICHAEL',
                'last_name' => 'BOLGER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            185 => 
            array (
                'actor_id' => 186,
                'first_name' => 'JULIA',
                'last_name' => 'ZELLWEGER',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            186 => 
            array (
                'actor_id' => 187,
                'first_name' => 'RENEE',
                'last_name' => 'BALL',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            187 => 
            array (
                'actor_id' => 188,
                'first_name' => 'ROCK',
                'last_name' => 'DUKAKIS',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            188 => 
            array (
                'actor_id' => 189,
                'first_name' => 'CUBA',
                'last_name' => 'BIRCH',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            189 => 
            array (
                'actor_id' => 190,
                'first_name' => 'AUDREY',
                'last_name' => 'BAILEY',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            190 => 
            array (
                'actor_id' => 191,
                'first_name' => 'GREGORY',
                'last_name' => 'GOODING',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            191 => 
            array (
                'actor_id' => 192,
                'first_name' => 'JOHN',
                'last_name' => 'SUVARI',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            192 => 
            array (
                'actor_id' => 193,
                'first_name' => 'BURT',
                'last_name' => 'TEMPLE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            193 => 
            array (
                'actor_id' => 194,
                'first_name' => 'MERYL',
                'last_name' => 'ALLEN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            194 => 
            array (
                'actor_id' => 195,
                'first_name' => 'JAYNE',
                'last_name' => 'SILVERSTONE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            195 => 
            array (
                'actor_id' => 196,
                'first_name' => 'BELA',
                'last_name' => 'WALKEN',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            196 => 
            array (
                'actor_id' => 197,
                'first_name' => 'REESE',
                'last_name' => 'WEST',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            197 => 
            array (
                'actor_id' => 198,
                'first_name' => 'MARY',
                'last_name' => 'KEITEL',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            198 => 
            array (
                'actor_id' => 199,
                'first_name' => 'JULIA',
                'last_name' => 'FAWCETT',
                'updated_at' => '2006-02-15 04:34:33',
            ),
            199 => 
            array (
                'actor_id' => 200,
                'first_name' => 'THORA',
                'last_name' => 'TEMPLE',
                'updated_at' => '2006-02-15 04:34:33',
            ),
        ));
        
        
    }
}
