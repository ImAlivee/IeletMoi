<?php
$temoignages_bd = [
    1 => [
        'link' => 'temoignages.php#BD',
        'titre' => 'Passe ta route',
        'sujet' => "Un inconnu n'arrête pas de me demander si je suis un homme.",
        'url' => 'public\image\bd\1.png',
        'temoignant-prenom' => 'Léo',
        'temoignant-age' => '19',
        'bd' => [
            'slide1' => '1',
            'slide2' => '2.',
            'slide3' => '3',
            'slide4' => '4.',
            'slide5' => '5',
            'slide6' => '6',
            'slide7' => '7',
            'slide8' => '8',
        ]
    ],
];

$temoignages_oral = [

    1 => [
        'audio' => 'public/image/temoignage/temoignage_emma_lemoine.mp3',
        'resume' => 'Relation Parent et enfants, ce quon dis sans pensé aux autres affecte nimporte qui autour de nous qui entendrait nos propos',
        'auteur' => [
            'nom' => 'Lemoine',
            'prenom' => 'Emma',
            'age' => '18',
        ]
    ],

    2 => [
        'audio' => 'public/image/temoignage/temoignage_aurore_regnier.mp3',
        'resume' => 'Marraine qui est passé de dire ma chérie à dire mon chérie contrairement aux parents, même si n’est pas les parents cela lui a quand même fait beaucoup de bien. Personnes qui demandent « T’es un homme ? » puis disent « Bah non ça se voit que t’en ai pas un » juste pour être méchant. Se faire interpeller par un couple dans la rue qui lui demande en boucle s’il est sûr d’être un homme.',
        'auteur' => [
            'nom' => 'Regnier',
            'prenom' => 'Aurore',
            'age' => '19',
        ]
    ],

    3 => [
        'audio' => 'public/image/temoignage/interview_alban_faitoutfourmigue_groupem.mp3',
        'resume' => 'Les gens ont tendances à résumé sa bisexualité à juste être Lesbienne alors que non elle aime aussi les hommes.',
        'auteur' => [
            'nom' => 'Faitout',
            'prenom' => 'Alban',
            'age' => '18',
        ]
    ],

    4 => [
        'audio' => 'public/image/temoignage/temoignage_emilie_becker_groupem.mp3',
        'img' => 'public\Image\accueil\preview_audio.svg',
        'resume' => 'Discussion en groupe qui amène à la différence de vision entre les couples gay et lesbiens, un gars du groupe trouve les couples gay dégueulasse mais va trouver un couple lesbien chaud, la même remarque avait été faite par son père',
        'auteur' => [
            'nom' => 'Becker',
            'prenom' => 'Emilie',
            'age' => '18',
        ]
    ],

    5 => [
        'audio' => 'public/image/temoignage/temoignage_alicia_gossiome_groupem.mp3',
        'link' => 'Temoignages.php#audio',
        'img' => 'public\image\accueil\preview_audio.svg',
        'resume' => 'Une connaissance pose des questions assez méchantes sur les raisons de sa bisexualité, la question qui l’a le plus marqué étant « Il t’es arrivé quoi pour être comme ça ? »',
        'auteur' => [
            'nom' => 'Gossiome',
            'prenom' => 'Alicia',
            'age' => '19',

    
        ]
    ],

];



$temoignages_ecrit = [

    1 => [
        'link' => 'Temoignages.php#ecrit',
        'titre' => 'Passe ta route',
        'resume' => "Un inconnu, en voiture, s'arrête sans aucune raison apparente. Il lui demande : t'es un mec ou une meuf ? <br> J'avais beau répondre clui-ci insistait encore et encore. Heureusement, mon ami et intervenu...",        'temoignage' => 'J’ai aussi une autre anecdote où j’étais en pleine rue et je marchais avec un ami, et enfaite il y a une voiture qui s’arrête devant nous, c’était euh un mari et sa femme. Ils s’arrêtent devant nous, ils étaient entrain de rouler il y avait un passage piéton et ils se sont arrêtés devant nous, il y avait ni feu rouge ni céder le passage et enfaite ils me demandent : « T’es un homme ou une femme ?? » du coup je réponds : « Je suis un homme » et ils disent : « T’es sûr ? » en insistant bien sur le t’es sûr et ils l’ont répété plusieurs fois et enfaite c’est hyper blessant de voir la curiosité des gens à ce point là et en plus en exagérant en disant : « T’es sûr ? t’es sûr ? » alors que je leur dis bien : « Oui je suis sûr ». Il a fallu que mon ami intervienne et dise : « Oui il est sûr, c’est un homme » en insistant bien là-dessus pour qu’ils s’en aillent. C’est vraiment des actions qui se font pas du tout, la curiosité est bien mais faut pas exagérer là-dessus. ',
        'temoignant' => [
            'prénom' => 'Léo',
            'age' => '19',
        ],
    ],
];

