<?php

namespace Model;

class SerieModel extends MediaModel
{
  protected array $_datas = [
    [
      "id" => 0,
      "cover" => "https://www.ecranlarge.com/uploads/image/001/371/n3isz1ml6dsnjmlt3tihhttrqwp-672.jpg",
      'title' => "L'enfer du devoir",
      'year' => 1987,
      'synopsis' => "L'enfer du devoir ou Commando Viêt Nam. Cette série raconte l'histoire de la compagnie Bravo, un peloton de jeunes soldats américains, pendant la guerre du Viêt Nam à la fin des années soixante. Tandis que les États-Unis sont agités par des mouvements pacifistes, ces jeunes hommes se retrouvent dans un milieu hostile où ils doivent faire face aussi bien aux troupes ennemies qu'à leurs propres angoisses. L'Enfer du devoir ne montre pas que les aspects atroces de la guerre mais dépeint aussi les problèmes humains que rencontrent, au quotidien, ces jeunes soldats.",
      'genre' => ["Guerre"],
      "numberOfEpisode" => 58,
      "numberOfSaison" => 3,
      "duration" => 42, // 0h42min
      "realisator_ID" => 34, // Steve Duncan
      "actors_ID" => [
        50
      ] // 50 = Terence Knox
    ],
    [
      "id" => 1,
      "cover" => "https://imgsrc.cineserie.com/2017/04/1481703.jpg?ver=1",
      'title' => "La Casa de Papel",
      'year' => 2017,
      'synopsis' => "Huit voleurs font une prise d'otages dans la Maison royale de la Monnaie d'Espagne, tandis qu'un génie du crime manipule la police pour mettre son plan à exécution.",
      'genre' => ["Drame", "Action"],
      "numberOfEpisode" => 48,
      "numberOfSaison" => 5,
      "duration" => 45, // 0h45min
      "realisator_ID" => 36, // Alex Pina
      "actors_ID" => [
        90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100
      ] // 90 = Alvaro Morte / 91 = Pedro Alonso / 92 = Ursula Corbero / 93 = Alba Flores / 94 = Miguel Hennan / 95 = Jaime Lorente / 96 = Enrique Arce / 97 = Itziar Ituno / 98 = Darko Peric / 99 = Luka Peros / 100 = Fernando Cayo
    ],
    [
      "id" => 2,
      "cover" => "https://i0.wp.com/www.popsfera.com.br/wp-content/uploads/2020/03/dc77ac7567dc5a89d71e99f604abf041.jpg?resize=550%2C812&ssl=1",
      'title' => "Les 100",
      'year' => 2014,
      'synopsis' => "",
      'genre' => ["Aventure", "Drame", "Science Fiction"],
      "numberOfEpisode" => 100,
      "numberOfSaison" => 7,
      "duration" => 42, // 0h42min
      "realisator_ID" => 37, // Jason Rothenberg
      "actors_ID" => [
        78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89
      ] // 78 = Elisa Taylor / 79 = Paige Turco / 80 = Bob Morley / 81 = Marie Avgeropoulos / 82 = Eli Goree / 83 = christopher Larkin / 84 = Devon Bostick / 85 = Isaiah Washigton / 86 = Henry Ian Cusick / 87 = Richard Harmon / 88 = Ricky Whittle / 89 = Lindsey Morgan
    ],
    [
      "id" => 3,
      "cover" => "https://fr.web.img5.acsta.net/pictures/17/08/31/23/41/560893.jpg",
      'title' => "Stranger Things",
      'year' => 2016,
      'synopsis' => "A Hawkins, en 1983 dans l'Indiana. Lorsque Will Byers disparaît de son domicile, ses amis se lancent dans une recherche semée d’embûches pour le retrouver. Dans leur quête de réponses, les garçons rencontrent une étrange jeune fille en fuite. Les garçons se lient d'amitié avec la demoiselle tatouée du chiffre \"11\" sur son poignet et au crâne rasé et découvrent petit à petit les détails sur son inquiétante situation. Elle est peut-être la clé de tous les mystères qui se cachent dans cette petite ville en apparence tranquille…",
      'genre' => ["Drame", "Fantastique", "Thriller"],
      "numberOfEpisode" => 42,
      "numberOfSaison" => 5,
      "duration" => 55, // 0h55min
      "realisator_ID" => 38, // Matt Duffer
      "actors_ID" => [
        59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69
      ] // 59 = David Harbour / 60 = Millie Bobby Brown / 61 = Finn Wolfhard / 62 = Gaten Matarazzo / 63 = Caleb McLaughlin / 64 = Noah Schnapp / 65 = Sadie Sink / 66 = Natalia Dyer / 67 = Charlie Heaton / 68 = Joe Kerry / 69 = Maya Hawke
    ],
    [
      "id" => 4,
      "cover" => "https://www.benzinemag.net/wp-content/uploads/2022/11/Walking-Dead-S11-P3-affiche.jpg",
      'title' => "The Walking Dead",
      'year' => 2010,
      'synopsis' => "Après une apocalypse ayant transformé la quasi-totalité de la population en zombies, un groupe d'hommes et de femmes mené par l'officier Rick Grimes tente de survivre... Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde devenu méconnaissable, à travers leur périple dans le Sud profond des États-Unis.",
      'genre' => ["Drame", "Epouvante-Horreur"],
      "numberOfEpisode" => 177,
      "numberOfSaison" => 11,
      "duration" => 44, // 0h44min
      "realisator_ID" => 39, // Glen Mazzara
      "actors_ID" => [
        58
      ] // 58 = Nordman Reedus
    ],
    [
      "id" => 5,
      "cover" => "https://www.abusdecine.com/wp-content/uploads/critique-serie-dr-house-affiche.jpeg",
      'title' => "Dr House",
      'year' => 2004,
      'synopsis' => "Le Dr Greg House est un médecin revêche qui ne fait confiance à personne, et encore moins à ses patients. Irrévérencieux et controversé, il n'en serait que plus heureux s'il pouvait ne pas adresser la parole à ses patients. Mais House est un brillant médecin. Et avec son équipe d'experts, il est prêt à tout pour résoudre les cas médicaux les plus mystérieux et sauver des vies.",
      'genre' => ["Comédie Dramatique", "Drame", "Médical"],
      "numberOfEpisode" => 177,
      "numberOfSaison" => 8,
      "duration" => 44, // 0h44min
      "realisator_ID" => 40, // David Shore
      "actors_ID" => [
        70, 71, 72, 73, 74, 75, 76, 77
      ] // 70 = Hugh Laurie / 71 = Robert Sean Leonard / 72 = Jesse Spencer / 73 = Omar Epps / 74 = Olivia Wilde / 75 = Peter Jacobson / 76 = Jennifer Morrison / 77 = Lisa Edelstein
    ],
    [
      "id" => 6,
      "cover" => "https://fr.web.img5.acsta.net/pictures/19/09/06/16/00/0433265.jpg",
      'title' => "Teen Wolf",
      'year' => 2011,
      'synopsis' => "Scott McCall est un adolescent tout ce qu'il y a de plus ordinaire. Il n'est pas le plus populaire de son lycée, il n'en est pas la risée non plus... Un soir, son meilleur ami Stiles le convainc de suivre en cachette les recherches de la police pour retrouver un corps dans les bois alentours. Au cours de cette expédition, il se retrouve nez à nez avec une bête étrange et particulièrement féroce. Il échappe de peu à cette attaque et, chanceux, avec une seule blessure: une vilaine morsure. Le lendemain, Scott se sent bizarre. Sans qu'il ne le sache encore, sa vie vient de changer. Il est devenu un loup-garou...",
      'genre' => ["Drame", "Fantastique"],
      "numberOfEpisode" => 100,
      "numberOfSaison" => 6,
      "duration" => 42, // 0h42min
      "realisator_ID" => 41, // Jeff Davis
      "actors_ID" => [
        53, 54, 55, 56, 57
      ] // 53 = Tyler Posey / 54 = Dylan O'Brien / 55 = Holland Roden / 56 = Jr Brown / 57 = Linden Ashby
    ],
    [
      "id" => 7,
      "cover" => "https://fr.web.img2.acsta.net/pictures/19/01/25/19/36/1398369.jpg",
      'title' => "Poursuis tes rêves",
      'year' => 2019,
      'synopsis' => "La charismatique Mia décroche une bourse dans une prestigieuse académie artistique où elle se fait de nouveaux amis, mais doit affronter la fille du directeur.",
      'genre' => ["Romance", "Musical"],
      "numberOfEpisode" => 31,
      "numberOfSaison" => 2,
      "duration" => 40, // 0h40min
      "realisator_ID" => 42, // sébastian Mellino
      "actors_ID" => [] // 
    ],
    [
      "id" => 8,
      "cover" => "https://image.tmdb.org/t/p/w500/qHF2UG4IeNyYIJb8NNrAOagQQl5.jpg",
      'title' => "Le caméléron",
      'year' => 1996,
      'synopsis' => "Utilisé par le Centre depuis son plus jeune âge pour des simulations qui ont coûté la vie à de nombreuses personnes, Jarod s'échappe. Pendant que Sydney et Mlle Parker sont à ses trousses, il tente par tous les moyens de retrouver sa famille. Il en profite aussi pour utiliser ses dons de \"caméléon humain\" afin de réparer quelques injustices.",
      'genre' => ["Drame", "Policier", "Thriller"],
      "numberOfEpisode" => 88,
      "numberOfSaison" => 4,
      "duration" => 42, // 0h42min
      "realisator_ID" => 35, // Craig W. Van Sickle
      "actors_ID" => [
        51, 52
      ] // 51 = Michael T. Weiss / 52 = Andrea Parker
    ],
  ];
}
