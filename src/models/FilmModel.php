<?php

namespace Model;

class FilmModel extends MediaModel
{
  protected array $_datas = [
    [
      "id" => 0,
      "cover" => "https://www.ecranlarge.com/uploads/image/001/123/87otxmlm9ngpieemzhxcyc9jsad-550.jpg",
      'title' => "Des hommes d'honneur",
      'year' => 1992,
      'synopsis' => "Sur la base de Guantanamo Bay, à Cuba. Deux jeunes soldats, Louden et Dawson, corrigent un de leurs camarades, Santiago, lequel succombe à une crise cardiaque. Les deux GI ont-ils obéi au 'code rouge', qui désigne une opération disciplinaire ordonnée par leurs supérieurs hiérarchiques ? Joanne Galloway, avocate et officier dans la Navy, en est convaincue, mais l'armée refuse qu'elle instruise ce dossier. C'est le lieutenant Daniel Kaffee, fraîchement diplômé, qui défendra Louden et Dawson. Kaffee, davantage intéressé par le base-ball que par le prétoire, se voit adjoindre Galloway comme collaboratrice. Poussé par la dynamique avocate, il va tout tenter pour faire comparaître le vrai coupable à la barre...",
      'genre' => ["Drame"],
      "duration" => 138, // 2h18min
      "realisator_ID" => 0, // Rob Reiner
      "actors_ID" => [
        0, 1, 2, 3
      ] // 0 = Tom Cruise / 1 = Jack Nicholson / 2 = Demi Moore / 3 = Kevin Bacon
    ],
    [
      "id" => 1,
      "cover" => "https://fr.web.img6.acsta.net/pictures/210/604/21060483_20131125114549726.jpg",
      'title' => "Le Loup De Wall Street",
      'year' => 2013,
      'synopsis' => "L’argent. Le pouvoir. Les femmes. La drogue. Les tentations étaient là, à portée de main, et les autorités n’avaient aucune prise. Aux yeux de Jordan et de sa meute, la modestie était devenue complètement inutile. Trop n’était jamais assez…",
      'genre' => ["Drame", "Biopic"],
      "duration" => 179, // 2h59min
      "realisator_ID" => 1, // Martin Scorsese
      "actors_ID" => [
        4, 5, 6, 7, 8
      ] // 4 = Leonardo Dicaprio / 5 = Kyle Chandler / 6 = Margot Robbie / 7 = Jonah Hill / 8 = Jean Dujardin
    ],
    [
      "id" => 2,
      "cover" => "https://www.petit-bulletin.fr/multimedia/agenda/2019-09-11-17-19-37_352235affichedufilmmisery953x01.jpg",
      'title' => "Misery",
      'year' => 1991,
      'synopsis' => "Paul Sheldon, romancier et créateur du personnage de Misery dont il a écrit la saga est satisfait. Il vient enfin de faire mourir son héroïne et peut passer à autre chose. Il quitte l'hôtel de montagne où il a l'habitude d'écrire et prend la route de New York. Pris dans un violent blizzard, sa voiture dérape dans la neige et tombe dans un ravin. Paul Sheldon doit son salut à Annie Wilkes, infirmière retraitée qui vit dans un chalet isolé. Annie est justement une supporter inconditionnelle de la belle Misery.",
      'genre' => ["Drame", "Thriller"],
      "duration" => 107, // 2h59min
      "realisator_ID" => 0, // Rob Reiner
      "actors_ID" => [
        9, 10
      ] // 9 = James Caan / 10 = Kathy Bates
    ],
    [
      "id" => 3,
      "cover" => "https://www.ecranlarge.com/media/cache/1600x1200/uploads/image/001/433/v4c6wmvqulsjhmyjhnj72itfghm-620.jpg",
      'title' => "Les affranchis",
      'year' => 1990,
      'synopsis' => "Depuis sa plus tendre enfance, Henry Hill, né d'un père irlandais et d'une mère sicilienne, veut devenir gangster et appartenir à la Mafia. Adolescent dans les années cinquante, il commence par travailler pour le compte de Paul Cicero et voue une grande admiration pour Jimmy Conway, qui a fait du détournement de camions sa grande spécialité. Lucide et ambitieux, il contribue au casse des entrepôts de l'aéroport d'Idlewild et épouse Karen, une jeune Juive qu'il trompe régulièrement. Mais son implication dans le trafic de drogue le fera plonger...",
      'genre' => ["Thriller", "Drame"],
      "duration" => 145, // 2h25min
      "realisator_ID" => 1, // Martin Scorsese
      "actors_ID" => [
        11, null
      ] // 11 = Robert De Niro  / Y = 
    ],
    [
      "id" => 4,
      "cover" => "http://cinemalegyptis.org/app/uploads/sites/2/2022/09/LE-PARRAIN-aff.jpg",
      'title' => "Le Parrain",
      'year' => 1972,
      'synopsis' => "",
      'genre' => ["Policier", "Drame"],
      "duration" => 175, // 2h55min
      "realisator_ID" => 19, // Francis Ford Coppola
      "actors_ID" => [
        9, 39
      ] // 9 = James Caan / 39 = Al Pacino
    ],
    [
      "id" => 5,
      "cover" => "https://fr.web.img2.acsta.net/pictures/19/10/25/11/18/5224976.jpg",
      'title' => "titanic",
      'year' => 1998,
      'synopsis' => "Southampton, 10 avril 1912. Le paquebot le plus grand et le plus moderne du monde, réputé pour son insubmersibilité, le \"Titanic\", appareille pour son premier voyage. Quatre jours plus tard, il heurte un iceberg. A son bord, un artiste pauvre et une grande bourgeoise tombent amoureux.",
      'genre' => ["Drame", "Romance"],
      "duration" => 194, // 3h14min
      "realisator_ID" => 15, // James Cameron
      "actors_ID" => [
        4, 10, 36
      ] // 4 = Léonardo Dicaprio / 10 = Kathy Bates / 36 = Kate Winslet
    ],
    [
      "id" => 6,
      "cover" => "https://www.ecranlarge.com/uploads/image/001/125/buvhhewqn2kdbuf7brz1ufczxep-038.jpg",
      'title' => "Stand by Me",
      'year' => 1987,
      'synopsis' => "Un événement peu ordinaire va marquer la vie du jeune Gordie Lachance. Au cours de l’été 1959, un adolescent a disparu mystérieusement dans l'Oregon. Gordie et ses inséparables copains, Chris, Teddy et Vern savent qu'il est mort pour avoir approche de trop pres la voie ferrée, un train l'a heurte. Son corps git au fond des bois. C'est le frère de Vern qui l'a découvert. Les enfants décident de s'attribuer le scoop et partent pour la grande foret de Castle Rock. Cette aventure va rester pour Gordie et ses trois amis la plus étrange et la plus exaltante de leur vie.",
      'genre' => ["Aventure", "drame"],
      "duration" => 135, // 1h25min
      "realisator_ID" => 0, // Rob Reiner
      "actors_ID" => []
    ],
    [
      "id" => 7,
      "cover" => "https://fr.web.img3.acsta.net/pictures/22/03/29/15/12/0827894.jpg",
      'title' => "Top Gun: Maverick",
      'year' => 2022,
      'synopsis' => "Après avoir été l’un des meilleurs pilotes de chasse de la Marine américaine pendant plus de trente ans, Pete \“Maverick\" Mitchell continue à repousser ses limites en tant que pilote d'essai. Il refuse de monter en grade, car cela l’obligerait à renoncer à voler. Il est chargé de former un détachement de jeunes diplômés de l’école Top Gun pour une mission spéciale qu’aucun pilote n'aurait jamais imaginée. Lors de cette mission, Maverick rencontre le lieutenant Bradley “Rooster” Bradshaw, le fils de son défunt ami, le navigateur Nick “Goose” Bradshaw. Face à un avenir incertain, hanté par ses fantômes, Maverick va devoir affronter ses pires cauchemars au cours d’une mission qui exigera les plus grands des sacrifices.",
      'genre' => ["Action"],
      "duration" => 131, // 2h11min
      "realisator_ID" => 10, // Joseph Kosinski
      "actors_ID" => [
        0
      ] // 0 = Tom Cruise
    ],
    [
      "id" => 8,
      "cover" => "https://images.justwatch.com/poster/8707307/s718/minority-report.%7Bformat%7D",
      'title' => "Minority Report",
      'year' => 2002,
      'synopsis' => "A Washington, en 2054, la société du futur a éradiqué le meurtre en se dotant du système de prévention / détection / répression le plus sophistiqué du monde. Dissimulés au coeur du Ministère de la Justice, trois extra-lucides captent les signes précurseurs des violences homicides et en adressent les images à leur contrôleur, John Anderton, le chef de la \"Précrime\" devenu justicier après la disparition tragique de son fils. Celui-ci n'a alors plus qu'à lancer son escouade aux trousses du \"coupable\...
      Mais un jour se produit l'impensable : l'ordinateur lui renvoie sa propre image. D'ici 36 heures, Anderton aura assassiné un parfait étranger. Devenu la cible de ses propres troupes, Anderton prend la fuite. Son seul espoir pour déjouer le complot : dénicher sa future victime ; sa seule arme : les visions parcellaires, énigmatiques, de la plus fragile des Pré-Cogs : Agatha.",
      'genre' => ["Science Fiction"],
      "duration" => 145, // 2h25min
      "realisator_ID" => 2, // Steven Spielberg
      "actors_ID" => [
        0, 31
      ] // 0 = Tom Cruise / 31 = Colin Farrell
    ],
    [
      "id" => 9,
      "cover" => "https://fr.web.img6.acsta.net/medias/nmedia/18/35/24/27/18388163.jpg",
      'title' => "Collateral",
      'year' => 2004,
      'synopsis' => "Max est taxi de nuit à Los Angeles. Un soir, il se lie d'amitié avec une dénommée Annie Farrell, une belle femme procureur montée à l'arrière de son véhicule. Quelques minutes plus tard, c'est au tour d'un homme prénommé Vincent de monter dans le taxi. Un businessman, selon toute apparence, avec un emploi du temps chargé : pas moins de cinq rendez-vous à tenir dans la nuit. Max accepte de lui louer ses services jusqu'au petit matin, en échange de 600 dollars.
      Premier arrêt. Vincent entre dans un immeuble. Un coup de feu éclate aussitôt, un corps plonge dans le vide, s'écrasant sur le toit du taxi. Vincent redescend et, sous la menace de son arme, oblige Max à dissimuler le cadavre dans le coffre et à reprendre son mortel périple.
      Un chauffeur de taxi, un tueur implacable, cinq \"cibles\" à éliminer, des agents des stups et une équipe du FBI... Leurs destins se joueront cette nuit...",
      'genre' => ["Policier", "Drame", "Thriller"],
      "duration" => 120, // 2h00min
      "realisator_ID" => 14, // Michael Mann
      "actors_ID" => [
        0, 17
      ] // 0 = Tom Cruise / 17 = Jamie Foxx
    ],
    [
      "id" => 10,
      "cover" => "https://fr.web.img5.acsta.net/pictures/14/08/26/15/35/317753.jpg",
      'title' => "Né un 4 Juillet",
      'year' => 1990,
      'synopsis' => "Evocation de la terrible experience de Ron Kovic, né un 4 juillet, jour de la fête nationale américaine, excellent citoyen, Marine et engagé volontaire au Viet-nam. Il fut blessé en 1968 à la colonne vertébrale et paralysé à vie. Le film retrace sa terrible épopée pour retrouver un sens à la vie et nous conte vingt années de l'histoire américaine. En quelque sorte la suite de \"Platoon\" réalisée avec autant de soin et la participation de spécialistes des questions de guerre.",
      'genre' => ["Drame", "Guerre"],
      "duration" => 145, // 2h25min
      "realisator_ID" => 13, // Oliver Stone
      "actors_ID" => [
        0
      ] // 0 = Tom Cruise
    ],
    [
      "id" => 11,
      "cover" => "https://fr.web.img3.acsta.net/medias/nmedia/18/35/15/02/18364611.jpg",
      'title' => "Mystic River",
      'year' => 2003,
      'synopsis' => "Jimmy Markum, Dave Boyle et Sean Devine ont grandi ensemble dans les rues de Boston. Rien ne semblait devoir altérer le cours de leur amitié jusqu'au jour où Dave se fit enlever par un inconnu sous les yeux de ses amis. Leur complicité juvénile ne résista pas à un tel événement et leurs chemins se séparèrent inéluctablement.
      Jimmy sombra pendant quelque temps dans la délinquance, Sean s'engagea dans la police, Dave se replia sur lui-même, se contenta de petits boulots et vécut durant plusieurs années avec sa mère avant d'épouser Celeste.
      Une nouvelle tragédie rapproche soudain les trois hommes : Katie, la fille de Jimmy, est retrouvée morte au fond d'un fossé. Le père endeuillé ne rêve plus que d'une chose : se venger. Et Sean, affecté à l'enquête, croit connaître le coupable : Dave Boyle...",
      'genre' => ["Drame", "Thriller", "Policier"],
      "duration" => 137, // 2h17min
      "realisator_ID" => 7, // Clint Eastwood
      "actors_ID" => [
        3
      ] // 3 = Kevin Bacon
    ],
    [
      "id" => 12,
      "cover" => "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQmdunfprwHh186wwBAvv7iHsZrFdLUOEWsTRloH80ABCQEPHhq",
      'title' => "Impitoyable",
      'year' => 1992,
      'synopsis' => "Kansas 1880. William Munny, redoutable hors-la-loi reconverti dans l'élevage va, à la demande d'un jeune tueur, reprendre du service pour venger une prostituée défigurée par un cow-boy sadique.",
      'genre' => ["Western", "Drame"],
      "duration" => 131, // 2h11min
      "realisator_ID" => 7, // Clint Eastwood
      "actors_ID" => [
        25, 43
      ] // 25 = Morgan Freeman / 43 = Clint Eastwood
    ],
    [
      "id" => 13,
      "cover" => "https://media.services.cinergy.ch/media/box1600/880057acd1fd4195712f768c1e9eb493be625360.jpg",
      'title' => "Gran Torino",
      'year' => 2009,
      'synopsis' => "Walt Kowalski est un ancien de la guerre de Corée, un homme inflexible, amer et pétri de préjugés surannés. Après des années de travail à la chaîne, il vit replié sur lui-même, occupant ses journées à bricoler, traînasser et siroter des bières. Avant de mourir, sa femme exprima le voeu qu'il aille à confesse, mais Walt n'a rien à avouer, ni personne à qui parler. Hormis sa chienne Daisy, il ne fait confiance qu'à son M-1, toujours propre, toujours prêt à l'usage...
      Ses anciens voisins ont déménagé ou sont morts depuis longtemps. Son quartier est aujourd'hui peuplé d'immigrants asiatiques qu'il méprise, et Walt ressasse ses haines, innombrables - à l'encontre de ses voisins, des ados Hmong, latinos et afro-américains \"qui croient faire la loi\", de ses propres enfants, devenus pour lui des étrangers. Walt tue le temps comme il peut, en attendant le grand départ, jusqu'au jour où un ado Hmong du quartier tente de lui voler sa précieuse Ford Gran Torino... Walt tient comme à la prunelle de ses yeux à cette voiture fétiche, aussi belle que le jour où il la vit sortir de la chaîne.
      Lorsque le jeune et timide Thao tente de la lui voler sous la pression d'un gang, Walt fait face à la bande, et devient malgré lui le héros du quartier. Sue, la soeur aînée de Thao, insiste pour que ce dernier se rachète en travaillant pour Walt. Surmontant ses réticences, ce dernier confie au garçon des \"travaux d'intérêt général\" au profit du voisinage. C'est le début d'une amitié inattendue, qui changera le cours de leur vie.
      Grâce à Thao et sa gentille famille, Walt va découvrir le vrai visage de ses voisins et comprendre ce qui le lie à ces exilés, contraints de fuir la violence... comme lui, qui croyait fermer la porte sur ses souvenirs aussi aisément qu'il enfermait au garage sa précieuse Gran Torino...",
      'genre' => ["Drame", "Thriller"],
      "duration" => 196, // 1h56min
      "realisator_ID" => 7, // Clint Eastwood
      "actors_ID" => [
        43
      ] // 43 = Clint Eastwook
    ],
    [
      "id" => 14,
      "cover" => "https://fr.web.img2.acsta.net/pictures/14/09/23/10/28/237103.jpg",
      'title' => "Le bon, la brute et le truand",
      'year' => 1968,
      'synopsis' => "Pendant la Guerre de Sécession, trois hommes, préférant s'intéresser à leur profit personnel, se lancent à la recherche d'un coffre contenant 200 000 dollars en pièces d'or volés à l'armée sudiste. Tuco sait que le trésor se trouve dans un cimetière, tandis que Joe connaît le nom inscrit sur la pierre tombale qui sert de cache. Chacun a besoin de l'autre. Mais un troisième homme entre dans la course : Setenza, une brute qui n'hésite pas à massacrer femmes et enfants pour parvenir à ses fins.",
      'genre' => ["Western"],
      "duration" => 180, // 3h00min
      "realisator_ID" => 22, // Sergio Leone
      "actors_ID" => [
        43
      ] // 43 = Clint Eastwood
    ],
    [
      "id" => 15,
      "cover" => "https://pariscinemaclub.com/wp-content/uploads/2022/07/et-pour-quelques-dollars-de-plus-vt-scaled.jpeg",
      'title' => "Et pour quelques dollars de plus",
      'year' => 1966,
      'synopsis' => "L'indien, bandit cruel et fou, s'est évadé de prison. Il se prépare à attaquer la banque d'El Paso, la mieux gardée de tout l'Ouest, avec une quinzaine d'autres malfaiteurs. Le \"Manchot\" et le Colonel Douglas Mortimer, deux chasseurs de primes concurrents, décident, après une confrontation tendue, de faire finalement équipe pour arrêter les bandits. Mais leurs motivations ne sont pas forcément les mêmes...",
      'genre' => ["Western"],
      "duration" => 130, // 2h10min
      "realisator_ID" => 22, // Sergio Leone
      "actors_ID" => [
        43
      ] // 43 = Clint Eastwood
    ],
    [
      "id" => 16,
      "cover" => "https://fr.web.img3.acsta.net/medias/nmedia/18/72/82/16/19187639.jpg",
      'title' => "Invictus",
      'year' => 2010,
      'synopsis' => "En 1994, l'élection de Nelson Mandela consacre la fin de l'Apartheid, mais l'Afrique du Sud reste une nation profondément divisée sur le plan racial et économique. Pour unifier le pays et donner à chaque citoyen un motif de fierté, Mandela mise sur le sport, et fait cause commune avec le capitaine de la modeste équipe de rugby sud-africaine. Leur pari : se présenter au Championnat du Monde 1995...",
      'genre' => ["Drame", "Biopic", "Historique"],
      "duration" => 134, // 2h12min
      "realisator_ID" => 7, // Clint Eastwood
      "actors_ID" => [
        25, 28
      ] // 25 = Morgan Freeman / 28 = Matt Damon
    ],
    [
      "id" => 17,
      "cover" => "https://fr.web.img2.acsta.net/medias/nmedia/18/35/91/33/19255605.jpg",
      'title' => "Seven",
      'year' => 1996,
      'synopsis' => "Pour conclure sa carrière, l'inspecteur Somerset, vieux flic blasé, tombe à sept jours de la retraite sur un criminel peu ordinaire. John Doe, c'est ainsi que se fait appeler l'assassin, a decidé de nettoyer la societé des maux qui la rongent en commettant sept meurtres basés sur les sept pechés capitaux: la gourmandise, l'avarice, la paresse, l'orgueil, la luxure, l'envie et la colère.",
      'genre' => ["Policier", "Thriller"],
      "duration" => 130, // 2h10min
      "realisator_ID" => 6, // David Fincher
      "actors_ID" => [
        24, 25
      ] // 24 = Brad Pitt / 25 = Morgan Freeman
    ],
    [
      "id" => 18,
      "cover" => "https://fr.web.img4.acsta.net/medias/00/05/30/000530_af.jpg",
      'title' => "Will Hunting",
      'year' => 1998,
      'synopsis' => "Will Hunting est un authentique génie mais également un rebelle aux élans imprévisibles. Il est né dans le quartier populaire de South Boston et a arrêté très tôt ses études, refusant le brillant avenir que pouvait lui procurer son intelligence. Il vit désormais entouré d'une bande de copains et passe son temps dans les bars a chercher la bagarre et à commettre quelques petits délits qui risquent bien de l'envoyer en prison. C'est alors que ses dons prodigieux en mathématiques attirent l'attention du professeur Lambeau, du Massachusetts Institute of Technology...",
      'genre' => ["Drame"],
      "duration" => 126, // 2h06min
      "realisator_ID" => 9, // Gus Van Sant
      "actors_ID" => [
        28, 29, 30
      ] // 28 = Matt Damon / 29 = Ben Affleck / 30 = Robin Williams
    ],
    [
      "id" => 19,
      "cover" => "https://fr.web.img3.acsta.net/pictures/15/09/08/15/20/305329.jpg",
      'title' => "Seul sur Mars",
      'year' => 2015,
      'synopsis' => "Lors d’une expédition sur Mars, l’astronaute Mark Watney (Matt Damon) est laissé pour mort par ses coéquipiers, une tempête les ayant obligés à décoller en urgence. Mais Mark a survécu et il est désormais seul, sans moyen de repartir, sur une planète hostile. Il va devoir faire appel à son intelligence et son ingéniosité pour tenter de survivre et trouver un moyen de contacter la Terre. A 225 millions de kilomètres, la NASA et des scientifiques du monde entier travaillent sans relâche pour le sauver, pendant que ses coéquipiers tentent d’organiser une mission pour le récupérer au péril de leurs vies.",
      'genre' => ["Science Fiction"],
      "duration" => 144, // 2h24min
      "realisator_ID" => 23, // Ridley Scott
      "actors_ID" => [
        28
      ] // 28 = Matt Damon
    ],
    [
      "id" => 20,
      "cover" => "https://www.ecranlarge.com/uploads/image/001/123/mnhthfspwkffe98zggchx6oqqe3-488.jpg",
      'title' => "Le Cercle des Poètes disparus",
      'year' => 1990,
      'synopsis' => "Todd Anderson, un garçon plutôt timide, est envoyé dans la prestigieuse académie de Welton, réputée pour être l'une des plus fermées et austères des États-Unis, là où son frère avait connu de brillantes études.

      C'est dans cette université qu'il va faire la rencontre d'un professeur de lettres anglaises plutôt étrange, Mr Keating, qui les encourage à toujours refuser l'ordre établi. Les cours de Mr Keating vont bouleverser la vie de l'étudiant réservé et de ses amis...",
      'genre' => ["Comédie Dramatique"],
      "duration" => 128, // 2h08min
      "realisator_ID" => 24, // Peter Weir
      "actors_ID" => [
        30
      ] // 30 = Robin Williams
    ],
    [
      "id" => 21,
      "cover" => "https://fr.web.img6.acsta.net/pictures/14/08/14/11/53/435872.jpg",
      'title' => "Hook ou la revanche du capitaine crochet",
      'year' => 1992,
      'synopsis' => "Peter Banning alias Peter Pan est devenu un brillant avocat d'affaires qui a tout oublie de ses merveilleuses aventures. Mais le terrible capitaine Crochet, lui, n'a pas oublie. Pour enfin, régler leur compte, il enlève une nuit Jack et Maggie, les enfants de Peter. C'est en compagnie de Tinkerbell que Peter s'envole a nouveau pour le pays de Nulle Part.",
      'genre' => ["Aventure", "Comédie", "Famille", "Fantastique"],
      "duration" => 136, // 2h59min
      "realisator_ID" => 2, // Steven Spielberg
      "actors_ID" => [
        30
      ] // 30 = Robin Williams
    ],
    [
      "id" => 22,
      "cover" => "https://fr.web.img6.acsta.net/pictures/17/07/04/17/01/228769.jpg",
      'title' => "Madame Doubtfire",
      'year' => 1994,
      'synopsis' => "Privé, à la suite de son divorce, de ses trois enfants qu'il adore, Daniel Hillard, doubleur de dessins animés, met en oeuvre tous ses talents d'acteur et d'imitateur et se transforme en respectable gouvernante irlandaise. Lorsque Mme Doubtfire se presente dans la famille Hillard, elle est acceptée a l'unanimité.",
      'genre' => ["Comédie", "Drame"],
      "duration" => 125, // 2h05min
      "realisator_ID" => 25, // Chris Columbus
      "actors_ID" => [
        30, 44, 45
      ] // 30 = Robin Williams / 44 = Sally Field / 45 = Pierce Brosnan
    ],
    [
      "id" => 23,
      "cover" => "https://fr.web.img3.acsta.net/pictures/14/08/14/12/20/198981.jpg",
      'title' => "Jumanji",
      'year' => 1996,
      'synopsis' => "Lors d'une partie de Jumanji, un jeu très ancien, le jeune Alan est propulsé sous les yeux de son amie d'enfance, Sarah, dans un étrange pays. Il ne pourra s'en échapper que lorsqu'un autre joueur reprendra la partie et le libèrera sur un coup de dés. Vingt-six ans plus tard, il retrouve le monde réel par le coup de dés de deux autres jeunes joueurs.",
      'genre' => ["Fantastique", "Aventure"],
      "duration" => 140, // 1h40min
      "realisator_ID" => 26, // Joe Johnston
      "actors_ID" => [
        30
      ] // 30 = Robin Williams
    ],
    [
      "id" => 24,
      "cover" => "https://fr.web.img2.acsta.net/medias/04/22/53/042253_af.jpg",
      'title' => "Il faut sauver le soldat Ryan",
      'year' => 1998,
      'synopsis' => "Alors que les forces alliées débarquent à Omaha Beach, Miller doit conduire son escouade derrière les lignes ennemies pour une mission particulièrement dangereuse : trouver et ramener sain et sauf le simple soldat James Ryan, dont les trois frères sont morts au combat en l'espace de trois jours. Pendant que l'escouade progresse en territoire ennemi, les hommes de Miller se posent des questions. Faut-il risquer la vie de huit hommes pour en sauver un seul ?",
      'genre' => ["Guerre", "Drame"],
      "duration" => 183, // 2h59min
      "realisator_ID" => 2, // Steven Spielberg
      "actors_ID" => [
        28, 34, 35
      ] // 28 = Matt Damon / 34 = Tom Hanks / 35 = Vin Diesel
    ],
    [
      "id" => 25,
      "cover" => "https://www.ecranlarge.com/media/cache/1600x1200/uploads/image/001/181/la-liste-de-schindler-affiche-francaise-1181457.jpg",
      'title' => "La liste de Schindler",
      'year' => 1994,
      'synopsis' => "Evocation des années de guerre d'Oskar Schindler, fils d'industriel d'origine autrichienne rentré à Cracovie en 1939 avec les troupes allemandes. Il va, tout au long de la guerre, protéger des juifs en les faisant travailler dans sa fabrique et en 1944 sauver huit cents hommes et trois cents femmes du camp d'extermination de Auschwitz-Birkenau.",
      'genre' => ["Historique", "Guerre"],
      "duration" => 195, // 3h15min
      "realisator_ID" => 2, // Steven Spielberg
      "actors_ID" => []
    ],
    [
      "id" => 26,
      "cover" => "https://fr.web.img4.acsta.net/medias/nmedia/00/02/36/52/affet.jpg",
      'title' => "E.T L'extra-terrestre",
      'year' => 1982,
      'synopsis' => "Une soucoupe volante atterrit en pleine nuit près de Los Angeles. Quelques extraterrestres, envoyés sur Terre en mission d'exploration botanique, sortent de l'engin, mais un des leurs s'aventure au-delà de la clairière où se trouve la navette. Celui-ci se dirige alors vers la ville. C'est sa première découverte de la civilisation humaine. Bientôt traquée par des militaires et abandonnée par les siens, cette petite créature apeurée se nommant E.T. se réfugie dans une résidence de banlieue.

      Elliot, un garçon de dix ans, le découvre et lui construit un abri dans son armoire. Rapprochés par un échange télépathique, les deux êtres ne tardent pas à devenir amis. Aidé par sa soeur Gertie et son frère aîné Michael, Elliot va alors tenter de garder la présence d'E.T. secrète.",
      'genre' => ["Science Fiction", "Famille", "Aventure"],
      "duration" => 120, // 2h00min
      "realisator_ID" => 2, // Steven Spielberg
      "actors_ID" => []
    ],
    [
      "id" => 27,
      "cover" => "https://fr.web.img4.acsta.net/pictures/20/07/21/16/53/1319265.jpg",
      'title' => "Jurassic Park",
      'year' => 1993,
      'synopsis' => "Ne pas réveiller le chat qui dort... C'est ce que le milliardaire John Hammond aurait dû se rappeler avant de se lancer dans le \"clonage\" de dinosaures. C'est à partir d'une goutte de sang absorbée par un moustique fossilisé que John Hammond et son équipe ont réussi à faire renaître une dizaine d'espèces de dinosaures. Il s'apprête maintenant avec la complicité du docteur Alan Grant, paléontologue de renom, et de son amie Ellie, à ouvrir le plus grand parc à thème du monde. Mais c'était sans compter la cupidité et la malveillance de l'informaticien Dennis Nedry, et éventuellement des dinosaures, seuls maîtres sur l'île...",
      'genre' => ["Aventrue", "Science Fiction"],
      "duration" => 122, // 2h02min
      "realisator_ID" => 2, // Steven Spielberg
      "actors_ID" => [
        34
      ] // 34 = Samuel L. Jackson
    ],
    [
      "id" => 28,
      "cover" => "https://www.ecranlarge.com/uploads/image/001/121/w5ybcq0eoogdfr0yr2gshw3fqnv-396.jpg",
      'title' => "Coach Carter",
      'year' => 2005,
      'synopsis' => "L'histoire vraie de Ken Carter, l'entraîneur de basket d'une équipe de lycée, qui devint célèbre en 1999 après avoir renvoyé ses joueurs à leurs chères études, déclarant forfait deux matchs de suite alors que l'équipe était invaincue, parce que ces derniers n'avaient pas obtenu des résultats scolaires suffisants.",
      'genre' => ["Comédie Dramatique", "Biopic", "Drame"],
      "duration" => 137, // 2h17min
      "realisator_ID" => 3, // Thomas Carter
      "actors_ID" => [
        12, 13, 14, 15, 16
      ] // 12 = Channing tatum / 13 = Rick Gonzalez / 14 = Robert Ri'Chard / 15 = Antwon Tanner / 16 = Ashanti
    ],
    [
      "id" => 29,
      "cover" => "https://p0.storage.canalblog.com/01/84/1349409/123406497_o.jpg",
      'title' => "White House Down",
      'year' => 2013,
      'synopsis' => "Membre de la police du Capitole, John Cale vient de se voir refuser le job dont il rêvait : assurer la protection du président des États-Unis. Espérant éviter à sa fille une déception lorsqu’il lui apprendra la nouvelle, il l’emmène visiter la Maison-Blanche. C’est à ce moment qu’un groupe paramilitaire lourdement armé attaque le bâtiment. Alors que le gouvernement américain sombre dans le chaos, Cale va tenter de sauver sa fille, le président, et le pays tout entier…",
      'genre' => ["Action"],
      "duration" => 132, // 2h12min
      "realisator_ID" => 4, // Roland Emmerich
      "actors_ID" => [
        12, 17, 18, 19, 75
      ] // 12 = Channing tatum / 17 = Jamie Foxx / 18 = Maggie Gyllenhaal / 19 = Jason Clarke / 75 = Peter Jacobson
    ],
    [
      "id" => 30,
      "cover" => "https://www.avoir-alire.com/IMG/arton28859.jpg",
      'title' => "Independence Day",
      'year' => 1996,
      'synopsis' => "Une immense soucoupe volante envahit le ciel terrestre, libérant un nombre infini de plus petites soucoupes qui prennent position au-dessus des plus grandes villes du monde. Un informaticien new-yorkais décrypte les signaux émanant des étranges voyageurs. Ils ne sont pas du tout amicaux et ces extraterrestres se préparent à attaquer la Terre.",
      'genre' => ["Action"],
      "duration" => 145, // 2h25min
      "realisator_ID" => 4, // Roland Emmerich
      "actors_ID" => [
        20
      ] // 20 = Will Smith
    ],
    [
      "id" => 31,
      "cover" => "https://fr.web.img3.acsta.net/medias/nmedia/18/86/66/97/19853893.jpg",
      'title' => "The Patriot, le chemin de la liberté",
      'year' => 2000,
      'synopsis' => "Caroline du Sud, 1776. Le conflit entre les independantistes et les Anglais semble inevitable. Benjamin Martin sait trop bien ce qu'est une guerre et il n'en veut pas. Cet ancien heros des combats contre les Francais et les Indiens n'ignore rien de la violence des affrontements armes... Aujourd'hui veuf, il eleve seul ses sept enfants dans sa plJurassic Parkantation. Son fils aine, Gabriel, s'engage contre l'avis de son pere. Lorsque les troupes anglaises, commandees par le colonel Tavington, arrivent aux portes de sa propriete, il est trop tard.",
      'genre' => ["Historique", "Drame", "Guerre", "Action"],
      "duration" => 165, // 2h45min
      "realisator_ID" => 4, // Roland Emmerich
      "actors_ID" => [
        21
      ] // 21 = Mel Gibson
    ],
    [
      "id" => 32,
      "cover" => "https://imgsrc.cineserie.com/2016/11/301218.jpg?ver=1",
      'title' => "Ennemi d'Etat",
      'year' => 1999,
      'synopsis' => "Robert Clayton Dean, avocat engagé depuis ses débuts dans une lutte acharnée contre la mafia, rencontre fortuitement un ami d'enfance, témoin malgré lui d'un meurtre politique, ce qui plonge aussitôt l'avocat dans un engrenage infernal. Il devient ainsi le dernier possesseur de la seule preuve existante du crime commis par Thomas Reynolds, le directeur de la NSA, l'organisation gouvernementale la plus secrète et la plus puissante des Etats-Unis, envers un député. Reynolds va déployer toutes ses ressources pour neutraliser et discréditer Dean.",
      'genre' => ["Espionnage", "Action", "Thriller"],
      "duration" => 133, // 2h13min
      "realisator_ID" => 27, // Tony Scott
      "actors_ID" => [
        20
      ] // 20 = Will Smith
    ],
    [
      "id" => 33,
      "cover" => "https://images-na.ssl-images-amazon.com/images/S/pv-target-images/4417e773c2883f0b38173bbf5f04dd5f6a5060539fd79023eb35112e5e027537._RI_V_TTW_.jpg",
      'title' => "Bad Boys",
      'year' => 1995,
      'synopsis' => "Si Mike Lowrey est un séducteur invéteré, héritier d'une fortune et policier par passion, son collègue et ami Marcus Burnett est un homme rangé, marié et père de famille. Leur amitié ne les empêche pas d'avoir des méthodes parfaitement différentes. Mais la disparition de cent kilos d'héroine, dérobés dans les locaux mêmes de la brigade des stups, va leur faire oublier leur concept sur la façon d'exercer leur métier, pour se lancer a la poursuite des voleurs.",
      'genre' => ["Action", "Comédie", "Policier"],
      "duration" => 119, // 1h59min
      "realisator_ID" => 28, // Michael Bay
      "actors_ID" => [
        20, 46
      ] // 20 = Will Smith / 46 = Martin Lawrence
    ],
    [
      "id" => 34,
      "cover" => "https://fr.web.img3.acsta.net/pictures/16/09/02/19/16/302469.jpg",
      'title' => "Tu ne tueras point",
      'year' => 2016,
      'synopsis' => "Quand la Seconde Guerre mondiale a éclaté, Desmond, un jeune américain, s’est retrouvé confronté à un dilemme : comme n’importe lequel de ses compatriotes, il voulait servir son pays, mais la violence était incompatible avec ses croyances et ses principes moraux. Il s’opposait ne serait-ce qu’à tenir une arme et refusait d’autant plus de tuer.

      Il s’engagea tout de même dans l’infanterie comme médecin. Son refus d’infléchir ses convictions lui valut d’être rudement mené par ses camarades et sa hiérarchie, mais c’est armé de sa seule foi qu’il est entré dans l’enfer de la guerre pour en devenir l’un des plus grands héros. Lors de la bataille d’Okinawa sur l’imprenable falaise de Maeda, il a réussi à sauver des dizaines de vies seul sous le feu de l’ennemi, ramenant en sureté, du champ de bataille, un à un les soldats blessés.",
      'genre' => ["Guerre", "Drame", "Biopic"],
      "duration" => 140, // 2h20min
      "realisator_ID" => 5, // Mel Gibson
      "actors_ID" => [
        23
      ] // 23 = Andrew Garfield
    ],
    [
      "id" => 35,
      "cover" => "https://m.media-amazon.com/images/M/MV5BMzkzMmU0YTYtOWM3My00YzBmLWI0YzctOGYyNTkwMWE5MTJkXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg",
      'title' => "Braveheart",
      'year' => 1995,
      'synopsis' => "Evocation de la vie tumultueuse de William Wallace, héros et symbole de l'indépendance écossaise, qui à la fin du XIIIe siècle affronta les troupes du roi d'Angleterre Edward I qui venaient d'envahir son pays.",
      'genre' => ["Biopic", "Drame"],
      "duration" => 145, // 2h45min
      "realisator_ID" => 5, // Mel Gibson
      "actors_ID" => [
        21, 22
      ] // 21 = Mel Gibson / 22 = Sophie Marceau
    ],
    [
      "id" => 36,
      "cover" => "https://fr.web.img5.acsta.net/medias/nmedia/18/62/88/28/18657263.jpg",
      'title' => "L'Arme Fatale",
      'year' => 1987,
      'synopsis' => "Deux policiers de Los Angeles, Martin Riggs et Roger Murtaugh, se retrouvent coéquipiers sur une même affaire. Les deux hommes, aux caractères franchement opposés, finissent par s'apprécier et doivent bientôt faire montre de toutes leurs qualités lorsque la fille de Murtaugh est enlevée par d'anciens agents des forces spéciales devenus trafiquants de drogue.",
      'genre' => ["Action", "Comédie", "Policier"],
      "duration" => 110, // 1h50min
      "realisator_ID" => 29, // Richard Donner
      "actors_ID" => [
        21, 47
      ] // 21 = Mel Gibson / 47 = Danny Glover
    ],
    [
      "id" => 37,
      "cover" => "https://brunodondero.files.wordpress.com/2020/10/the-social-network.jpg",
      'title' => "The Social Network",
      'year' => 2010,
      'synopsis' => "Une soirée bien arrosée d'octobre 2003, Mark Zuckerberg, un étudiant qui vient de se faire plaquer par sa petite amie, pirate le système informatique de l'Université de Harvard pour créer un site, une base de données de toutes les filles du campus. Il affiche côte à côte deux photos et demande à l'utilisateur de voter pour la plus canon. Il baptise le site Facemash. Le succès est instantané : l'information se diffuse à la vitesse de l'éclair et le site devient viral, détruisant tout le système de Harvard et générant une controverse sur le campus à cause de sa misogynie. Mark est accusé d'avoir violé intentionnellement la sécurité, les droits de reproduction et le respect de la vie privée. C'est pourtant à ce moment qu'est né ce qui deviendra Facebook. Peu après, Mark crée thefacebook.com, qui se répand comme une trainée de poudre d'un écran à l'autre d'abord à Harvard, puis s'ouvre aux principales universités des États-Unis, de l'Ivy League à Silicon Valley, avant de gagner le monde entier...
      Cette invention révolutionnaire engendre des conflits passionnés. Quels ont été les faits exacts, qui peut réellement revendiquer la paternité du réseau social planétaire ? Ce qui s'est imposé comme l'une des idées phares du XXIe siècle va faire exploser l'amitié de ses pionniers et déclencher des affrontements aux enjeux colossaux...",
      'genre' => ["Drame"],
      "duration" => 120, // 2h00min
      "realisator_ID" => 6, // David Ficher
      "actors_ID" => [
        23, 26, 27
      ] // 23 = Andrew Garfield / 26 = Jesse Eisenberg / 27 = Justin Timberlake
    ],
    [
      "id" => 38,
      "cover" => "https://fr.web.img4.acsta.net/pictures/210/082/21008214_20130524171741313.jpg",
      'title' => "Insaisissables",
      'year' => 2013,
      'synopsis' => "« Les Quatre Cavaliers », un groupe de brillants magiciens et illusionnistes, viennent de donner deux spectacles de magie époustouflants : le premier en braquant une banque sur un autre continent, le deuxième en transférant la fortune d’un banquier véreux sur les comptes en banque du public. Deux agents spéciaux du FBI et d’Interpol sont déterminés à les arrêter avant qu’ils ne mettent à exécution leur promesse de réaliser des braquages encore plus audacieux. Ils font appel à Thaddeus, spécialiste reconnu pour expliquer les tours de magie les plus sophistiqués. Alors que la pression s’intensifie, et que le monde entier attend le spectaculaire tour final des Cavaliers, la course contre la montre commence.",
      'genre' => ["Thriller", "Policier"],
      "duration" => 125, // 2h05min
      "realisator_ID" => 8, // Louis Leterrier
      "actors_ID" => [
        25, 26
      ] // 25 = Morgan Freeman / 26 = Jesse Eisenberg
    ],
    [
      "id" => 39,
      "cover" => "https://www.ecranlarge.com/media/cache/1600x1200/uploads/image/001/211/wurvyvea83tn2vcof8zsrins5tf-592.jpg",
      'title' => "Phone Game",
      'year' => 2003,
      'synopsis' => "Stu Shepard, un attaché de presse, passe devant une cabine publique. Le téléphone sonne, Stu répond à l'appel. Une voix qu'il ne connaît pas l'informe qu'il est mort s'il raccroche le combiné. Le point lumineux d'un rayon infrarouge sur son torse prouve que le mystérieux interlocuteur ne bluffe pas...
      Un terrible incident ayant éclaté à quelques mètres de la cabine, la police arrive sur les lieux, flanquée de tireurs d'élite. Tous pensent que Stu, et non son invisible interlocuteur téléphonique, en est l'auteur. L'officier responsable, le capitaine Ramey, tente de convaincre Stu de sortir de la cabine...",
      'genre' => ["Thriller", "Policier"],
      "duration" => 81, // 2h05min
      "realisator_ID" => 11, // Joël Schumacher
      "actors_ID" => [
        31, 32, 33
      ] // 31 = Colin Farrell / 32 = Forest Whitaker / 33 = Katie Holmes
    ],
    [
      "id" => 40,
      "cover" => "https://fr.web.img6.acsta.net/medias/nmedia/18/36/04/16/18686568.jpg",
      'title' => "Une journée en enfer",
      'year' => 1995,
      'synopsis' => "Le lieutenant John McClane est de retour et il est demandé en personne par un terroriste, Simon, qui menace New York. Alors qu'il fait équipe avec Zeus, un commerçant du quartier d'Harlem embarqué dans l'aventure malgré lui, McLane se livre à un petit jeu à travers toute la ville, devant résoudre des énigmes. S'il rate son coup, une bombe explose, c'est la règle imposée par Simon...",
      'genre' => ["Action", "Thriller", "Policier"],
      "duration" => 131, // 2h05min
      "realisator_ID" => 12, // John McTiernan
      "actors_ID" => [
        34, 35
      ] // 34 = Samuel L. Jackson / 35 = Bruce Willis
    ],
    [
      "id" => 41,
      "cover" => "https://fr.web.img4.acsta.net/medias/05/11/01/051101_af.jpg",
      'title' => "Incassable",
      'year' => 2000,
      'synopsis' => "Elijah Price souffre depuis sa naissance d'une forme d'ostéogénèse. S'il reçoit le moindre choc, ses os cassent comme des brindilles. Depuis son enfance, il n'a de cesse d'admirer les superhéros, des personnages qui sont tout l'opposé de lui-même. Propriétaire d'un magasin spécialisé dans les bandes-dessinées, il épluche pendant son temps libre les vieux articles de journaux à la recherche des plus grands désastres qui ont frappé les Etats-Unis. Il se met alors en quête d'éventuels survivants, mais y parvient rarement.
        Au même moment, un terrible accident ferroviaire fait 131 morts. Un seul des passagers en sort indemne...",
      'genre' => ["Thriller", "Fantastique"],
      "duration" => 166, // 1h46min
      "realisator_ID" => 16, // M. Night Shyamalan
      "actors_ID" => [
        34, 35
      ] // 34 = Samuel L. Jackson / 35 = Bruce Willis
    ],
    [
      "id" => 42,
      "cover" => "https://fr.web.img2.acsta.net/pictures/19/01/15/12/29/5059914.jpg",
      'title' => "Glass",
      'year' => 2019,
      'synopsis' => "Peu de temps après les événements relatés dans Split, David Dunn - l’homme incassable - poursuit sa traque de La Bête, surnom donné à Kevin Crumb depuis qu’on le sait capable d’endosser 23 personnalités différentes. De son côté, le mystérieux homme souffrant du syndrome des os de verre Elijah Price suscite à nouveau l’intérêt des forces de l’ordre en affirmant détenir des informations capitales sur les deux hommes…",
      'genre' => ["Thriller", "Fantastique"],
      "duration" => 130, // 2h10min
      "realisator_ID" => 16, // M. Night Shyamalan
      "actors_ID" => [
        34, 35
      ] // 34 = Samuel L. Jackson / 35 = Bruce Willis
    ],
    [
      "id" => 43,
      "cover" => "https://i.etsystatic.com/27089413/r/il/58d4b8/2843327847/il_570xN.2843327847_paoy.jpg",
      'title' => "Avatar",
      'year' => 2009,
      'synopsis' => "Malgré sa paralysie, Jake Sully, un ancien marine immobilisé dans un fauteuil roulant, est resté un combattant au plus profond de son être. Il est recruté pour se rendre à des années-lumière de la Terre, sur Pandora, où de puissants groupes industriels exploitent un minerai rarissime destiné à résoudre la crise énergétique sur Terre. Parce que l'atmosphère de Pandora est toxique pour les humains, ceux-ci ont créé le Programme Avatar, qui permet à des \" pilotes \" humains de lier leur esprit à un avatar, un corps biologique commandé à distance, capable de survivre dans cette atmosphère létale. Ces avatars sont des hybrides créés génétiquement en croisant l'ADN humain avec celui des Na'vi, les autochtones de Pandora.
      Sous sa forme d'avatar, Jake peut de nouveau marcher. On lui confie une mission d'infiltration auprès des Na'vi, devenus un obstacle trop conséquent à l'exploitation du précieux minerai. Mais tout va changer lorsque Neytiri, une très belle Na'vi, sauve la vie de Jake...",
      'genre' => ["Science Fiction", "Aventure"],
      "duration" => 182, // 2h42min
      "realisator_ID" => 15, // James Cameron
      "actors_ID" => []
    ],
    [
      "id" => 44,
      "cover" => "https://fr.web.img4.acsta.net/pictures/15/10/13/15/12/514297.jpg",
      'title' => "Forrest Gump",
      'year' => 1994,
      'synopsis' => "Quelques décennies d'histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l'étrange odyssée d'un homme simple et pur, Forrest Gump.",
      'genre' => ["Romance", "Drame", "Comédie"],
      "duration" => 140, // 2h20min
      "realisator_ID" => 17, // Robert Zemeckis
      "actors_ID" => [
        37, 44
      ] // 37 = Tom Hanks / 44 = Sally Field
    ],
    [
      "id" => 45,
      "cover" => "https://eijwvqaycbm.exactdn.com/wp-content/uploads/2012/11/La-ligne-verte-affiche-1200x1764.jpg",
      'title' => "La ligne verte",
      'year' => 2000,
      'synopsis' => "Paul Edgecomb, pensionnaire centenaire d'une maison de retraite, est hanté par ses souvenirs. Gardien-chef du pénitencier de Cold Mountain en 1935, il était chargé de veiller au bon déroulement des exécutions capitales en s’efforçant d'adoucir les derniers moments des condamnés. Parmi eux se trouvait un colosse du nom de John Coffey, accusé du viol et du meurtre de deux fillettes. Intrigué par cet homme candide et timide aux dons magiques, Edgecomb va tisser avec lui des liens très forts.",
      'genre' => ["Fantastique", "Policier"],
      "duration" => 189, // 3h09min
      "realisator_ID" => 18, // Frank Darabont
      "actors_ID" => [
        37, 41
      ] // 37 = Tom Hanks / 41 = Michael Clarke Duncan 
    ],
    [
      "id" => 46,
      "cover" => "https://www.ecranlarge.com/uploads/image/001/213/i8zkqbcolkz4beousqkhrcf9ssj-868.jpg",
      'title' => "Seul au monde",
      'year' => 2001,
      'synopsis' => "Chuck Noland, un cadre de Fedex, sillonne le monde pour améliorer les performances de son entreprise et la productivité de ses équipes. Il ne trouve la tranquillité qu'auprès de sa compagne Kelly. Mais à la veille de Noël, il reçoit un appel lui annonçant qu'il doit contrôler la livraison d'un colis urgent pour la Malaisie. Il n'en a que pour quatre jours et reviendra pour fêter le Nouvel An avec sa dulcinée.
      Chuck quitte Los Angeles à bord d'un petit avion. Mais au-dessus de l'Océan Pacifique, un orage éclate et prend par surprise l'équipage. Le crash est inévitable. Agrippé à un radeau de sauvetage, Chuck s'échoue sur une île déserte. Les jours passent et aucun secours en vue.
      Pendant quatre ans, le naufragé va tenter de s'adapter à cet environnement sauvage en surmontant l'épreuve terrible de la solitude.",
      'genre' => ["Drame", "Aventure"],
      "duration" => 163, // 2h23min
      "realisator_ID" => 17, // Robert Zemeckis
      "actors_ID" => [
        37
      ] // 37 = Tom Hanks
    ],
    [
      "id" => 47,
      "cover" => "https://fr.web.img3.acsta.net/pictures/210/485/21048559_20131010181109755.jpg",
      'title' => "Scarface",
      'year' => 1984,
      'synopsis' => "En 1980, Tony \"Scarface\" Montana bénéficie d'une amnistie du gouvernement cubain pour retourner en Floride. Ambitieux et sans scrupules, il élabore un plan pour éliminer un caïd de la pègre et prendre la place qu'il occupait sur le marché de la drogue.",
      'genre' => ["Action", "Drame"],
      "duration" => 165, // 2h45min
      "realisator_ID" => 20, // Brian De Palma
      "actors_ID" => [
        39, 40
      ] // 39 = Al Pacino / 40 = Michelle Pfeiffer
    ],
    [
      "id" => 48,
      "cover" => "https://images.cinefil.com/movies/218404.webp",
      'title' => "Esprits Rebelles",
      'year' => 1996,
      'synopsis' => "Ex-membre des marines, Louanne Johnson accepte d'enseigner à la East Palo Alto Highschool, un établissement à la réputation sulfureuse. Réalisant que ses élèves possèdent de grandes capacités intellectuelles, elle décide de se battre pour les aider à apprendre.",
      'genre' => ["Thriller", "Drame", "Policier", "Biopic"],
      "duration" => 139, // 1h39min
      "realisator_ID" => 21, // John N. Smith
      "actors_ID" => [
        40
      ] // 40 = Michelle Pfeiffer
    ],
    [
      "id" => 49,
      "cover" => "https://m.media-amazon.com/images/M/MV5BMGM0NzE2YjgtZGQ4YS00MmY3LTg4ZDMtYjUwNTNiNTJhNTQ5XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg",
      'title' => "Armageddon",
      'year' => 1998,
      'synopsis' => "Un astéroide se dirige vers la Terre à la vitesse de 35.000 kilomètres a l'heure. Harry S. Stamper, grand spécialiste du forage pétrolier, est recruté par le directeur de la NASA pour tenter de le détruire. Lui et son équipe de têtes brulées devront se poser sur l'astéroide et placer en son coeur une charge nucléaire. Débute alors l'entraînement indispensable des astronautes et l'apprentissage des outils spatiaux...",
      'genre' => ["Science Fiction", "Action"],
      "duration" => 148, // 2h28min
      "realisator_ID" => 28, // Michael Bay
      "actors_ID" => [
        29, 35
      ] // 29 = Ben Affleck / 35 = Bruce Willis
    ],
    [
      "id" => 50,
      "cover" => "https://flxt.tmsimg.com/assets/p27437_p_v8_ae.jpg",
      'title' => "Pearl Harbor",
      'year' => 2001,
      'synopsis' => "Amis depuis la plus tendre enfance, Rafe McCawley et Danny Walker sont deux brillants pilotes de l'armée de l'air américaine. La Seconde Guerre mondiale a commencé, mais les Etats-Unis n'ont pas encore engagé les hostilités. Rafe succombe bientôt au charme d'Evelyn Johnson, une jeune infirmière. C'est le coup de foudre. Mais ce dernier part combattre aux côtés des Britanniques. Evelyn et Danny sont, quant à eux, transférés sur la base américaine de Pearl Harbor.

      La paisible existence de ces deux jeunes gens bascule lorsqu'ils apprennent la mort de Rafe. Evelyn partage son chagrin avec Danny et un amour naît de leurs confidences. Rafe est pourtant vivant. En cette journée du 7 décembre 1941, les retrouvailles et les explications vont devoir être reportées à plus tard : au même moment, près de 200 bombardiers japonais surgissent dans le ciel de Hawaï pour une attaque surprise.",
      'genre' => ["Guerre", "Romance", "Action"],
      "duration" => 183, // 3h03min
      "realisator_ID" => 28, // Michael Bay
      "actors_ID" => [
        29
      ] // 29 = Ben Affleck
    ],
    [
      "id" => 51,
      "cover" => "https://fr.web.img5.acsta.net/pictures/19/09/24/09/25/3228359.jpg",
      'title' => "Shining",
      'year' => 1980,
      'synopsis' => "Écrivain, Jack Torrance est engagé comme gardien, pendant tout l’hiver, d’un grand hôtel isolé du Colorado – l’Overlook – où il espère surmonter enfin sa panne d’inspiration. Il s’y installe avec sa femme Wendy et son fils Danny, doté d’un don de médium. Tandis que Jack n’avance pas dans son livre et que son fils est de plus en plus hanté par des visions terrifiantes, il découvre les terribles secrets de l’hôtel et bascule peu à peu dans une forme de folie meurtrière où il s’en prend à sa propre famille…",
      'genre' => ["Epouvante-horreur", "Thriller"],
      "duration" => 143, // 2h23min
      "realisator_ID" => 30, // Stanley Kubrick
      "actors_ID" => [
        1
      ] // 1 = Jack Nicholson
    ],
    [
      "id" => 52,
      "cover" => "https://www.telerama.fr/sites/tr_master/files/2e36fde2-b9f5-4df4-8f18-4dee71405d3c_2.jpg",
      'title' => "Vol au-dessus d'un nid de coucou",
      'year' => 1976,
      'synopsis' => "Adapté du best-seller éponyme de Ken Kesey, Vol au-dessus d'un nid de coucou décrit, avec une précision quasiment documentaire, les traitements infligés aux patients dans les années 1960 : médicaments surdosés, douches glacées, électrochocs ou encore lobotomie. Mais ce pamphlet contre le fonctionnement des hôpitaux psychiatriques questionne aussi le sens de la révolte : pourquoi doit-on résister ? Jusqu'où peut-on s'opposer ? Où se situe la frontière entre l'héroïsme et la folie ? D'un côté, convaincue de faire le bien, miss Ratched applique les règles aveuglément et infantilise ses patients. De l'autre, McMurphy se bat pour leur rendre leur dignité quitte à défier les lois d'un système répressif et inhumain. Louise Fletcher et Jack Nicholson, tous deux oscarisés pour leur performance exceptionnelle, personnifient la confrontation entre l'individu et l'institution, placée au cœur d'une œuvre intense dont on ne sort pas indemne. Magistralement mis en scène par Milos Forman, un grand film, qui a marqué toute une génération.",
      'genre' => ["Drame"],
      "duration" => 129, // 2h09min
      "realisator_ID" => 31, // Milos Forman
      "actors_ID" => [
        1
      ] // 1 = Jack Nicholson
    ],
    [
      "id" => 53,
      "cover" => "https://fr.web.img5.acsta.net/medias/nmedia/18/65/57/12/19254508.jpg",
      'title' => "Full Métal Jacket",
      'year' => 1987,
      'synopsis' => "Pendant la guerre du Viêt Nam, la préparation et l'entrainement d'un groupe de jeunes marines, jusqu'au terrible baptême du feu et la sanglante offensive du Tết à Huế, en 1968.",
      'genre' => ["Drame", "Guerre"],
      "duration" => 116, // 1h56min
      "realisator_ID" => 30, // Stanley Kubrick
      "actors_ID" => []
    ],
    [
      "id" => 54,
      "cover" => "https://m.media-amazon.com/images/M/MV5BMjY0YjMyNjQtZTU0OS00MWZjLWEzYjEtNzU2MTY1NDg4YTI0XkEyXkFqcGdeQXVyMTAzMDM4MjM0._V1_.jpg",
      'title' => "Ghost",
      'year' => 1990,
      'synopsis' => "Sam Wheat, cadre dans une banque d'affaires new-yorkaise, et Molly Jensen, sculpteur, s'aiment. Mais tout bascule lorsque Sam Wheat est agressé dans la rue et abattu. A sa grande surprise, il devient un fantôme et réussit à communiquer avec une voyante hystérique. Il tente alors d'entrer en contact avec sa femme et découvre qui a voulu le tuer.",
      'genre' => ["Drame", "Romance", "Fantastique"],
      "duration" => 126, // 2h06min
      "realisator_ID" => 32, // Jerry Zucker
      "actors_ID" => [
        2, 48, 49
      ] // 2 = Demi Moore / 48 = Patrick Swayze / 49 = Whoopi Goldberg
    ],
    [
      "id" => 55,
      "cover" => "https://fr.web.img6.acsta.net/pictures/19/09/03/12/02/4765874.jpg",
      'title' => "Joker",
      'year' => 2019,
      'synopsis' => "Le film, qui relate une histoire originale inédite sur grand écran, se focalise sur la figure emblématique de l’ennemi juré de Batman. Il brosse le portrait d’Arthur Fleck, un homme sans concession méprisé par la société. ",
      'genre' => ["Drame"],
      "duration" => 122, // 2h02min
      "realisator_ID" => 33, // Todd Phillips
      "actors_ID" => [
        11
      ] // 11 = Robert De Niro
    ],
  ];
}