$membres = [
    1 => [
        'nom' => 'Regnier',
        'prenom' => 'Aurore',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179969909981314/92_REGNIER_Aurore.jpg?ex=657c7b3f&is=656a063f&hm=f1c30113f8d931e10fd9632f9a867bf53853bbd219a8871f2baaf252edf647f5&=&format=webp&width=423&height=563',
        'url' => 'aurore.php',
    ],
    2 => [
        'nom' => 'Faitout',
        'prenom' => 'Alban',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179970857914368/IMG_0145.JPG?ex=657c7b3f&is=656a063f&hm=405721bee469409dc95aad89aa569f981398139fa0d9d35f81e2dc5c18b5f986&=&format=webp&width=423&height=563',
        'url' => 'alban.php',
    ],
    3 => [
        'nom' => 'Leclaire',
        'prenom' => 'Raphaël',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179968580403281/57_LECLAIRE_Raphael.jpg?ex=657c7b3f&is=656a063f&hm=b6f0c8706e3c6bcff56708d6c4f8491a2589bc2254570126b694a806f18a2d20&=&format=webp&width=423&height=563',
        'url' => 'raphael.php',
    ],
    4 => [
        'nom' => 'Martin',
        'prenom' => 'Joshuoy',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179969075322970/64_MARTIN_Joshuoy.jpg?ex=657c7b3f&is=656a063f&hm=8c3cc352636e39d8368f7b734393171049e43bef8c9cac68a189607c7682f723&=&format=webp&width=423&height=563',
        'url' => 'joshuoy.php',
    ],
    5 => [
        'nom' => 'Becker',
        'prenom' => 'Émilie',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179967414378566/9_BECKER_Emilie.jpg?ex=657c7b3e&is=656a063e&hm=d55cdc4e7a034e843b6dc0b1b8ad4fe4ecd3c7549f624d065375aec6bac97d1a&=&format=webp&width=423&height=563',
        'url' => 'emilie.php',
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
        'url'=> 'alicia.php',
    ],
    8 => [
        'nom' => 'Moudio',
        'prenom' => 'Nathân',
        'photo' => 'https://media.discordapp.net/attachments/1153396669208084602/1180179969486377070/74_MOUDIO_BOUENYE_Nathan.jpg?ex=657c7b3f&is=656a063f&hm=c3013929837e8bfe4035eea9ca59047e6220a9769624655273c616b50e8d0519&=&format=webp&width=423&height=563',
        'url' => 'nathan.php',
    ],
];

$header = [
    'Contact' => 'contact.php',
    'Présentation' => 'presentation.php',
    'Témoignages' => 'temoignages.php',
    'Formulaire' => 'formulaire.php',
    'Accueil' => 'accueil.php',
];
$footer = [
    'mentions' => 'mentions_legales.php',
    'copyright' => ' ',
];

$reseaux = [

    1 => [
        'url' => 'https://instagram.com/iel_et_moi?igshid=MTk0NTkyODZkYg==',
        'image' => 'public\Image\imagesContacts\instagram.png"',
        'title' => 'Instagram',
    ],

    2 => [
        'url' => 'https://www.youtube.com/',
        'image' => 'public\Image\imagesContacts\youtube.png',
        'title' => 'Youtube',
    ],

    3 => [
        'url' => 'https://open.spotify.com/intl-fr',
        'image' => 'public\Image\imagesContacts\spotify.png',
        'title' => 'Spotify',
    ],

    4 => [
        'url' => 'https://www.tiktok.com/fr/',
        'image' => 'public\Image\imagesContacts\tiktok.png',
        'title' => 'TikTok',
    ],

];

$menu = [
    1 => [
    'url' => '',
    'title' => 'Copyright',
    ],

    2 => [
        'url' => '',
        'title' => 'Mentions légales',
    ],
];

$reseau = [

    'Instagram' => [
        'url' => 'https://instagram.com/iel_et_moi?igshid=MTk0NTkyODZkYg==',
        'image' => 'public\Image\imagesContacts\instagram.png',
    ],

    'Youtube' => [
        'url' => 'https://www.youtube.com/',
        'image' => 'public\Image\imagesContacts\youtube.png',
    ],

    'Spotify' => [  
        'url' => 'https://open.spotify.com/intl-fr',
        'image' => 'public\Image\imagesContacts\spotify.png',
    ],
    'Tiktok' => [
        'url' => 'https://www.tiktok.com/fr/',
        'image' => 'public\Image\imagesContacts\tiktok.png',
    ],
];
