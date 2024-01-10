<?php
$temoignages_bd = [
    'titre' => '',
    'numero' => '',
    'contenu' => '',
    'url' => '',
    'auteur' => [
        'nom' => '',
        'prenom' => '',
        'age' => '',
    ],
];
$temoignages_oral = [

    1 => [
        'audio' => 'Témoignage_Emma_LEMOINE.mp3',
        'resume' => 'relation Parent et enfants, ce quon dis sans pensé aux autres affecte nimporte qui autour de nous qui entendrait nos propos',
        'auteur' => [
            'nom' => 'Lemoine',
            'prenom' => 'Emma',
            'age' => '18',
        ]
    ],

    2 => [
        'audio' => 'témoignage_Aurore_Regnier.mp3',
        'resume' => 'Marraine qui est passé de dire ma chérie à dire mon chérie contrairement aux parents, même si n’est pas les parents cela lui a quand même fait beaucoup de bien. Personnes qui demandent « T’es un homme ? » puis disent « Bah non ça se voit que t’en ai pas un » juste pour être méchant. Se faire interpeller par un couple dans la rue qui lui demande en boucle s’il est sûr d’être un homme.',
        'auteur' => [
            'nom' => 'Regnier',
            'prenom' => 'Aurore',
            'age' => '19',
        ]
    ],

    3 => [
        'audio' => 'Interview_Alban_FaitoutFourmigue_GroupeM.mp3',
        'resume' => 'Les gens ont tendances à résumé sa bisexualité à juste être Lesbienne alors que non elle aime aussi les hommes.',
        'auteur' => [
            'nom' => 'Faitout',
            'prenom' => 'Alban',
            'age' => '18',
        ]
    ],

    4 => [
        'audio' => 'Témoignage_Alicia_Gossiome_GroupeM.m4a',
        'resume' => 'Une connaissance pose des questions assez méchantes sur les raisons de sa bisexualité, la question qui l’a le plus marqué étant « Il t’es arrivé quoi pour être comme ça ? »',
        'auteur' => [
            'nom' => 'Gossiome',
            'prenom' => 'Alicia',
            'age' => '18',
        ]
    ],  
    
    5 => [
        'audio' => 'Temoignage_Emilie_BECKER_groupeM.mp3',
        'resume' => 'Discussion en groupe qui amène à la différence de vision entre les couples gay et lesbiens, un gars du groupe trouve les couples gay dégueulasse mais va trouver un couple lesbien chaud, la même remarque avait été faite par son père',
        'auteur' => [
            'nom' => 'Becker',
            'prenom' => 'Emilie',
            'age' => '18',
        ]
    ], 

];



$temoignages_ecrit = [

    1 => [
    'titre' => 'un peu de bienveillance',
    'temoignages' => 'Marraine qui est passé de dire ma chérie à dire mon chérie contrairement aux parents, même si n’est pas les parents cela lui a quand même fait beaucoup de bien. Personnes qui demandent « T’es un homme ? » puis disent « Bah non ça se voit que t’en ai pas un » juste pour être méchant. Se faire interpeller par un couple dans la rue qui lui demande en boucle s’il est sûr d’être un homme. ',
    'auteur' => [
        'nom' => 'Regnier',
        'prenom' => 'Aurore',
        'age' => '19',
    ],
],
];

$membres = [
    1 => [
        'nom' => 'Regnier',
        'prenom' => 'Aurore',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179969909981314/92_REGNIER_Aurore.jpg?ex=657c7b3f&is=656a063f&hm=f1c30113f8d931e10fd9632f9a867bf53853bbd219a8871f2baaf252edf647f5&=&format=webp&width=423&height=563',
        'url' => 'Aurore.php',
    ],
    2 => [
        'nom' => 'Faitout',
        'prenom' => 'Alban',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179970857914368/IMG_0145.JPG?ex=657c7b3f&is=656a063f&hm=405721bee469409dc95aad89aa569f981398139fa0d9d35f81e2dc5c18b5f986&=&format=webp&width=423&height=563',
        'url' => 'Alban.php',
    ],
    3 => [
        'nom' => 'Leclaire',
        'prenom' => 'Raphaël',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179968580403281/57_LECLAIRE_Raphael.jpg?ex=657c7b3f&is=656a063f&hm=b6f0c8706e3c6bcff56708d6c4f8491a2589bc2254570126b694a806f18a2d20&=&format=webp&width=423&height=563',
        'url' => 'Raphael.php',
    ],
    4 => [
        'nom' => 'Martin',
        'prenom' => 'Joshuoy',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179969075322970/64_MARTIN_Joshuoy.jpg?ex=657c7b3f&is=656a063f&hm=8c3cc352636e39d8368f7b734393171049e43bef8c9cac68a189607c7682f723&=&format=webp&width=423&height=563',
        'url' => 'Joshuoy.php',
    ],
    5 => [
        'nom' => 'Becker',
        'prenom' => 'Émilie',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179967414378566/9_BECKER_Emilie.jpg?ex=657c7b3e&is=656a063e&hm=d55cdc4e7a034e843b6dc0b1b8ad4fe4ecd3c7549f624d065375aec6bac97d1a&=&format=webp&width=423&height=563',
        'url' => 'Emilie.php',
    ],
    6 => [
        'nom' => 'Lemoine',
        'prenom' => 'Emma',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179970383945819/image0.jpg?ex=657c7b3f&is=656a063f&hm=7d7f41304e881723dfe9717afbea097c5a8c4116ccf114ebf3244e686c9995ef&=&format=webp&width=423&height=563',
        'url' => 'Emma.php',
    ],
    7 => [
        'nom' => 'Gossiome',
        'prenom' => 'Alicia',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179968060313760/43_GOSSIOME_Alicia.jpg?ex=657c7b3f&is=656a063f&hm=615de7e4b1f2faadee0cda007d65d6b8f4194e3e07216f4a5d6c5524e453669c&=&format=webp&width=423&height=563',
        'url' => 'Alicia.php',
    ],
    8 => [
        'nom' => 'Moudio',
        'prenom' => 'Nathân',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179969486377070/74_MOUDIO_BOUENYE_Nathan.jpg?ex=657c7b3f&is=656a063f&hm=c3013929837e8bfe4035eea9ca59047e6220a9769624655273c616b50e8d0519&=&format=webp&width=423&height=563',
        'url' => 'Nathan.php',
    ],
];
$menu = [
    'Accueil' => 'accueil.php',
    'Formulaire' => 'formulaire.php',
    'Temoignage' => 'temoignages.php',
    'Présentation' => 'presentation.php',
    'Contact' => 'contact.php',
];
$footer = [
    'mentions' => 'mentions_legales.php',
    'copyright' => ' ',
];
