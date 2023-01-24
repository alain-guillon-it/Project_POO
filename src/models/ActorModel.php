<?php

namespace Model;

class ActorModel extends MediaModel
{
  protected array $_datas = [
    [
      "id" => 0,
      "fullname" => "Tom Cruise",
      "age" => 40,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 18,
      "biography" => "Ayant d'abord envisagé de devenir prêtre, puis renoncé à une carrière de sportif professionnel pour cause de blessure au genou, Tom Cruise décide à 18 ans de s'orienter vers l'art dramatique. Après quelques pièces de théâtre, il effectue sa première apparition au cinéma dans Un amour infini (Franco Zeffirelli, 1981), puis perce grâce au rôle-vedette de Risky business (Paul Brickman, 1983). Le succès de Top Gun (Tony Scott, 1985) en fait une véritable star, ce qui lui permet de s'essayer à des rôles plus ambitieux dans La Couleur de l'argent (Martin Scorsese, 1986) et Rain Man (Barry Levinson, 1988). Sa performance en marine paralysé dans Ne un 4 juillet (Oliver Stone, 1989) lui vaut sa première nomination aux Oscars. Le succès accompagne son parcours volontairement éclectique, avec notamment Entretien avec un vampire (Neil Jordan, 1994), tiré d'un roman d'Anne ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/18/07/13/09/57/3777492.jpg",
      "films_ID" => [
        7, 8, 9, 10
      ], // 7 = Top Gun: Maverick / 8 = Minority Report / 9 = Collateral / 10 = Né un 4 Juillet
      "series_ID" => []
    ],
    [
      "id" => 1,
      "fullname" => "Jack Nicholson",
      "age" => 85,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 14,
      "biography" => "Abandonné par son père, Jack Nicholson fut élevé par sa grand-mère dans le New Jersey. A 17 ans, il part pour Los Angeles et travaille comme employé de bureau à la Metro-Goldwyn-Mayer (MGM). Il fait ses débuts au cinéma en délinquant juvénile dans The Cry Baby Killer, un thriller produit par Roger Corman. Tout au long des années 60, il enchaînera avec le réalisateur-producteur culte une vingtaine de films de série B allant de l'horreur (La Petite Boutique des horreurs) au western (The Shooting).En 1968, il commence sa collaboration avec Bob Rafelson avec qui il écrit et produit Head, une comédie délirante avec le groupe pop The Monkeys. Il collaboreront ensemble six fois, notamment pour Cinq pièces faciles qui vaut à Nicholson sa première nomination à l'Oscar du meilleur acteur. Mais, c'est l'année suivante qu'il acquiert son statut de star avec son rôle d'avocat ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/63/23/14/19636392.jpg",
      "films_ID" => [
        0, 51, 52
      ], // 0 = Des hommes d'honneur / 51 = Shining / 52 = Vol au-dessus d'un nid de coucou
      "series_ID" => []
    ],
    [
      "id" => 2,
      "fullname" => "Demi Moore",
      "age" => 60,
      "sexe" => false,
      "nationality" => "Américaine",
      "nomination" => 0,
      "recompense" => 1,
      "biography" => "Après une adolescence perturbée, Demi Moore abandonne ses études pour poser dans des magazines. Elle commence ensuite une carrière de comédienne en apparaissant pour la première fois à l'écran en 1981 dans Choices, un drame de Silvio Narizzano, et dans le soap-opera Alliances & trahisons. Trois ans plus tard, elle incarne la fille de Michael Caine dans C'est la faute à Rio (1984) de Stanley Donen, remake américain d'Un moment d'égarement. Joseph Bologna, seconde vedette masculine du film, la choisit alors pour interpréter sa fille dans le téléfilm Bedrooms.Tout en cherchant à se débarrasser de sa dépendance pour la cocaïne, Demi Moore donne à deux reprises la réplique à Rob Lowe dans les romances pour adolescents St. Elmor's fire (1985) et A propos d'hier soir (1986). Elle interprète ensuite, face à Robert De Niro, une jeune mère célibataire dans la comédie",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/16/04/27/14/49/501175.jpg",
      "films_ID" => [
        0, 54
      ], // 0 = des hommes d'honneur / 54 = Ghost
      "series_ID" => []
    ],
    [
      "id" => 3,
      "fullname" => "Kevin Bacon",
      "age" => 64,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 2,
      "recompense" => 0,
      "biography" => "Après une enfance passée à Philadelphie, Kevin Bacon s'installe à New York pour entamer une carrière théâtrale. C'est ainsi qu'on le retrouve dans les pièces off-Broadway Getting Out, Forty Deuce et Slab Boys, où il partage alors la vedette avec Sean Penn. L'année 1978 marque ses débuts sur grand écran. On l'aperçoit notamment dans la comédie American College de John Landis. Sauvagement abattu dans le film d'horreur Vendredi 13 (1980), il figure également au générique du Diner (1982) de Barry Levinson et rencontre le succès sur les rocks endiablés de la comédie musicale Footloose (1984).Marié à la comédienne Kyra Sedgwick, Kevin Bacon trouve ses plus beaux rôles dans le cinéma fantastique, prêtant son visage inquiétant et anguleux aux films Tremors (1990), L'Expérience interdite (1991), Hypnose (1999) et L'Homme sans ombre (2000). Il joue également de son ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/17/01/20/14/01/177399.jpg",
      "films_ID" => [
        0, 11
      ], // 0 = Des hommes d'honneur / 11 = Mystic River
      "series_ID" => []
    ],
    [
      "id" => 4,
      "fullname" => "Léonardo Dicaprio",
      "age" => 48,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 8,
      "biography" => "Né d'un père italien et d'une mère allemande favorisant au mieux ses aptitudes artistiques, Leonardo DiCaprio suit des cours de comédie dès l'école primaire. Auditionnant pour la première fois en 1988, il commence par tourner des spots publicitaires, puis obtient très vite quelques petits rôles à la télévision (Les nouvelles aventures de Lassie, Santa Barbara), avant de se faire remarquer dans la série Quoi de neuf, docteur ? en 1991. Mais il est surtout intéressé par le cinéma, et après un premier film d'horreur (Critters 3), Leonardo DiCaprio est choisi parmi quatre cents candidats pour jouer le beau-fils maltraité de Robert De Niro dans Blessures secrètes (1993).Par la suite, il étonne en interprétant un attardé mental dans Gilbert Grape (1993), où il vole la vedette à Johnny Depp. Sa composition lui vaut une double nomination comme Meilleur second rôle aux ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/15/06/24/14/36/054680.jpg",
      "films_ID" => [
        1, 5
      ], // 1 = Le loup de Wall Street / 5 = Titanic
      "series_ID" => []
    ],
    [
      "id" => 5,
      "fullname" => "Kyle Chandler",
      "age" => 56,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 1,
      "biography" => "Né à Buffalo, Kyle Chandler passe son enfance à Loganville, petite ville de Géorgie, au sein de la ferme familiale. Après avoir obtenu son diplôme d’arts dramatiques à l’Université de Géorgie, il est repéré en 1988 par un découvreur de nouveaux talents. L’apprenti comédien part alors s’installer à Los Angeles et décroche ses premiers rôles à la télévision…Après quelques téléfilms (Unconquered, Quiet Victory), il finit par apparaître furtivement dans des séries comme China Beach ou encore Les Cauchemars de Freddy. En 1990, il devient soldat dans puis joueur de baseball dans Homefront, série acclamée par la critique se déroulant après la Seconde Guerre mondiale. Ce premier rôle régulier lui permet d’être remarqué et il finit par décrocher son premier rôle au cinéma, dans Pure Country. Sa véritable percée se fait en 1996, avec Demain à la ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/18/09/20/14/50/1532714.jpg",
      "films_ID" => [
        1
      ], // 1 = Le loup de Wall Street
      "series_ID" => []
    ],
    [
      "id" => 6,
      "fullname" => "Margot Robbie",
      "age" => 32,
      "sexe" => false,
      "nationality" => "Australienne",
      "nomination" => 12,
      "recompense" => 0,
      "biography" => "Australienne de naissance, Margot Robbie fait ses débuts de comédienne dans les films Vigilante et I.C.U., réalisés par Aash Aaron en 2008 et 2009. Elle tient en parallèle le rôle récurrent de Donna Freedman dans le soap Les Voisins et décroche deux nominations aux Logie Awards, équivalents australiens de nos 7 d’or. Elle quitte alors la série et son pays en 2011 pour tenter sa chance à Hollywood. Toujours pour la télévision, mais cette fois-ci américaine, elle incarne aux côtés de Christina Ricci une mignonnette hôtesse de l'air dans la série Pan Am. Faute d'audience, le feuilleton prend fin au bout d'une quinzaine d'épisodes. C’est en 2013 que sa carrière décolle, puisqu'elle décroche un rôle dans Il était temps de Richard Curtis et surtout incarne Naomi Lapaglia dans Le Loup de Wall Street, biopic sur la vie du courtier en bourse Jordan Belfort, réalisé ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/20/01/31/14/13/5661728.jpg",
      "films_ID" => [
        1
      ], // 1 = Le loup de Wall Street
      "series_ID" => []
    ],
    [
      "id" => 7,
      "fullname" => "Jonah Hill",
      "age" => 38,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 11,
      "recompense" => 0,
      "biography" => "Jonah Hill nait à Los Angeles dans une famille juive et manifeste très tôt un vif intérêt pour l'écriture, notamment en découvrant à la télévision les aventures de la cultissime famille Simpson et The Larry Sanders Show. Il décide, alors, d'étudier l'écriture et le théâtre à la New School de New York. C'est là, en écrivant des courts métrages et jouant la comédie, qu'il se lie d'amitié avec Rebecca et Jake Hoffman, fille et fils de l'illustre acteur. Ce dernier est rapidement séduit par les talents de comédien de Jonah Hill, au point de l'aider à passer une audition pour un petit rôle dans J'adore Huckabees. Sa carrière est dès lors lancée.Peter Principato, son agent, lui présente alors Judd Apatow : c'est le début d'une riche collaboration et d'une grande amitié. Le réalisateur lui confie, d’abord, le petit mais marquant rôle de l'acheteur Geek sur ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/18/09/12/12/03/5412955.jpg",
      "films_ID" => [
        1
      ], // 1 = Le loup de Wall Street
      "series_ID" => []
    ],
    [
      "id" => 8,
      "fullname" => "Jean Dujardin",
      "age" => 50,
      "sexe" => true,
      "nationality" => "Français",
      "nomination" => 10,
      "recompense" => 0,
      "biography" => "Un bac philo-arts plastiques en poche, Jean Dujardin débute dans la vie active comme miroitier et serrurier. C'est au cours de son service militaire que son talent comique se révèle : l'armée sera pour lui une grande source d'inspiration. Monté à Paris, il se produit dans des bars et rencontre au théâtre du Carré Blanc ceux - Bruno Salomone, Eric Collado, Eric Massot et Emmanuel Joucla - avec qui il formera la populaire bande des \"Nous C Nous\". Ils créent ensemble plusieurs spectacles, une chanson sobrement intitulée \"Nous C Nous\" et font les beaux jours de l'émission Fiesta de Patrick Sébastien sur France 2.Entre 1997 et 1998, Jean Dujardin est vainqueur à trois reprises de la catégorie \"Comiques\" dans le programme Graines de stars. Se faisant une place sur le petit écran, il accède à la célébrité grâce au personnage populaire de Loulou, qu'il campe du 11 octobre ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/17/01/26/15/47/401446.jpg",
      "films_ID" => [
        1
      ], // 1 = Le loup de Wall Street
      "series_ID" => []
    ],
    [
      "id" => 9,
      "fullname" => "James Caan",
      "age" => 82,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 10,
      "recompense" => 0,
      "biography" => "Après avoir passé sa jeunesse dans le Queens à New York, James Caan intègre la Michigan State University à l'âge de seize ans pour y étudier l'économie et jouer au football américain. Il s'oriente ensuite vers une formation juridique à la Hofstra University, mais une audition lui permet d'entrer au Neigborhood Playhouse de Sanford Meisner. Il obtient par la suite une bourse pour étudier avec Wynn Handman, célèbre professeur d'art dramatique, et décroche les quatre premiers rôles pour lesquels il est auditionné.James Caan débute sur scène en 1961 dans \"La Ronde\" puis joue à Broadway \"Mandingo\" et \"Blood, sweat and Stanley Poole\". Après plusieurs apparitions dans des séries télé (Naked City, Les Incorruptibles, etc.), il apparaît pour la première fois au cinéma dans Irma la Douce (1963) de Billy Wilder et après un passage remarqué dans deux longs métrages de ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/19/02/06/10/03/2342953.jpg",
      "films_ID" => [
        2, 4
      ], // 2 = Misery / 4 = Le Parrain
      "series_ID" => []
    ],
    [
      "id" => 10,
      "fullname" => "Kathy Bates",
      "age" => 74,
      "sexe" => false,
      "nationality" => "Américaine",
      "nomination" => 0,
      "recompense" => 3,
      "biography" => "Kathy Bates est une actrice issue du théâtre, sa première passion. Elle apparaît pour la première fois au cinéma en 1971 dans Taking Off de Milos Forman, il faudra attendre plusieurs années avant de la revoir sur grand écran, la comédienne préférant se consacrer au théâtre dans un premier temps. A partir des années 80, elle tente néanmoins sa chance au cinéma, et enchaîne les participations : avec notamment Reviens Jimmy Dean, reviens en compagnie de Cher en 1982, Le Lendemain du crime avec Jane Fonda en 1986 ou encore Dick Tracy aux cotés de Warren Beatty et Madonna en 1990. La même année, l'actrice se voit confier le rôle-titre du film Frankie & Johnny avant de se le faire ravir par Michelle Pfeiffer. Elle accepte donc un autre projet, baptisé Misery, d'après un roman de Stephen King. Bien lui en a pris : l'actrice gagne un Oscar pour ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/20/02/10/16/56/5952598.jpg",
      "films_ID" => [
        2, 5
      ], // 2 = Misery / 5 = Titanic
      "series_ID" => []
    ],
    [
      "id" => 11,
      "fullname" => "Robert De Niro",
      "age" => 79,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 6,
      "biography" => "Robert De Niro grandit dans le quartier de Little Italy à New York. Il quitte l'école à seize ans pour suivre les cours d'art dramatique du Dramatic Workshop du Luther James Studio et de l'école de théâtre de Stella Adler. Il suit également l'enseignement de Lee Strasberg à l'Actors' Studio, où il fait la rencontre d'Harvey Keitel, qu'il retrouvera à plusieurs reprises au long de sa carrière. Il monte pour la première fois sur scène dans L'Ours d'Anton Tchekhov, et fait des débuts discrets au cinéma, en 1965, comme figurant dans le film de Marcel Carné, Trois chambres à Manhattan.Un an plus tard, Robert De Niro fait la connaissance de Brian De Palma avec qui il tourne trois comédies semi-improvisées : The Wedding Party (1966), Greetings (1968) et Hi, Mom ! (1969). Mais c'est Martin Scorsese qui révèle ses talents de comédien au grand public grâce au polar Mean ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/16/05/17/11/58/561836.jpg",
      "films_ID" => [
        3, 55
      ], // 3 = Les affranchis / 55 = Joker
      "series_ID" => []
    ],
    [
      "id" => 12,
      "fullname" => "Channing Matthew Tatum",
      "age" => 42,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 1,
      "biography" => "Elevé en Floride, Channing Tatum décroche son premier contrat à 20 ans en devenant l'un des danseurs principaux du clip vidéo de Ricky Martin She Bangs. L'année suivante, il entame une carrière de mannequin en posant pour un numéro de Vogue. Il participe ensuite à des campagnes publicitaires pour les marques Abercrombie & Fitch, Nautica, Gap, Dolce & Gabbana, Emporio Armani et Aéropostale avant de tourner un spot Pepsi à diffusion internationale. Remarqué pour son charisme naturel et ses qualités athlétiques, Channing Tatum débute une formation d'acteur sous la direction d'Harold Guskin, au Dena Levy Acting Studio.",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/16/02/09/10/01/017868.jpg",
      "films_ID" => [
        28, 29, 3
      ], // 28 = Coach Carter / 29 = White House Down
      "series_ID" => []
    ],
    [
      "id" => 13,
      "fullname" => "Rick Gonzalez",
      "age" => 43,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 0,
      "biography" => "Gonzalez est né à New York, de descendance dominicaine et portoricaine1. Ses parents se sont rencontrés à Washington DC, où ils se sont mariés. Ils ont déménagé et se sont installés dans la section Bushwick de Brooklyn où ils ont élevé Rick. Ses parents ont divorcé plus tard. Il a fréquenté l'école primaire et secondaire tout en vivant à Brooklyn.

      Depuis son plus jeune âge, Gonzalez a présenté des « spectacles » improvisés pour sa famille et participait à toutes les pièces de son école. Ses professeurs ont contribué à convaincre Gonzalez de postuler et d'essayer pour le lycée Fiorello H. LaGuardia High School of Music & Art and Performing Arts, sur lequel Fame était basé, à Manhattan. Il a fait comme suggéré et a été accepté. En 1997, il a obtenu son diplôme et a commencé à poursuivre une carrière d'acteur.",
      "photo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Rickgonzalez.png/220px-Rickgonzalez.png",
      "films_ID" => [
        28
      ], // 28 = Coach Carter
      "series_ID" => []
    ],
    [
      "id" => 14,
      "fullname" => "Robert Ri'Chard",
      "age" => 39,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 0,
      "biography" => "He has starred in the Nickelodeon sitcom Cousin Skeeter. He also made a few appearances as himself on the hit Nickelodeon game show, Figure It Out. He played Samuel on Touched By An Angel, a troubled teen whose brother is in prison for shooting a man. Also, he has appeared in films such as Coach Carter and House of Wax. His breakout role was in the TV adaptation of Anne Rice's novel, The Feast of All Saints, where he played the young Marcel who becomes a man within society. He has been professionally acting since the age of 13. He appeared in the movie Light It Up along with R&B star Usher. He attended Palms Middle School in Los Angeles, California.",
      "photo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Robert_Ri%27chard_2013.jpg/220px-Robert_Ri%27chard_2013.jpg",
      "films_ID" => [
        28
      ], // 28 = Coach Carter
      "series_ID" => []
    ],
    [
      "id" => 15,
      "fullname" => "Antwon Tanner",
      "age" => 47,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 0,
      "biography" => "Antwon Tanner est un acteur américain né le 14 avril 1975 à Chicago. Il est principalement connu pour le rôle de Skills dans la série Les Frères Scott. Il joue le copain d'enfance de Lucas Scott passionné par le basket-ball.",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/medias/nmedia/18/63/16/18/19501588.jpg",
      "films_ID" => [
        28
      ], // 28 = Coach Carter
      "series_ID" => []
    ],
    [
      "id" => 16,
      "fullname" => "Ashanti",
      "age" => 42,
      "sexe" => false,
      "nationality" => "Américaine",
      "nomination" => 0,
      "recompense" => 0,
      "biography" => "La carrière de Ashanti S. Douglas débute en 1994, au cours d'un concours de jeunes talents. Elle rencontre le producteur Irv Gotti qui appartient au label Murder Inc. Records. Ashanti enregistre un duo avec le rappeur Big Punisher. Elle participe également à la bande originale de Fast and Furious en 2001.

      À l'occasion des duos avec Ja Rule Always on time et avec Fat Joe What's Luv qui auront un véritable succès.",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/35/93/85/18679477.jpg",
      "films_ID" => [
        28
      ], // 28 = Coach Carter
      "series_ID" => []
    ],
    [
      "id" => 17,
      "fullname" => "Jamie Foxx",
      "age" => 55,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 3,
      "biography" => "Avant de se tourner vers le métier de comédien, Jamie Foxx bénéficie d'une formation musicale. Il étudie le piano dès l'âge de cinq ans et effectue le plus gros de sa scolarité dans le collège de San Diego. En 1989, il fait ses débuts de comédien comme comique de stand-up avant d'apparaitre dans les séries télévisées In Living Color (1990), où il crée de nombreux personnages comiques, et Roc (1991). En 1992, Barry Levinson lui offre son premier rôle au cinéma dans Toys.Dès 1996, il produit une émission dont il est également la vedette, le Jamie Foxx Show. Fort du succès que remporte ce programme aux États-Unis, il tourne simultanément au cinéma et donne la réplique à Uma Thurman dans Entre chiens et chats (1996) et à Samuel L. Jackson dans La Couleur de l'arnaque. Son rôle de quarterback en quête de célébrité dans L'Enfer du dimanche (1999) d'Oliver ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/20/01/14/15/37/5077458.jpg",
      "films_ID" => [
        9, 29
      ], // 9 = Collateral / 29 = White House Down
      "series_ID" => []
    ],
    [
      "id" => 18,
      "fullname" => "Maggie Gyllenhaal",
      "age" => 45,
      "sexe" => false,
      "nationality" => "Américaine",
      "nomination" => 0,
      "recompense" => 2,
      "biography" => "Après des études à l'Université de Columbia, Maggie Gyllenhaal fait ses premiers pas d'actrice sur scène, à Londres et New York. C'est en 1992 qu'elle débute sur grand écran, dans le drame Waterland, réalisé par son père Stephen Gyllenhaal. Ce dernier accompagnera son début de carrière, lui donnant l'opportunité de s'aguerrir dans des téléfilms et deux autres longs métrages, A dangerous woman (1993) et Homegrown (1998).Après un petit rôle dans le Cecil B. DeMented de John Waters, l'actrice se révèle au grand public en 2001 en jouant aux côtés de son frère Jake Gyllenhaal dans le mystérieux thriller Donnie Darko, réalisé par Richard Kelly. L'année suivante, elle interprète le premier rôle du sulfureux La Secrétaire, film qui la révèle au grand public et impose un visage angélique, mélange de naïveté et de sévérité. Ce rôle lui vaut d'ailleurs une ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/15/10/21/10/48/401053.jpg",
      "films_ID" => [
        29
      ], // 29 = White House Down
      "series_ID" => []
    ],
    [
      "id" => 19,
      "fullname" => "Jason Clarke",
      "age" => 53,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 2,
      "biography" => "Jason Clarke débute son métier d'acteur dans son pays natal, en Australie. Pendant de nombreuses années, il s'illustre essentiellement à la télévision et apparaît dans de multiples fictions, comme Diagnostic : Meurtre (1996), Wildside (1998), Fréquence Crime (id.), ou encore Blue Heelers (1999) et Summer Bay (2002), qui réunit pléthore de stars locales, dont Heath Ledger, Guy Pearce ou encore Simon Baker. Plus tard, Clarke se fait remarquer en incarnant le personnage de Tommy Caffee dans la série Brotherhood. De 2006 à 2008, il y campe un politicien qui s'oppose à son frère gangster, interprété par le comédien anglais Jason Isaacs. Côté cinéma, Clarke peine tout d'abord à se faire un nom et reste cantonné à des rôles de seconde zone. Il s'illustre dans un premier temps dans bon nombre de petits films confidentiels, comme Praise (1998), un drame sur deux jeunes ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/17/09/13/10/44/2082011.jpg",
      "films_ID" => [
        29
      ], // 29 = White House Down
      "series_ID" => []
    ],
    [
      "id" => 20,
      "fullname" => "Will Smith",
      "age" => 54,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 11,
      "biography" => "Will Smith est un élève brillant qui fait ses études secondaires à la Julia Reynolds Masterman Laboratory and Demonstration School, une école réputée de Philadelphie, où il est né. Mais le jeune homme se destine à une carrière musicale : sous le pseudonyme de The Fresh Prince, il forme en 1985 avec son ami Jeffrey Townes (alias DJ Jazzy Jeff) le duo DJ Jazzy Jeff and The Fresh Prince. Loin de l'image violente et sulfureuse alors véhiculée par le rap, le groupe séduit par son style comique et obtient un Grammy Award de la Meilleure Performance Rap en 1989.Ce succès musical attire l'attention d'Hollywood. En 1989, il fait la rencontre de Benny Medina, productrice exécutive pour la Warner, qui lui confie le rôle principal de la série télévisée Le Prince de Bel-Air, dont il interprète également l'entêtant générique. Durant six ans, il incarne un adolescent aux ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/20/01/16/09/48/3201727.jpg",
      "films_ID" => [
        30, 32, 33
      ], // 30 = Independence Day / 32 = Ennemi d'état / 33 = Bad Boys
      "series_ID" => []
    ],
    [
      "id" => 21,
      "fullname" => "Mel gibson",
      "age" => 66,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 5,
      "biography" => "Mel Gibson est le sixième d'une famille de 11 enfants qui, installée aux Etats-Unis, émigre bientôt en Australie, terre natale de la mère, Ann. Après une formation au National Institute of Dramatic Arts de Sidney, Mel Gibson fait ses débuts au cinéma dans Summer city (1977), un thriller australien de Christopher Fraser. Parallèlement, il se produit au théâtre, où il fait preuve d'éclectisme, puis dans des séries télévisées comme The Sullivans ou encore Tickled pink.En 1979, le succès du film d'action futuriste Mad Max de George Miller lui assure une renommée mondiale. Suivront deux suites intitulées Mad Max 2 (1981) et Mad Max au-delà du Dôme du Tonnerre (1985). Parallèlement, ses prestations d'attardé mental dans Tim (1979) de Michael Pate et de jeune soldat inconscient dans Gallipoli (1981) de Peter Weir lui permettent de gagner ses galons critiques, sous la ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/16/05/23/10/09/431481.jpg",
      "films_ID" => [
        31, 34, 35, 36
      ], // 31 = The Patriot, le chemin de la liberté / 34 = Tu ne tueras point / 35 = Braveheart / 36 = L'arme Fatal
      "series_ID" => []
    ],
    [
      "id" => 22,
      "fullname" => "Sophie Marceau",
      "age" => 56,
      "sexe" => false,
      "nationality" => "Française",
      "nomination" => 0,
      "recompense" => 3,
      "biography" => "C'est à l'âge de 14 ans que Sophie Marceau, de son vrai nom Sophie Maupu, débute sa carrière de comédienne. Elle tient alors la tête d'affiche de La Boum (1980) de Claude Pinoteau. Le succès de cette comédie est tel que deux ans plus tard, la jeune actrice retrouve son personnage d'adolescente rebelle dans la suite La Boum 2, une prestation qui lui vaut le César du Meilleur espoir féminin. Sa collaboration avec le cinéaste se poursuivra en 1988 avec L'Etudiante, une romance située dans la droite lignée de ses précédents films et où elle a pour partenaire masculin Vincent Lindon.Entre-temps, Sophie Marceau se fait une place parmi les \"grands\" du cinéma français, donnant successivement la réplique à Gérard Depardieu (Fort Saganne et Police), Jean-Paul Belmondo (Joyeuses Pâques) ou encore Claude Brasseur, qui de père dans La Boum passera à amant dans Descente aux ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/15/05/13/16/47/561255.jpg",
      "films_ID" => [
        35
      ], // 35 = Braveheart
      "series_ID" => []
    ],
    [
      "id" => 23,
      "fullname" => "Andrew Garfield",
      "age" => 39,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 10,
      "recompense" => 0,
      "biography" => "Né en 1983 d’une mère anglaise et d’un père américain, Andrew Garfield quitte sa Californie natale à l’âge de trois ans pour vivre en Angleterre. Il intègre la \"Central School of Speech and Drama\", où il étudie la comédie. En 2004, il est récompensé par le \"MEN Theatre Award\" pour sa performance dans la pièce KES et apparaît dans plusieurs séries télévisées, dont Docteur Who.Trois plus tard, Andrew Garfield obtient un rôle important pour son premier film Lions et agneaux, réalisé par Robert Redford, avec Tom Cruise et Meryl Streep en tête d'affiche. Après une apparition dans Deux soeurs pour un roi porté par Scarlett Johansson et Natalie Portman, sa prestation dans Boy A de John Crowley est unanimement saluée par la critique et lui vaut la récompense de Meilleur Acteur au British Academy of Film and Television Arts (BAFTA). Cette même année, le magazine ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/16/09/05/17/16/068414.jpg",
      "films_ID" => [
        34, 37
      ], // 35 = Tu ne tueras point / 37 = The Social Network
      "series_ID" => []
    ],
    [
      "id" => 24,
      "fullname" => "Brad Pitt",
      "age" => 58,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 14,
      "biography" => "Brad Pitt passe sa jeunesse à Springfield, dans le Missouri, avant de poursuivre ses études à l'université de Columbia où il décroche un diplôme de journalisme. Il s'installe alors à Los Angeles et suit des cours d'art dramatique dans l'atelier de Roy London. Son aisance naturelle et son charisme lui ouvrent les portes de la télévision. On le voit dans des séries telles 21 Jump Street (1987) ou des téléfilms comme Trop jeune pour mourir (1990, avec Juliette Lewis, qui sera sa compagne pendant les trois années suivantes. Parallèlement, il débute au cinéma dans Neige sur Beverly Hills (1987), puis dans la comédie romantique Happy together (1989). Une chance s'offre alors à lui : William Baldwin ayant renoncé à Thelma et Louise, il hérite en 1991 du rôle bref, mais capital, de l'irrésistible auto-stoppeur qui dévalise Geena Davis. Dès lors, Brad Pitt alterne les ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/20/02/10/10/37/1374948.jpg",
      "films_ID" => [
        17
      ], // 17 Seven
      "series_ID" => []
    ],
    [
      "id" => 25,
      "fullname" => "Morgan Freeman",
      "age" => 85,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 6,
      "biography" => "Morgan Freeman est diplômé du lycée de Greenwood, dans le Mississippi. A dix-huit ans, il s'engage dans l'Air Force et, une fois ses obligations militaires accomplies, s'installe en Californie pour étudier la danse et l'art dramatique au Los Angeles City College. C'est à Broadway qu'il fait ses débuts de comédien en 1967 dans la reprise de Hello Dolly !. La même année, il se fait remarquer, toujours au théâtre, pour son interprétation dans The Nigger lovers. A la télévision, c'est en incarnant le personnage populaire et récurrent d'Easy Rider dans la série The Electric Company qu'il se fait connaître du public américain.Morgan Freeman s'impose sur le tard au cinéma. En 1987, son rôle de Fast Black dans La Rue lui vaut de nombreuses récompenses (Prix du Meilleur second rôle masculin remis par les New York Film Critics, Los Angeles Film Critics et National Society of ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/18/09/20/15/21/3966896.jpg",
      "films_ID" => [
        12, 16, 17
      ], // 12 = Impitoyable / 16 = Invictus / 17 = Seven
      "series_ID" => []
    ],
    [
      "id" => 26,
      "fullname" => "Jesse Eisenberg",
      "age" => 39,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 1,
      "biography" => "Né dans le Queens d'un père professeur et d'une mère clown, le frère aîné de l'actrice Hallie Kate Eisenberg commence sa carrière dès l'âge de 13 ans sur les planches de Broadway. Trois ans plus tard, il décroche un rôle dans la série La Famille Green avec Anne Hathaway, mais l'aventure cesse dès la fin de la première saison.Alors qu'il est accepté à la prestigieuse New York University, Jesse Eisenberg préfère mettre de côté ses études pour travailler l'un des personnages principaux de Roger Dodger. Bonne pioche pour l'acteur car son rôle du neveu de Campbell Scott dans ce film, révèle son talent à toute la profession. Il campe par la suite des seconds rôles dans Le Club des empereurs (2002), le terrifiant Village (2004) de M. Night Shyamalan, le flop Cursed (2005) de Wes Craven ou encore Les Berkman se séparent (2006).Cependant, c'est en 2009 que le jeune ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/16/05/12/11/03/498134.jpg",
      "films_ID" => [
        37, 38
      ], // 37 = The Social Network / 38 = Insaisissables
      "series_ID" => []
    ],
    [
      "id" => 27,
      "fullname" => "Justin Timberlake",
      "age" => 41,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 1,
      "biography" => "Justin Timberlake n'a que 12 ans quand il fait ses débuts sur le petit écran dans l'émission Mickey Mouse Club de Disney Channel. Le jeune homme présente l'émission durant deux années aux cotés de Christina Aguilera et de sa future petite amie Britney Spears. En 1995, il se lance dans la musique avec son groupe Nsync. Leur premier album éponyme, sort en 1998 et est un véritable succès, notamment grâce au single I Want You Back.Dès lors c'est l'ascension continue pour les Nsync, jusqu'en 2002 où le groupe s'accorde une pause. Justin Timberlake en profite pour se lancer dans une carrière solo. Il sort alors son premier album, Justified en novembre 2002. Le succès est au rendez-vous, notamment avec les tubes Cry Me A River et Rock Your Body.Parallèlement, celui qu'on surnomme \"l'héritier de Prince\", démarre en 2000 une carrière d'acteur. Il fait ses premiers pas sur grand ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/16/05/12/10/21/490556.jpg",
      "films_ID" => [
        37
      ], // 37 = The Social Network
      "series_ID" => []
    ],
    [
      "id" => 28,
      "fullname" => "Matt Damon",
      "age" => 52,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 4,
      "biography" => "Après des études littéraires à la prestigieuse université de Harvard, Matt Damon choisit de monter sur les planches, et connaît son premier succès avec la pièce The Speed of Darkness de Steve Tesich. Il fait ensuite des débuts remarqués au cinéma en 1988 dans la comédie dramatique Mystic Pizza de Donald Petrie aux côtés de Julia Roberts, star montante à l'époque, et de Lili Taylor. Le jeune acteur décroche ensuite plusieurs seconds rôles, notamment dans le Geronimo de Walter Hill en 1993, puis donne la réplique en 1996 à Meg Ryan et Denzel Washington dans A l'épreuve du feu de Edward Zwick. Désormais considéré comme une valeur montante à Hollywood, il campe L'Idealiste de Francis Ford Coppola en 1997. La même année, il écrit avec son ami Ben Affleck le scénario de Will Hunting. Ce film, réalisé par Gus Van Sant, où il tient également le rôle principal, ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/16/07/13/11/16/193188.jpg",
      "films_ID" => [
        16, 18, 19
      ], // 16 = Invictus / 18 = Will Hunting / 19 = Seul sur Mars
      "series_ID" => []
    ],
    [
      "id" => 29,
      "fullname" => "Ben Affleck",
      "age" => 50,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 14,
      "biography" => "Né d'un père travailleur social et d'une mère institutrice, Ben Affleck fait ses débuts d'acteur très jeune en tournant un spot publicitaire pour Burger King et en jouant dans The Dark end of the street (1981), un drame de Jan Egleson. L'acteur enchaîne alors les séries télévisées et téléfilms comme The Voyage of the Mimi (1984), ou encore The Second Voyage of the Mimi (1988). Durant sa scolarité à Harvard, il fait la rencontre de Matt Damon qui devient son ami. Ben Affleck abandonne bientôt ses études pour se consacrer à sa passion : le cinéma. En 1992, le comédien apparaît dans La Différence de Robert Mandel, et décroche, la même année, le rôle d'un basketteur dans Buffy the vampire slayer de Fran Rubel Kuzui. En 1993, il fait la connaissance de Kevin Smith. De leur collaboration naîtront six comédies burlesques : Les Glandeurs (1995), Méprise multiple ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/16/03/22/12/30/537408.jpg",
      "films_ID" => [
        18
      ], // 18 = Will Hunting
      "series_ID" => []
    ],
    [
      "id" => 30,
      "fullname" => "Robin Williams",
      "age" => 63,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 7,
      "biography" => "Comique de rue, étudiant à la célèbre école de Juilliard, Robin Williams se fait remarquer dès la fin des années 70 en incarnant un extra-terrestre dans la série télévisée comique Mork and Mindy qui lui vaut son premier Golden Globe en 1979. L'acteur effectue ses débuts sur grand écran en 1980 dans la version live de Popeye signée Robert Altman, puis s'éloigne de sa nature comique pour Le Monde selon Garp de George Roy Hill. C'est à la fin des années 80 que Robin Williams acquiert le statut de star internationale. D'abord en interprétant l'animateur radio déjanté de Good morning Vietnam (1987), puis, surtout, en incarnant le professeur Keating du Cercle des poètes disparus (1989). Après ces deux oeuvres entre rires et larmes, qui lui vaudront deux nominations à l'Oscar et un Golden Globe pour son interprétation du DJ-soldat Adrian Cronauer, l'acteur se concentre ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/15/10/15/16/43/143674.jpg",
      "films_ID" => [
        18, 20
      ], // 18 = Will Hunting
      "series_ID" => []
    ],
    [
      "id" => 31,
      "fullname" => "Colin Farrell",
      "age" => 46,
      "sexe" => true,
      "nationality" => "Irlandais",
      "nomination" => 0,
      "recompense" => 1,
      "biography" => "Fils et neveu de footballeurs, Colin Farrell envisage un temps une carrière sportive. Il s'expatrie ensuite à Sydney à l'âge de 17 ans, où il reste un an et travaille en tant que mannequin, avant de se tourner vers la comédie. Il suit alors les cours de la Gaiety Drama School de Dublin mais abandonne ses études avant la fin de son cursus, ce qui ne l'empêche pas de jouer dans The War zone (1999), le premier long métrage de Tim Roth. Après avoir échoué à une audition ayant pour but de trouver les membres du groupe Boyzone, il apparaît dans Ordinary decent criminal (2000) aux côtés de Kevin Spacey. Mais c'est en 2001 qu'il se fait connaitre du grand public, grâce à son rôle du soldat Bozz dans Tigerland de Joel Schumacher. Colin Farrell retrouve ce dernier pour les besoins du thriller téléphonique Phone game (2003) et fait une apparition clin d’œil en voyou dans le ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/15/05/15/15/43/007127.jpg",
      "films_ID" => [
        8, 39
      ], // 8 = Minority Report / 39 = Phone Game
      "series_ID" => []
    ],
    [
      "id" => 32,
      "fullname" => "Forest Whitaker",
      "age" => 61,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 8,
      "biography" => "Diplômé en musique de l'University of Southern California puis étudiant en art dramatique à l'université de Berkeley, Forest Whitaker fait d'abord ses armes dans les séries télévisées phares des années 70-80 : Arnold et Willy, Capitaine Furillo, ou encore L'Homme qui tombe à pic. Il fait ses premiers pas sur grand écran en 1982 avec un petit rôle dans Tag : The Assassination game, et dans la comédie Fast Times at Ridgemont High, où il donne la réplique à un jeune premier : Sean Penn.C'est en 1986 qu'il se fait remarquer du grand public, d'abord dans La Couleur de l'argent de Martin Scorsese, puis en rejoignant le Vietnam et la compagnie Bravo du Platoon d'Oliver Stone. Un Vietnam retrouvé un an plus tard, cette fois plus souriant, dans Good morning Vietnam. La consécration arrive en 1988 pour Whitaker, avec le Bird de Clint Eastwood : son interprétation du musicien de ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/18/01/30/10/54/3795522.jpg",
      "films_ID" => [
        39
      ], // 39 = Phone game
      "series_ID" => []
    ],
    [
      "id" => 33,
      "fullname" => "Katie Holmes",
      "age" => 43,
      "sexe" => false,
      "nationality" => "Américaine",
      "nomination" => 0,
      "recompense" => 2,
      "biography" => "Katie Holmes commence à jouer au théâtre dans les pièces de son lycée. Lors d'une convention pour jeunes talents se déroulant à New York, elle rencontre un agent qui l'encourage à passer des auditions à Los Angeles. La comédienne apparaît pour la première fois à l'écran dans The Ice storm d'Ang Lee, aux côtés de Tobey Maguire. Mais c'est son rôle de Joey Potter dans la populaire série télévisée Dawson, débutée en 1998, qui propulse sa carrière. Surfant sur son personnage de la série, elle apparaît alors dans des rôles d'adolescentes plus ou moins rebelles (Comportements troublants, Go, Mrs. Tingle). Au fil des films, Katie Holmes incarne des rôles plus adultes. Manipulatrice dans Intuitions (2000), adolescente naïve dans Wonder Boys (id.) aux côtés de Michael Douglas ou maîtresse d'un Colin Farrell prisonnier d'une cabine téléphonique dans Phone game ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/19/07/01/11/08/2313283.jpg",
      "films_ID" => [
        39
      ], // 39 = Phone Game
      "series_ID" => []
    ],
    [
      "id" => 34,
      "fullname" => "Samuel L. Jackson",
      "age" => 73,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 4,
      "biography" => "Samuel L. Jackson entre au Morehouse College d'Atlanta pour entreprendre des études d'architecture mais c'est avec un diplôme d'art dramatique qu'il en ressort en 1972. Il fait ses débuts au cinéma la même année dans Together for days de Michael Schultz, mais préfère d'abord se consacrer au théâtre en jouant sur les planches new-yorkaises.C'est à New York que Samuel L. Jackson fait la rencontre de Spike Lee, qui lui confiera plus tard quelques petits rôles dans ses films (Do the right thing, Mo' Better Blues). Après des apparitions dans Un prince à New York et Les Affranchis, c'est cette collaboration qui lui permet d'obtenir au Festival de Cannes 1991 le Prix du Meilleur second rôle pour Jungle Fever, dans lequel il incarne un junkie. Mais c'est son rôle de Jules, le tueur philosophe du Pulp Fiction de Quentin Tarantino (1994), qui le propulse au rang de star. Tarantino ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/15/07/27/12/24/354255.jpg",
      "films_ID" => [
        27, 40, 41, 42
      ], // 27 = Jurassic Park / 40 = Une journée en enfer / 41 = Incassable / 42 = Glass
      "series_ID" => []
    ],
    [
      "id" => 35,
      "fullname" => "Bruce Willis",
      "age" => 67,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 1,
      "biography" => "Né sur une base américaine à Idar-Oberstein en Allemagne de l'Ouest où son père, un soldat américain, était affecté, Bruce Willis passe le reste de son enfance dans le New Jersey. Au Collège d'Etat de Montclair, il s'adonne à la musique, joue de l'harmonica et suit les cours de la section théâtrale. A partir de 1977, il se produit sur les scènes new-yorkaises tout en gagnant sa vie comme barman et comme figurant (Le Verdict, 1982).C'est grâce au feuilleton Clair de lune (1985-1989) qu'il parvient à une notoriété immédiate (il est lauréat pour cette série d'un Emmy Award et d'un Golden Globe) et qu'il acquiert, aux côtés de Kim Basinger, un premier grand rôle au cinéma, dans Boire et déboires (1987) de Blake Edwards. La même année, Bruce trouve son rôle le plus célèbre, celui de John McClane, le policier tenace de Piège de cristal. Au cours de la décennie ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/15/06/24/14/54/311963.jpg",
      "films_ID" => [
        40, 41, 42, 50
      ], // 40 = Une journée en enfer / 41 = Incassable / 42 = Glass / 50 = Armageddon
      "series_ID" => []
    ],
    [
      "id" => 36,
      "fullname" => "Kate Winslet",
      "age" => 47,
      "sexe" => true,
      "nationality" => "Britannique",
      "nomination" => 0,
      "recompense" => 14,
      "biography" => "Issue d'une famille de comédiens, Kate Winslet entre dès l'âge de onze ans à la Redroofs Theater School pour commencer sa formation d'actrice. Sa carrière débute deux ans plus tard dans un spot publicitaire pour la télévision anglaise.En 1994, Kate Winslet se révèle au grand public avec le rôle de Juliet Hulme dans Créatures célestes de Peter Jackson. Sa carrière américaine débute quant à elle en 1996 avec deux rôles en costumes dans Jude et Hamlet, où elle incarne Ophélie. On la retrouve ensuite aux côtés de Hugh Grant et Emma Thompson dans Raison et sentiments, réalisé par Ang Lee. En 1997, elle connaît la consécration internationale avec le Titanic de James Cameron, bouleversante histoire d'amour dans laquelle elle partage l'affiche avec Leonardo DiCaprio. Malgré un succès d'une telle ampleur, elle tourne ensuite dans des productions beaucoup plus modestes, ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/15/09/15/10/01/065591.jpg",
      "films_ID" => [
        5
      ], // 5 = Titanic
      "series_ID" => []
    ],
    [
      "id" => 37,
      "fullname" => "Tom Hanks",
      "age" => 66,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 10,
      "biography" => "Tom Hanks, de son vrai nom Thomas J. Hanks, grandit au sein d'une famille recomposée. C'est adolescent qu'il découvre le théâtre : il comprend rapidement qu'il vient de trouver sa vocation et qu'il en fera son métier. En 1978, Tom Hanks met alors un terme à ses études et part pour New York afin de devenir acteur. C'est avec Noces Sanglantes (1980) qu'il fait ses premiers pas au cinéma. Se succèdent ensuite de multiples apparitions dans des séries télévisées jusqu'en 1984, où il se fait remarquer sur grand écran aux côtés de Daryl Hannah dans Splash, une comédie Disney. Malgré ce premier succès, les films suivants ne seront pas des réussites. Il faut attendre 1988 et Big pour que sa carrière explose : spécialiste des comédies, il acquiert les faveurs du public, et du métier. En effet, l'acteur obtient alors sa première nomination à l'Oscar.C'est en jouant un ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/20/01/30/15/03/1454869.jpg",
      "films_ID" => [
        5
      ], // 5 = Titanic
      "series_ID" => []
    ],
    [
      "id" => 38,
      "fullname" => "Vin Diezel",
      "age" => 55,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 2,
      "recompense" => 0,
      "biography" => "Elevé par une mère astrologue et un père adoptif professeur et directeur de théâtre, Vin Diesel monte sur les planches dès l'âge de sept ans dans le quartier new-yorkais de Greenwich Village. Tout en continuant le théâtre, avec la troupe de son père puis à Broadway, il étudie l'anglais et l'écriture artistique à l'Université de Hunter. Doté d'un physique impressionnant, il devient parallèlement videur dans certains établissements huppés de New York. En 1994, Vin Diesel se tourne résolument vers le cinéma en écrivant, produisant, réalisant et interprétant son court métrage Multi-Facial. Après un premier long remarqué, Strays, présenté au Festival de Sundance en 1997, il est contacté par Steven Spielberg pour le rôle d'Adrian Caparzo dans Il faut sauver le soldat Ryan (1998). Sa carrière lancée, il prête sa voix rauque au Géant de fer (1999) dans le ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/15/10/14/11/30/335169.jpg",
      "films_ID" => [
        24
      ], // 24 = Il faut sauver le soldat Ryan
      "series_ID" => []
    ],
    [
      "id" => 39,
      "fullname" => "Al Pacino",
      "age" => 82,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 13,
      "biography" => "Fils de Salvator Pacino tailleur de pierre et Rose Gerard sans profession, tous les deux originaires de la Sicile. Elevé par ses grands-parents maternels James et Kate Gerard. Alfred James Pacino collectionne depuis ses débuts les nominations aux Oscars, mais c'est seulement en 1992 qu'il obtient sa première statuette pour Le Temps d'un week-end (adaptation du roman Parfum de femme de Giovanni Arpino). Vingt ans plus tôt, il connaissait sa première nomination pour son interprétation de Michael Corleone dans Le Parrain de Francis Ford Coppola. L'acteur passe son enfance dans le Bronx. Envahi par la passion de la comédie, il entre à l'âge de quatorze ans à la High School of Performing Arts de Manhattan, mais, sans diplôme, ni bagages culturels, il se retrouve en difficulté face aux méthodes utilisées. A seize ans, il décide de tout arrêter et passe deux ans à multiplier ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/20/01/21/17/01/1089602.jpg",
      "films_ID" => [
        4, 47
      ], // 4 = Le Parrain / 47 = Scarface
      "series_ID" => []
    ],
    [
      "id" => 40,
      "fullname" => "Michelle Pfeiffer",
      "age" => 64,
      "sexe" => true,
      "nationality" => "Américaine",
      "nomination" => 0,
      "recompense" => 3,
      "biography" => "Après des études d'art dramatique, Michelle Pfeiffer fait ses débuts à l'écran en 1977 dans les séries Delta House et CHiPs. Apparaissant en 1980 dans la comédie pour ados The Hollywood Knights, la belle californienne doit encore attendre deux ans pour s'imposer dans un rôle plus consistant, celui de Stephanie Zinone dans Grease 2. Sa carrière lancée, elle devient, sous la direction de Brian De Palma, l'inoubliable Elvira Hancock, épouse camée de Tony Montana (Scarface, 1983).Egalement tête d'affiche de Ladyhawke, la femme de la nuit (1984), le conte médiéval de Richard Donner, Michelle Pfeiffer assoit son statut de star en s'illustrant tour à tour dans Série noire pour une nuit blanche (1986), Les Sorcières d'Eastwick (1987) ou encore Veuve, mais pas trop (1988), cette dernière prestation lui valant une nomination au Golden Globe de la Meilleure actrice. Nomination ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/16/08/11/16/58/392702.jpg",
      "films_ID" => [
        47, 48
      ], // 47 = Scarface / 48 = Esprits Rebelles
      "series_ID" => []
    ],
    [
      "id" => 41,
      "fullname" => "Michael Clarke Duncan",
      "age" => 54,
      "sexe" => true,
      "nationality" => "Américaine",
      "nomination" => 3,
      "recompense" => 0,
      "biography" => "Michael Clarke Duncan suit des études de communication à l'Alcorn State University du Mississippi et trouve son premier emploi dans une compagnie de gaz de sa ville natale, tout en travaillant occasionnellement comme videur dans diverses boîtes de nuit du quartier sud. C'est ainsi que ce colosse de 150 kilos fait la connaissance d'un producteur de théâtre qui l'engage comme agent de sécurité sur la tournée de la pièce Beauty shop, part 2. Arrivé à Los Angeles, Michael Clarke Duncan signe un contrat avec une petite agence et décroche ses premiers rôles dans des spots télévisés avant de débuter dans la comédie de F. Gary Gray, Friday (1995).De par son physique imposant, il se retrouve souvent cantonné à des rôles de videur (Bulworth de Warren Beatty), de garde du corps (The Players club de Ice Cube) ou de gros \"nounours\" (Armageddon de Michael Bay). Mais en 2000, ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/17/03/13/13/39/033268.jpg",
      "films_ID" => [
        45
      ], // 45 = La ligne Verte
      "series_ID" => []
    ],
    [
      "id" => 42,
      "fullname" => "Julia Roberts",
      "age" => 55,
      "sexe" => true,
      "nationality" => "Américaine",
      "nomination" => 0,
      "recompense" => 7,
      "biography" => "Julia Roberts débute sa carrière en jouant dans des spots publicitaires et à la télévision avant d'apparaître sur grand écran dans des petites productions comme Un Fusil pour l'honneur, dans lequel joue également son frère Eric Roberts, ou dans Mystic pizza (Donald Petrie,1988).Elle perce grâce à Potins de femmes (Herbert Ross, 1989) et surtout Pretty woman (Garry Marshall, 1990), qui lui valent deux Golden Globes et deux nominations aux Oscars. Ses rôles suivants (dans L'Expérience interdite de Joel Schumacher et Les Nuits avec mon ennemi de Joseph Ruben) remportent moins les faveurs du public, sans pour autant défaire sa popularité. Grâce à sa collaboration avec Robert Altman (The Player, 1992 ; Prêt-à-porter, 1994), et L'Affaire Pélican d'Alan J. Pakula (1993), elle revient sur le devant de la scène cinématographique.Dès lors, l'actrice enchaîne les ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/19/01/07/09/57/2037510.jpg",
      "films_ID" => [
        21
      ], // 21 = hook ou la revanche du capitaine crochet
      "series_ID" => []
    ],
    [
      "id" => 43,
      "fullname" => "Clint Eastwood",
      "age" => 92,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 16,
      "biography" => "Né d'un père comptable, le jeune Clinton mène avec ses parents une vie de nomade. Il fait des petits boulots sans grande conviction, puis part à l'armée, où ses rencontres l'amènent à travailler chez Universal. Il fait sa première apparition à l'écran en 1955 dans La Revanche de la créature, puis enchaîne les petits rôles anecdotiques.Son ascension débute avec un rôle dans la série Rawhide. Entre 1956 et 1958, il apparaît successivement dans Ne dites jamais adieu, La Corde est prête, Escapade au Japon, et C'est la guerre. Peinant à percer dans son pays, Clint accepte de partir en Italie, et c'est grâce à Sergio Leone et la trilogie Pour une poignée de dollars, Et pour quelques dollars de plus et Le Bon, la brute et le truand qu'il devient très populaire. Devenu une star en quelques années, Eastwood retourne aux États-Unis et crée sa propre maison de ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/15/10/15/16/51/136406.jpg",
      "films_ID" => [
        2, 12, 13, 14, 15, 16
      ], // 2 = Mystic River / 12 = Impitoyable / 13 = Gran Torino / 14 = Le bon, la brute et le truand / 15 = Et pour quelques dollars de plus / 16 = Invictus
      "series_ID" => []
    ],
    [
      "id" => 44,
      "fullname" => "Sally Field",
      "age" => 76,
      "sexe" => false,
      "nationality" => "Américaine",
      "nomination" => 0,
      "recompense" => 9,
      "biography" => "Alors que Sally Field, fille de l'actrice Margaret Field, suit les cours d'art dramatique de la Columbia, elle est choisie en 1965 pour jouer dans une série télévisée très guillerette, Gidget. Deux ans plus tard, elle fait ses débuts au cinéma dans La Route de l'ouest au côté de Kirk Douglas et Robert Mitchum. Cependant, dans les années 60 et 70, sa carrière se poursuit essentiellement à la télévision, notamment dans la série Flying Nun. De 1967 à 1970, elle y incarne Soeur Bertille, une nonne au grand coeur, qui se sert de son couvre-chef un peu particulier pour voler et aller secourir autrui. En 1973, l'actrice arrête de tourner et s'inscrit alors à l'Actor's Studio où elle étudie pendant deux ans.En 1976, Sally field revient sur les écrans avec la comédie dramatique Stay hungry dirigée par Bob Rafelson puis continue sur cette nouvelle voie avec le téléfilm ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/medias/nmedia/18/35/13/07/20441838.jpg",
      "films_ID" => [
        22, 44
      ], // 22 = Madame Doubtfire / 44 Forrest Gump
      "series_ID" => []
    ],
    [
      "id" => 45,
      "fullname" => "Pierce Brosnan",
      "age" => 69,
      "sexe" => true,
      "nationality" => "Irlandais",
      "nomination" => 0,
      "recompense" => 4,
      "biography" => "Au début des années 60, l'Irlandais Pierce Brosnan s'installe avec sa famille à Londres. Après trois ans passés à étudier au Drama Centre, il s'essaie au théâtre, d'abord comme régisseur, puis comme comédien. Ses performances d'acteur sont très vites remarquées et il débute au cinéma avec un petit rôle dans le polar Racket (1980). Il apparaît ensuite en tête d'affiche des thrillers Nomads (1986) et Le Quatrième protocole (1987), mais c'est sur petit écran qu'il se fait connaître du grand public, en incarnant le Détective Remington Steele de 1982 à 1987.En 1987, encore sous contrat pour la télévision, Pierce Brosnan décline l'offre du producteur Albert R. Broccoli qui lui propose le rôle culte de James Bond. Laissant la place à Timothy Dalton, il poursuit une carrière cathodique, trouve en Mister Johnson (1990) son premier rôle tout en nuances, aborde la ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/14/10/28/11/03/011222.jpg",
      "films_ID" => [
        22
      ], // 22 = Madame Doubtfire
      "series_ID" => []
    ],
    [
      "id" => 46,
      "fullname" => "Martin Lawrence",
      "age" => 57,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 1,
      "biography" => "La carrière de Martin Lawrence est toute entière dévouée à la comédie. Ayant grandi dans le Maryland, à Landover, il s'illustre dans l'improvisation, notamment au célèbre Improvisation Club de Manhattan, où il remporte la première place de la compétition du Star Search Showcase. C'est en voyant la cassette vidéo de ce spectacle que les dirigeants de Columbia Television lui proposent son premier rôle régulier dans la sitcom What's happening now. Il est ensuite l'animateur de l'émission Def comedy jam avant de tenir son premier rôle au cinéma dans Do the right thing de Spike Lee en 1989.Trois ans plus tard, il tient la vedette de la populaire série télévisée qui porte son nom, Martin, et donne la réplique à l'un de ses modèles, Eddie Murphy, dans le long métrage Boomerang (1992). Les deux acolytes se retrouveront sept ans plus tard pour prendre Perpète sous la ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/20/01/16/09/58/2687647.jpg",
      "films_ID" => [
        33
      ], // 33 = Bad Boys
      "series_ID" => []
    ],
    [
      "id" => 47,
      "fullname" => "Danny Glover",
      "age" => 76,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 2,
      "recompense" => 0,
      "biography" => "Danny Glover s'intéresse au théâtre pendant ses études universitaires au San Francisco College. Après avoir fait son apprentissage au \"Black Actors' Workshop\" de l'\"American Conservatory Theater\", il s'illustre dans de nombreux spectacles dont Macbeth, Suicide in B Flat, de Sam Shepard et dans quatre pièces du dramaturge sud-africain Athol Fugard, dont The Blood Knot et The Island.En 1979, Danny Glover fait ses débuts au cinéma aux côtés de Clint Eastwood dans L'Evadé d'Alcatraz de Don Siegel. En 1985, après quelques années consacrées au petit écran, le comédien enchaîne trois compositions brillantes sous la direction de réalisateurs de renom. On le voit dans Witness de Peter Weir, Silverado de Lawrence Kasdan et surtout La Couleur pourpre de Steven Spielberg, qui le révèle auprès du grand public.En 1987, c'est le triomphe public avec le film d'action L'Arme fatale ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/16/06/13/12/52/236510.jpg",
      "films_ID" => [
        36
      ], // 36 = L'arme Fatale
      "series_ID" => []
    ],
    [
      "id" => 48,
      "fullname" => "Patrick Swayze",
      "age" => 57,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 3,
      "recompense" => 0,
      "biography" => "Avant d'être acteur, Patrick Swayze est d'abord danseur. Fils de la chorégaphe Patsy Swayze, il a d'abord dansé pour Disney (dans les parades des parcs d'attraction) et dans la comédie musicale Grease avant d'apparaître pour la première fois au cinéma en 1979 dans Skatetown. On le voit ensuite à la télévision (la mini-série Nord et Sud) et dans quelques films dont Outsiders et Youngblood. Mais le rôle qui le propulse sur le devant de la scène est celui de Johnny, le professeur de danse de Dirty Dancing (1987). Nommé aux Golden Globes pour sa performance, Swayze sort de l'ombre. Misant sur sa présence physique, il joue alors les \"durs\", comme dans Road House. Un film sur lequel il participe à la bande originale (les titres Raising Heaven (in Hell) Tonight et Cliff's Edge), tout comme il l'avait fait sur Dirty Dancing avec She's Like the Wind.Mais un second tournant ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/14/10/08/11/38/217404.jpg",
      "films_ID" => [
        54
      ], // 54 = Ghost 
      "series_ID" => []
    ],
    [
      "id" => 49,
      "fullname" => "Whoopi Goldberg",
      "age" => 67,
      "sexe" => false,
      "nationality" => "Américaine",
      "nomination" => 0,
      "recompense" => 4,
      "biography" => "Whoopi Goldberg passe son enfance à New York. Tout en participant à quelques pièces de théâtre à Broadway, elle gagne sa vie en travaillant dans un funérarium mais aussi dans le métier de la maçonnerie. En s'installant à Los Angeles, elle se joint à des groupes d'improvisation et se lance ainsi définitivement dans le métier de comédienne. En 1985, son premier long métrage lui apporte immédiatement la renommée : sa prestation dans La Couleur pourpre de Steven Spielberg est en effet saluée par la critique. Un premier grand rôle dramatique qui lui apporte une nomination à l'Oscar de la meilleure actrice (ainsi que le Golden Globe équivalent) mais qui s'avère paradoxal au regard d'une carrière qui sera ensuite très majoritairement placée sous le signe de la comédie. Whoopi Goldberg s'illustre dans un nombre impressionnant de comédies, qu'elles soient d'action, ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/16/04/27/14/43/595089.jpg",
      "films_ID" => [
        54
      ], // 54 = Ghost 
      "series_ID" => []
    ],
    [
      "id" => 50,
      "fullname" => "Terence Knox",
      "age" => 76,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Il est en particulier connu dans le rôle du Sergent Anderson dans la série télévisée",
      "photo" => "https://images.mubicdn.net/images/cast_member/58775/cache-322979-1521672622/image-w856.jpg?size=800x",
      "films_ID" => [], // 
      "series_ID" => [
        0, 8
      ], // 0 = L'enfer du devoir, 8 = Le Caméléon
      "series_ID" => []
    ],
    [
      "id" => 51,
      "fullname" => "Michael T. Weiss",
      "age" => 60,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Il a obtenu une licence de beaux-arts à l'université de Californie du Sud (USC), il a étudié l'histoire de l'art à l'université Harvard puis a continué ses études artistiques à l'université d'Otis (Otis College of Art and Design). Il réside actuellement à Venice et à New York1",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/medias/nmedia/18/36/37/58/19510314.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        8
      ], // 8 = Le Caméléon
      "series_ID" => []
    ],
    [
      "id" => 52,
      "fullname" => "Andrea Parker",
      "age" => 52,
      "sexe" => false,
      "nationality" => "Américaine",
      "biography" => "Andrea Parker entame une carrière de danseuse classique à l’âge de 6 ans. A 15 ans, elle quitte le domicile familial pour rejoindre les ballets pour enfants, ce qui l’amène à se produire dans les plus grandes villes américaines (San Francisco, New York ou Cleveland). Elle devient par la suite danseuse professionnelle.À 18 ans, Andrea Parker change de carrière et se tourne vers la comédie tout en travaillant comme barmaid. Après une courte apparition dans la série Mariés, deux enfants en 1998, elle enchaîne les rôles dans de nombreux shows (Seinfeld, Urgences, Ellen, JAG,…). La consécration arrive pour elle avec le rôle de Miss Parker dans Le Caméléon : lancée sur les traces de Jarod (Michael T. Weiss), elle s’investit totalement dans le personnage, et suit entre autres des cours de tir et une formation en cascade automobile.En 2011, elle tient un rôle ...",
      "photo" => "https://static1.purepeople.com/articles/3/43/96/33/@/6318325-andrea-parker-a-los-angeles-pour-la-soir-950x0-2.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        8
      ], // 8 = Le Caméléon
      "series_ID" => []
    ],
    [
      "id" => 53,
      "fullname" => "Tyler Posey",
      "age" => 31,
      "sexe" => true,
      "nationality" => "Américaine",
      "biography" => "Intéressé par l’art dès son plus jeune âge, Tyler Posey est introduit dans le milieu du cinéma grâce à son père, l’acteur John Posey. Pendant cinq saisons, son premier rôle, décroché à dix ans, est celui d’un orphelin dans la série Doc, menée par Billy Ray Cyrus. L’année suivante, deux grosses productions américaines lui permettent de côtoyer des têtes d’affiches, dont Arnold Schwarzenegger dans Dommage collatéral ou encore Jennifer Lopez et Ralph Fiennes dans Coup de foudre à Manhattan. Ayant pris goût aux plateaux de tournage, il enchaîne les apparitions dans les séries télévisées : policières (FBI Portés disparus, Sue Thomas, l’œil du FBI), fantastique (Smallville) et dramatique (Brothers & Sisters).En 2007, il auditionne pour le rôle du mystérieux Jacob Black de Twilight, finalement attribué à Taylor Lautner. Ce n’est qu’une ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/17/08/01/10/31/070787.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        6
      ], // 6 = Teen Wolf
      "series_ID" => []
    ],
    [
      "id" => 54,
      "fullname" => "Dylan O'Brien",
      "age" => 31,
      "sexe" => true,
      "nationality" => "Américaine",
      "biography" => "Tout petit, Dylan O’Brien baigne déjà dans le milieu du cinéma de par les métiers de ses parents (un père, caméraman et une mère, ancienne actrice). Né à New York, il grandit dans le New Jersey, jusqu'à l'âge de douze ans. Par ailleurs, il est ce que l’on peut nommer un “Tutti Frutti”, il a en effet plusieurs origines : irlandaises, anglaises, italiennes et espagnoles.  En 2005, il décide d'agrémenter son compte YouTube en y postant des vidéos dans lesquelles il se met en scène avec ses amis. Grâce à cela, il se fait remarquer par une productrice et réalisatrice qui lui propose de collaborer avec elle sur une web-série. Entre temps, il finit brillamment le lycée et décide de partir étudier à l’Université de Syracuse. Il se rétracte cependant et emménage à Los Angeles pour tenter une carrière de comédien. Dylan O'Brien y fait la connaissance ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/18/01/25/11/43/1943234.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        6
      ], // 6 = Teen Wolf
      "series_ID" => []
    ],
    [
      "id" => 55,
      "fullname" => "Holland Roden",
      "age" => 36,
      "sexe" => false,
      "nationality" => "Américaine",
      "biography" => "Depuis sa tendre enfance, Holland Roden suit de nombreux cours d'art dramatique. Pourtant, c’est diplômée en biologie moléculaire que la jeune femme sort Major de l'UCLA, quelques années plus tard. Mais il ne lui faudra pas un an avant qu’elle ne revienne à sa passion initiale. Son premier rôle important est celui de Bronwyn dans 12 Miles Of Bad Road – une comédie HBO sur une famille dysfonctionnelle originaire du Texas. Malheureusement, le show lui fait surtout découvrir la dure réalité du métier, puisqu’il est annulé après 6 épisodes. La jeune actrice persévère et décroche une apparition dans American Girls 5. Une visibilité qui va lui permettre de participer à de nombreuses séries, de Lost, les disparus, à Cold Case, en passant par Esprits Criminels et Weeds. En 2011, Jeff Davis lui offre le rôle de la populaire Lydia Martin dans Teen Wolf, une série ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/18/02/26/17/43/1142004.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        6
      ], // 6 = Teen Wolf
      "series_ID" => []
    ],
    [
      "id" => 56,
      "fullname" => "JR Bourne",
      "age" => 52,
      "sexe" => true,
      "nationality" => "Canadien",
      "biography" => "Natif du Canada, David Bourne Jr., commence par tourner dans des spots publicitaires à l’âge de 8 ans. Alors qu’il se prédestinait à reprendre l’affaire familiale, son désir de retourner derrière l’écran le pousse à abandonner ses études de commerce au bout de deux ans. En rejoignant une école de théâtre à Toronto, ses multiples apparitions dans les séries, films et téléfilms lui permettent d’acquérir en expérience. C’est en 2001, aux crédits du film Antitrust, qu’il s’attribue le pseudonyme de JR Bourne. Du côté du cinéma, même s’il n’a pas encore de rôle de premier plan, ses performances dans certains longs-métrages lui valent des récompenses. Le Vancouver Film Critics Circle lui offre le prix du « meilleur acteur secondaire» dans On the Corner, un drame sur le trafic de drogue à Ontario, puis en 2007, grâce à sa prestation au sein ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/medias/nmedia/18/95/04/25/20373977.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        2, 6
      ], // 2 = Les 100 / 6 = Teen Wolf
      "series_ID" => []
    ],
    [
      "id" => 57,
      "fullname" => "Linden Ashby",
      "age" => 62,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Motivé par son rêve de devenir acteur, Linden Ashby abandonne des études en psychologie pour s’installer à New York, où il entame des cours d’arts dramatiques. Après quelques apparitions dans des séries à succès comme MacGyver, les producteurs de Melrose Place, l’ayant d’abord engagé pour une figuration lors de la première saison, font de nouveau appel à lui pour jouer un personnage plus important. Son retour dans la saison 6 se fait sous les traits du Dr Brett Cooper, l’amant de la défunte Kimberly Shaw, déterminé à venger sa bien-aimée et dépouiller Lexi Sterling de sa f// 2 = Les 100 / ortune. C’est en tant que Johnny Cage, le héros de Mortal Kombat, qu'il se distingue au cinéma. Initialement attribué à Brandon Lee avant que ce dernier ne meure, le rôle permet à l’acteur de mettre en avant ses aptitudes physiques. Alors qu’il pratique depuis ses 21 ans le ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/16/07/26/15/15/106365.jpg",
      "films_ID" => [
        56
      ], // 56 = Nos coeurs meurtris
      "series_ID" => [
        6
      ] // 6 = Teen Wolf
    ],
    [
      "id" => 58,
      "fullname" => "Nordman Reedus",
      "age" => 53,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Né à Hollywood, Norman Reedus affiche un parcours professionnel atypique. Artiste accompli, il s’essaie à la peinture, la photographie, mais également à la sculpture et la réalisation. Tout lui réussit, jusqu’à devenir le modèle de la marque Prada. Pourtant, le jeune homme est encore plein de ressources et cherche à s’imposer dans le monde du 7ème Art. Il commence sa carrière dans des pièces de théâtre, avant d’être repéré par Guillermo Del Toro, qui lui propose le rôle de Jeremy dans le film d’horreur Mimic en 1999. Norman s’illustre ensuite dans Sous influence, en incarnant Harry Odum, un jeune garçon dont la vie bascule dans la violence. Il enchaîne avec Blade II, Un Crime ou encore American Gangster. En 2005, il décroche le rôle principal dans Antibodies, de Christian Alvart, dans lequel il prête ses traits à un policier allemand aux prises ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/19/09/25/09/52/1052084.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        4
      ] // 4 = The Walking Dead
    ],
    [
      "id" => 59,
      "fullname" => "David Harbour",
      "age" => 47,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Après avoir fait ses débuts à Broadway en 1999 dans la reprise du Faiseur de pluie, David Harbour obtient des petits rôles sur petit mais surtout sur grand écran. Il est ainsi un travailleur sur les docs dans La Guerre des mondes, un homosexuel marié discutant avec Jake Gyllenhaal dans Le Secret de Brokeback Mountain ou encore Dracula dans Awake. Second rôle de plus en plus demandé, l'acteur apparaît aussi dans Quantum of Solace, Les Noces rebelles, Jeux de pouvoir, The Green Hornet et W.E.. Dans le violent polar End of Watch sorti en 2012, David Harbour incarne un policier chevronné qui reçoit un coup de couteau dans l'oeil par le membre d'un gang et dans le thriller Balade entre les tombes il se glisse dans la peau de l'un des deux tueurs en série du film. Truand confronté à Denzel Washington dans Equalizer, le comédien campe aussi John Morris dans Strictly ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/19/07/01/11/26/0269842.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        3
      ] // 3 = Stranger Things
    ],
    [
      "id" => 60,
      "fullname" => "Millie Bobby Brown",
      "age" => 18,
      "sexe" => false,
      "nationality" => "Britannique",
      "biography" => "Millie Brown est née en 2004 en Espagne de parents britanniques. Elle déménage en 2011 à Orlando en Floride avec sa famille.C'est là que la jeune Millie se fait repérer en 2013 par un dénicheur de talents hollywoodien qui arrive à convaincre les parents de la fillette qu'elle possède des instincts innés de comédienne. Ni une ni deux, la petite famille fait ses valises direction Los Angeles où Millie ne tarde pas à engager un agent. En moins de trois mois de présence dans la ville californienne, l'actrice obtient le rôle de la jeune Alice dans la série Once Upon a Time in Wonderland.La jeune comédienne se voit ensuite offrir le rôle de Madison O'Donnell dans Intruders où elle s'illustre dans la peau de cette petite fille spéciale. Elle apparaît ensuite dans NCIS, Modern Family et Grey's Anatomy avant de décrocher un rôle d'importance, celui d'Eleven dans la ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/17/10/27/11/44/0016642.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        3
      ] // 3 = Stranger Things
    ],
    [
      "id" => 61,
      "fullname" => "Finn Wolfhard",
      "age" => 20,
      "sexe" => true,
      "nationality" => "Canadien",
      "biography" => "Finn Wolfhard est né le 23 décembre 2002, à Vancouver, au Canada, dans une famille d'origine française, allemande et juive. C'est devant les Spider-Man de Sam Raimi que débute, très tôt, sa passion pour le métier d'acteur. Ses premiers pas à la télévision ont lieu en 2014, dans un épisode de la saison 2 de The 100, suivi, l'année d'après, d'une apparition dans la saison 11 de Supernatural. Mais, c'est dans Stranger Things, la série phénomène de Netflix avec Winona Ryder, qu'il se révèle avec succès au grand public. Le jeune comédien incarne Mike Wheeler, un garçon timide mais déterminé, qui se lance, avec l'aide de ses amis et d'une mystérieuse fille aux dons particuliers, à la recherche de leur ami disparu. Grand fan de musique, Finn fait quelques apparitions dans des clips musicaux, comme en 2012 dans \"Retro Ocean\" de Facts, ou encore dans \"Guilt Trip\" et ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/19/09/04/11/12/2066859.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        3
      ] // 3 = Stranger Things
    ],
    [
      "id" => 62,
      "fullname" => "Gaten Matarazzo",
      "age" => 20,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Natif du New Jersey, Gaten Matarazzo démarre très jeune sa carrière sur les planches, dans les comédies musicales Priscilla, Queen of the Desert et Les Misérables. Il fait ensuite ses débuts sur le petit écran en 2015, dans un épisode de The Blacklist, mais c'est la série de Netflix, Stranger Things, avec Winona Ryder, qui le fait connaître. Grâce à son humour et sa fraîcheur, il conquiert le cœur de millions de fans à travers le monde dans la peau de Dustin Henderson. Ce rôle lui vaut d'ailleurs un Shorty Award du meilleur acteur en 2017. A l'instar de son personnage, Gaten est atteint de dysplasie cléidocrânienne, une maladie génétique rare, touchant principalement la formation des os du crâne, de la clavicule et la dentition. La reconnaissance de cette condition médicale est une cause à laquelle tient beaucoup l'adolescent, qui voit son élocution rendue ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/17/10/27/11/42/2602520.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        3
      ] // 3 = Stranger Things
    ],
    [
      "id" => 63,
      "fullname" => "Caleb McLaughlin",
      "age" => 21,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Originaire de New York, Caleb McLanghlin se dirige très tôt vers une carrière d’acteur en intégrant l’école d’art d’Harlem, où il bénéficie d’une formation en comédie et en danse. Il révèle ses talents de comédien sur les planches, en interprétant Simba enfant dans la comédie musicale de Broadway, Le Roi Lion. Le jeune garçon fait ses premiers pas à l’écran avec quelques apparitions dans des programmes comme New York Unité Spéciale et Unforgettable. En 2016, il s’illustre dans la série Shades of Blue : une flic entre deux feux, aux côtés de Jennifer Lopez. Cependant, c’est la série Netflix Stranger Things, qui le fait connaître du grand public. L’acteur y joue le rôle de Lucas Sinclair, qui se lance avec ses amis à la recherche de son meilleur ami disparu. Cette interprétation lui vaut d’ailleurs une nomination aux BET Awards, dans la ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/17/10/27/11/46/4938184.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        3
      ] // 3 = Stranger Things
    ],
    [
      "id" => 64,
      "fullname" => "Noah Schnapp",
      "age" => 18,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Noah Schnapp révèle ses talents précoces de comédien dès l’âge de 6 ans, participant à des pièces de théâtre locales. Encouragé par l’un de ses professeurs à se lancer dans le milieu professionnel, le jeune garçon apparaît dans de nombreuses publicités avant de débuter sa carrière sur les chapeaux de roue, n’interprétant pas moins que le fils de Tom Hanks dans Le Pont des Espions. Diversifiant ses activités, il se prête à l’exercice du doublage pour Snoopy et les Peanuts : le film puis participe au clip vidéo de \"LA Devotee\" du groupe Panic ! At the Disco. En 2016, Noah Schnapp décroche l’audition pour interpréter Will Byers dans la production de Netflix, Stranger Things. Dans cette série se déroulant en 1983 dans l’Indiana, la mystérieuse disparition de son personnage pousse Joyce (Winona Ryder), sa mère névrosée, et sa bande de copains, à partir activement à sa recherche.",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/19/07/01/11/28/3898122.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        3
      ] // 3 = Stranger Things
    ],
    [
      "id" => 65,
      "fullname" => "Sadie Sink",
      "age" => 20,
      "sexe" => false,
      "nationality" => "Américaine",
      "biography" => "D’origine irlandaise, anglaise et allemande, Sadie Sink naît et grandit au Texas dans une fratrie de cinq enfants. Dès son plus jeune âge, elle développe un goût prononcé pour les arts dramatiques et s’amuse à reprendre les chansons et mises en scène de High School Musical avec l’un de ses grands frères. Leur mère soutient alors leur passion en les inscrivants tous deux à des cours de théâtre, de danse et de chant en 2011. L’année suivante marque le début de la carrière de Sadie, lorsqu’elle décroche le rôle d’Annie dans la comédie musicale éponyme de Broadway. Ses talents de comédiennes remarqués, elle fait ses premiers pas à l’écran en 2013, dans deux épisodes des séries policières The Americans et Blue Bloods. Mais ce n’est que deux ans plus tard, à l’âge de 13 ans, qu’elle se fait réellement connaître dans la première saison de ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/18/01/22/11/10/3489468.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        3
      ] // 3 = Stranger Things
    ],
    [
      "id" => 66,
      "fullname" => "Natalia Dyer",
      "age" => 25,
      "sexe" => false,
      "nationality" => "Américaine",
      "biography" => "Dès l’enfance, Natalia témoigne de son intérêt pour la comédie et en fait la ligne directive de son parcours scolaire, jusqu’à l’obtention de son diplôme au lycée spécialisé dans les arts du spectacle de Nashville, où elle a grandi. Pendant ses études, elle trouve tout de même le temps de faire un premier pas dans le milieu artistique, en jouant aux côtés de Miley Cyrus dans le film Hannah Montana, en 2009. Le succès originel de la série du même nom, offre une importante visibilité au long-métrage et permet à Natalia de décrocher son premier rôle au cinéma, deux ans plus tard, dans le film d’aventure Whitney Brown. Par la suite, la jeune fille enchaîne les apparitions dans des court-métrages, avant de prétendre en 2016, au rôle de Nancy Wheeler, grande sœur du protagoniste, pour le programme original Netflix, Stranger Things, qu’elle obtient après ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/16/07/12/16/20/027772.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        3
      ] // 3 = Stranger Things
    ],
    [
      "id" => 67,
      "fullname" => "Charlie Heaton",
      "age" => 28,
      "sexe" => true,
      "nationality" => "Britannique",
      "biography" => "Charlie Heaton a débuté sa carrière d'acteur, en 2015, dans la série policière britannique DCI Banks. Il joue ensuite le rôle d'un adolescent turbulent dans le drame As You Are, primé au Festival de Sundance de 2016, et puis celui d'un inquiétant tétraplégique, aux côtés de Naomi Watts dans le thriller psychologique Oppression. Les frères Duffer le choisissent ensuite pour incarner Jonathan, le fils aîné de Joyce, incarné par Winona Ryder, dans leur création Stranger Things.

      Fort du succès de la série Netflix, Charlie prête ses traits à l'explosif Cannonball dans le blockbuster X-Men : Les Nouveaux Mutants, dirigé par Josh Boone. Dans un autre registre, le jeune anglais partage l'affiche avec Anya Taylor-Joy et George Mackay dans le film horrifique Marrowbone, du réalisateur espagnol Sergio G. Sanchez.M.O.",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/19/04/02/14/11/1067965.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        3
      ] // 3 = Stranger Things
    ],
    [
      "id" => 68,
      "fullname" => "Joe Keery",
      "age" => 30,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Né dans le Massachusetts, Joe Keery, passionné par le monde du spectacle depuis l'enfance, grandit à Newburyport entouré de ses parents et de ses quatre sœurs. Sur les conseils de son aînée, il s'inscrit au programme d'art dramatique de son université. Après l'obtention de son diplôme, Joe Keery enchaîne plus d'une centaine d'auditions sans grand succès, se contentant d'apparitions dans des publicités pour KFC, Domino's et Amiibo. En attendant de conjurer le sort, le jeune homme se concentre sur la musique et sur son groupe de rock psychédélique, Post Animal, dont le premier album sort en octobre 2015. Cette même année, et après avoir obtenu quelques rôles ponctuels dans des séries telles que Sirens, Chicago Fire et Empire, le réalisateur Stephen Cone lui propose de tourner dans son long-métrage : Harry Gamble's Birthday Party, où il interprète un adolescent en ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/17/10/27/11/49/2852491.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        3
      ] // 3 = Stranger Things
    ],
    [
      "id" => 69,
      "fullname" => "Maya Hawke",
      "age" => 24,
      "sexe" => false,
      "nationality" => "Américaine",
      "biography" => "Fille des acteurs Uma Thurman et Ethan Hawke, Maya Hawke fait ses débuts en tant que mannequin. En 2017, elle tourne un clip publicitaire pour Calvin Klein aux côtés de Kirsten Dunst et Rashida Jones sous la direction de Sofia Coppola. La même année elle fait ses débuts en tant qu'actrice dans la mini-série Les Quatre filles du Docteur March où elle incarne Jo. Elle rejoint ensuite le casting de la troisième saison de la série Netflix à succès Stranger Things dans lequel elle tient le rôle de Robin, la collègue de Steve (Joe Kerry). La jeune fille participe également au tournage du prochain film de Quentin Tarantino, Once upon a time... in Hollywood. Si son rôle est secondaire, le film marque néanmoins sa première collaboration avec le metteur en scène dont sa mère était la muse.",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/19/07/23/09/46/0953152.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        3
      ] // 3 = Stranger Things
    ],
    [
      "id" => 70,
      "fullname" => "Hugh Laurie",
      "age" => 63,
      "sexe" => true,
      "nationality" => "Britannique",
      "biography" => "Cadet de quatre enfants, James Hugh Calum Laurie aurait pu s'orienter vers une carrière sportive. Pendant ses années d'études, le jeune homme se donne beaucoup pour l'aviron. Il devient vite un des meilleurs et en 1977, il est champion national junior d'aviron. L'année suivante, Laurie entre à l'université de Cambridge avec l'intention d'étudier l'archéologie et l'anthropologie. Il rejoint également leur prestigieuse équipe d'aviron. Atteint de mononucléose, il doit - le coeur lourd - se retirer des compétitions. Il intègre alors le Cambridge Footlights Club, tremplin de nombreux comédiens britanniques. Il y fait la connaissance d'Emma Thompson et de Stephen Fry, avec lequel il écrit la revue \"The Cellar Tapes\" qui sera jouée au Edinburgh Festival Fringe de 1981. Fort de ce succès, Laurie, Fry, Thompson, Robbie Coltrane et Ben Elton lancent Alfresco, une comédie à ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/16/01/13/14/35/542911.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        5
      ] // 5 = Dr. House
    ],
    [
      "id" => 71,
      "fullname" => "Robert Sean Leonard",
      "age" => 53,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Robert Sean Leonard fait ses études à l’université de Fordham puis de Columbia avant d’intégrer la Screen Actors Guild. Le futur comédien en profite pour changer de nom passant de Robert Lawrence Leonard à Robert Sean Leonard, Sean étant le prénom de son frère. Robert débute sa carrière en 1986 dans un téléfilm intitulé My Two Love avant de passer sur grand écran avec le film de SF Le Projet Manhattan. Après la comédie pour adolescents My best friend is a vampire en 1987, le comédien décroche le rôle de sa vie. En effet, c’est en 1989 que le cinéaste Peter Weir le choisit pour incarner un des héros du film culte Le Cercle des poètes disparus. Robert y incarne Neil Perry, un adolescent souhaitant devenir acteur et qui se retrouve en conflit avec son père, en désaccord profond avec le choix de son fils. Le comédien donne la réplique à Robin ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/medias/nmedia/18/35/48/40/19598908.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        5
      ] // 5 = Dr. House
    ],
    [
      "id" => 72,
      "fullname" => "Jesse Spencer",
      "age" => 43,
      "sexe" => true,
      "nationality" => "Australien",
      "biography" => "Né de l’union de Robyn et du docteur Rodney Spencer, le jeune Jesse est le troisième de leurs quatre enfants. Dès son plus jeune âge, il apprend à jouer du violon et nourrit une passion pour la comédie. Ainsi, à 12 ans, il participe à sa première comédie musicale \"Anna et le Roi\", où il campe le personnage de Louis. L’année suivante, il retrouve les planches pour donner corps à Christopher Robin dans la pièce de théâtre \"Winnie l’ourson\". Puis, en 1993, il se produit au Princess Theater de Melbourne pour \"Scrooge\". Scolarisé dans un établissement privé, Jesse Spencer passe les auditions pour intégrer en 1994 le soap australien Neighbours. Il obtient le rôle de Billy Kennedy. Pour autant, il poursuit ses études considérant alors le métier d’acteur comme un passe-temps. De plus, à l’instar de ses frères et sœur, il souhaite se diriger vers des études ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/16/06/16/15/09/056919.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        5
      ] // 5 = Dr. House
    ],
    [
      "id" => 73,
      "fullname" => "Omar Epps",
      "age" => 49,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Originaire de Brooklyn, Omar Epps a été élève à la Fiorello H. LaGuardia High School of Performing Arts de New York. Depuis 1991, il alterne régulièrement entre le petit et le grand écran. C'est avec le film Juice d'Ernest Dickerson qu'il fait ses débuts au cinéma.

      En 1996, Omar Epps joue dans Spoof movie, une comédie potache écrite par son ami d'enfance, Marlon Wayans. Il s'illustre également à la télévision, le temps d'une saison, en interprétant le Dr. Dennis Gant dans la série culte Urgences. En 1997, Wes Craven lui offre un rôle dans son slasher Scream 2. Omar Epps inscrit aussi à son actif la comédie familiale Breakfast of Champions (1999), ainsi qu'une variation moderne de Dracula (2000). Plus récemment, l'acteur se retrouve Dans les cordes, en partagant l'affiche avec Meg Ryan, avant de donner la réplique à Jude Law qui campe un dragueur invétéré dans Irrésistible Alfie.",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/20/07/23/11/59/0034815.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        5
      ] // 5 = Dr. House
    ],
    [
      "id" => 74,
      "fullname" => "Olivia Wilde",
      "age" => 38,
      "sexe" => false,
      "nationality" => "Américaine",
      "biography" => "Née à New York, Olivia Wilde grandit à Washington D.C. avec ses deux parents journalistes. Elle fait ses études à la Phillips Academy d’Andover, dans le Massaschusetts, où elle étudie la comédie et réalise une vingtaine de productions de l’école. Poursuivant dans cette veine, elle s’installe à Dublin en vue de s’inscrire à la Gaiety School of Acting. A la fin de ses études, Olivia Wilde déménage à Los Angeles et travaille dans une agence de casting. C'est en 2004 qu'elle obtient un petit rôle dans la comédie Girl Next Door et joue dans 13 épisodes de la série Newport Beach. Parallèlement, elle apparaît dans deux films indépendants : on la surprend tout d’abord en jeune fille libérée auprès d’Emile Hirsch dans Alpha Dog de Nick Cassavetes et sous l’habit, plus sage, d’une demoiselle d’honneur dans Conversation(s) avec une femme de Hans Canosa.Ce ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/18/10/22/15/51/1936560.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        5
      ] // 5 = Dr. House
    ],
    [
      "id" => 75,
      "fullname" => "Peter Jacobson",
      "age" => 57,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Originaire de Chicago, Peter Jacobson est le fils d’une personnalité journaliste locale, son père : Walter David Jacobson. Baigné dans ce monde médiatique, il obtient une licence de sciences politique en 1987. Inscrit à la Juilliard School, la division de théâtre lui ouvre ses portes. A 26 ans, fraîchement diplômé, Peter fait ses débuts au Lortel Theater avec des pièces comme Four dogs and a Bone, June Moon ou encore Rhinocéros d’Eugène Ionesco.Après ces premières fois sous les projecteurs, Peter se dirige de manière plus significative vers le 7ème art. En 1994, il signe son premier rôle dans Milliardaire Malgré lui, au côté de Nicolas Cage. A cette époque, il commence à côtoyer les grands noms du cinéma, mais reste souvent cantonné à des personnages secondaires. Notamment, dans Harry dans tous ses états, de Woody Allen sorti en 1997, Pour le meilleur et ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/17/03/13/17/16/425117.jpg",
      "films_ID" => [
        29
      ], // Peter Jacobson 
      "series_ID" => [
        5
      ] // 5 = Dr. House
    ],
    [
      "id" => 76,
      "fullname" => "Jennifer Morrison",
      "age" => 43,
      "sexe" => false,
      "nationality" => "Américaine",
      "biography" => "Jennifer Morrison débute très tôt une carrière artistique en étant mannequin enfant et apparaît notamment dans des publicités. Devenue adolescente, la belle Jennifer écume les castings dans son état natal de l’Illinois. Elle décroche un premier rôle au cinéma en 1994 dans le drame Intersection dans lequel la comédienne incarne la fille de Richard Gere et Sharon Stone. La même année, on la revoit au cinéma dans un petit rôle pour la comédie de noël Miracle sur la 34ème rue. Il faut ensuite attendre 5 longues années avant de la revoir sur grand écran. En effet, l’actrice décide d’intégrer l’université Loyola de Chicago section théâtre afin de parfaire son talent. A sa sortie, la jeune femme obtient le rôle de Samantha Kozac dans le thriller fantastique Hypnose dans lequel elle donne la réplique à Kevin Bacon. En 2000, l’artiste fait partie du ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/15/09/24/11/24/477029.jpg",
      "films_ID" => [],
      "series_ID" => [
        5
      ] // 5 = Dr. House
    ],
    [
      "id" => 77,
      "fullname" => "Lisa Edelstein",
      "age" => 56,
      "sexe" => false,
      "nationality" => "Américaine",
      "biography" => "Lisa Edelstein est née dans une famille de trois enfants. Ses parents sont Alvin et Bonnie Edelstein. Son père est pédiatre et médecin urgentiste. Elle passe son enfance à Wayne, dans le New Jersey.

      Délaissant l'école pour la vie buissonnière, elle part à New York en 1984 à l'âge de 18 ans afin d'étudier à la Tisch School of the Arts de l'université de New York pour étudier l'art dramatique.",
      "photo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Lisa_Edelstein_recadr%C3%A9_%28cropped%29.jpg/220px-Lisa_Edelstein_recadr%C3%A9_%28cropped%29.jpg",
      "films_ID" => [],
      "series_ID" => [
        5
      ] // 5 = Dr. House
    ],
    [
      "id" => 78,
      "fullname" => "Eliza Taylor",
      "age" => 33,
      "sexe" => false,
      "nationality" => "Australienne",
      "biography" => "L’australienne Eliza Jane Taylor-Cotter grandit dans un milieu artistique, entre une mère écrivain et un beau-père comédien. A l’âge de 14 ans seulement, elle apparaît pour la première fois sur les écrans dans Pirate Island, une série familiale dans laquelle elle tient l’un des premiers rôles. La même année, elle tourne dans deux autres programmes, Pyjama Party et dans le soap Les Voisins, grâce auxquels elle se fait connaître dans son pays natal. L’actrice multiplie les figurations au cinéma, dans 6 plots, Patrick et November Man, avec Pierce Brosnan, avant de se faire remarquer par la CW en 2014, qui fait appel à son talent pour leur nouvelle série, The 100. Elle y incarne Clarke Griffin, le personnage principal, une jeune femme très intelligente, luttant pour la survie de son peuple fraîchement arrivé sur Terre. Dans cet environnement apocalyptique, ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/15/08/06/12/06/289529.jpg",
      "films_ID" => [],
      "series_ID" => [
        2
      ] // 2 = Les 100
    ],
    [
      "id" => 79,
      "fullname" => "Paige Turco",
      "age" => 57,
      "sexe" => false,
      "nationality" => "Américaine",
      "biography" => "Elevée dans le Massachusetts, Paige Turco rêve de devenir danseuse étoile. Une blessure l’oblige à abandonner le sport à l’âge de 14 ans pour étudier la comédie. Fraîchement diplômée de l’université du Connecticut, elle débute sa carrière dans le feuilleton quotidien Haine et Passion, dans lequel elle joue Dinah Morgan Marler, une adolescente troublée par son adoption. L’année suivante, elle est transférée dans le soap d’ABC, La Force du destin. Néanmoins, elle souhaite avant tout tenter sa chance sur le grand écran. C’est ainsi qu’elle se retrouve au casting de Tortues Ninja 2 et 3, dans le rôle d’April O’Neil, la meilleure amie des 4 super-héros. Dans les années 2000, la jeune femme devient l’une des protagonistes d’American Gothic, Gail Emory, décidée à résoudre le meurtre de ses parents. Faute d’audience, cette série fantastique ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/19/03/11/16/23/1495624.jpg",
      "films_ID" => [],
      "series_ID" => [
        2
      ] // 2 = Les 100
    ],
    [
      "id" => 80,
      "fullname" => "Bob Morley",
      "age" => 38,
      "sexe" => true,
      "nationality" => "Australien",
      "biography" => "Après la mort de son père, Robert Morley est considéré comme un enfant dissipé. Les études n’étant pas faites pour lui, il abandonne son diplôme d’ingénieur, pour se lancer dans l’étude des arts à Melbourne. Là-bas, il engage un agent pour l’aider à démarrer une carrière d’acteur. C’est en 2006 qu’il se fait repérer pour la première fois par le public australien, grâce au soap Summer Bay. Dans le rôle du coureur de jupons Drew Curtis, il multiplie les conquêtes amoureuses. Deux ans plus tard, il se retrouve à l’affiche de la fiction policière CIB : Criminal Investigation Bureau, dans laquelle il fait partie d’une unité d’élite enquêtant sur des affaires criminelles. Il apparaît ensuite dans la série culte de son pays d'origine, Les Voisins, qui relate la vie mouvementée des habitants de Ramsey Street. Bob Morley est ici un infirmier ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/16/01/22/13/02/135671.jpg",
      "films_ID" => [],
      "series_ID" => [
        2
      ] // 2 = Les 100
    ],
    [
      "id" => 81,
      "fullname" => "Marie Avgeropoulos",
      "age" => 36,
      "sexe" => false,
      "nationality" => "Canadienne",
      "biography" => "Marie Avgeropoulos se fait repérer par l’industrie du divertissement grâce à son passe-temps préféré, la batterie. Au cours d’un casting, la musicienne attire tout de suite l’attention du réalisateur, Chris Columbus (Mme Doubtfire et Maman j’ai raté l’avion) qui cherche un batteur pour son prochain film, I Love You Beth Cooper. Un an plus tard, la jeune canadienne apparaît dans un long-métrage du même cinéaste, Percy Jackson : Le voleur de Foudre. Dans la peau d’une des filles d’Aphrodite, elle séduit le grand public qui la retrouve ensuite dans Hunt to Kill. Elle campe ici la fille rebelle d’un soldat d’élite, kidnappée par de dangereux fugitifs. La même année, elle enchaîne les tournages entre le petit, dans Human Target et Eureka, et le grand écran, notamment dans 50/50 avec Joseph Gordon-Levitt. Le dramatique Lycée de la Honte, quant à ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/17/03/28/15/57/484874.jpg",
      "films_ID" => [],
      "series_ID" => [
        2
      ] // 2 = Les 100
    ],
    [
      "id" => 82,
      "fullname" => "Eli Goree",
      "age" => 28,
      "sexe" => true,
      "nationality" => "Canadien",
      "biography" => "Il débute sa carrière en 2006 dans la série North/South.

      De 2007 à 2009, il joue le rôle de Malik dans la série populaire de Global TV Da Kink in My Hair. Il apparait aussi dans la série Soul1.
      
      Au théâtre, il a joué le rôle principal de Jake dans la pièce Secrets of a Black Boy, saluée par la critique en 20092.
      
      Entre 2010 et 2013, il est apparu dans le documentaire parodique Pure Pwnage ainsi que dans les séries Supernatural et Dr Emily Owens.
      
      En 2014, il joue dans la première saison de The 100, diffusée sur The CW3.
      
      En 2016, il tient l'un des rôles principaux de la sérier Dead of Summer4,5,6. Mais la série est annulée après une courte saison. Cette même, il obtient son premier rôle important dans un long métrage avec La Couleur de la victoire7.
      
      En 2020, il joue dans One Night in Miami de Regina King il y incarne Cassius Clay alias Mohamed Ali.
      
      En 2022, il joue dans la série Périphériques, les Mondes de Flynne.",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/14/03/25/16/33/522204.jpgg",
      "films_ID" => [],
      "series_ID" => [
        2
      ] // 2 = Les 100
    ],
    [
      "id" => 83,
      "fullname" => "Christopher Larkin",
      "age" => 35,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Né en Corée du Sud, Christopher Larkin est adopté par une famille américaine originaire du Connecticut. En 2001, il est repéré par la réalisatrice Martha Coolidge, qui lui offre un petit rôle dans le téléfilm The Flamingo Rising. Séduit par l’univers du septième art, il décide d’orienter ses études vers la comédie. Il s’exerce sur les planches, particulièrement à Broadway, avant de commencer les figurations au cinéma (Stranger with Candy, The Big Bad Swim). Gregory Bonsignore fait appel au jeune comédien en 2012 pour jouer dans la web-série Squad 85. Sous les traits de Bobby, il est un agent propulsé dans le futur avec ses partenaires pour résoudre des affaires criminelles. Après quelques apparitions sur le petit écran, notamment 90210 et Awkward, la CW lui donne sa chance en lui confiant le personnage de Monty Green dans le teen-drama The 100. Dans la ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/15/01/14/15/08/544901.jpg",
      "films_ID" => [],
      "series_ID" => [
        2
      ] // 2 = Les 100
    ],
    [
      "id" => 84,
      "fullname" => "Devon Bostick",
      "age" => 31,
      "sexe" => true,
      "nationality" => "Canadien",
      "biography" => "Issu d’une famille du show-business, Devon Bostick démarre sa carrière d’acteur sur les bancs de l’école. Il figure d’abord sur le petit écran, notamment dans La Patrouille Fantôme et Missing : disparus sans laisser de trace, avant d’apparaître pour la première fois au cinéma dans Le territoire des morts, avec Simon Baker. En 2006, il se fait connaître du public canadien grâce à la série populaire Degrassi : Nouvelle génération. Un an plus tard, il est l’une des victimes du tueur au puzzle dans Saw IV, puis le héros du drame Adoration, dans lequel il campe un orphelin qui tente de reconstruire sa vie sur internet. Dans la peau de Leo Strange, il est le frère décédé d’Erica Strange durant toute une saison. A la suite de sa participation à la série, il devient l’un des personnages principaux de la trilogie Le journal d’un dégonflé, dans laquelle ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/14/03/26/10/56/274838.jpg",
      "films_ID" => [],
      "series_ID" => [
        2
      ] // 2 = Les 100
    ],
    [
      "id" => 85,
      "fullname" => "Isaiah washington",
      "age" => 59,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Comédien sur les planches de sa région d'origine du Texas, Isaiah Washington débute sur grand écran en 1991 dans la comédie Strictly Business avec Samuel L. Jackson et Halle Berry. C'est en 1994 que sa carrière démarre réellement avec un second rôle dans Crooklyn de Spike Lee. Un réalisateur qu'Isaiah Washington retrouve à trois reprises pour Clockers (1995), Girl 6 (1996) et Get on the Bus (1996). Cantonné aux seconds rôles musclés, l'acteur enchaîne les collaborations prestigieuses : avec Warren Beatty (Bulworth) et Steven Soderbergh (Hors d'atteinte) en 1998, puis avec Clint Eastwood (Jugé coupable) un an plus tard, où il incarne un condamné à mort. En 2000, l'Américain tourne sous la direction d'Andrzej Bartkowiak dans Roméo doit mourir, puis retrouve le réalisateur un an plus tard pour Hors limites, avec Steven Seagal. En 2002, Isaiah Washington est coup sur ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/15/08/06/16/05/224356.jpg",
      "films_ID" => [],
      "series_ID" => [
        2
      ] // 2 = Les 100
    ],
    [
      "id" => 86,
      "fullname" => "Henry Ian Cusick",
      "age" => 55,
      "sexe" => true,
      "nationality" => "Américain",
      "biography" => "Dans son enfance, Henry Ian Cusick vit aux quatre coins du monde : entre le Pérou, l’Espagne, l’Ecosse et Trinité-et-Tobago, où il réside pendant près de dix ans. Adolescent, il retourne à Glasgow pour étudier les arts dramatiques à l’Académie Royale d’Ecosse, l'établissement qui a accueilli James McAvoy, Richard Madden et bien d’autres. Son diplôme, doublé de son talent, lui permet aussitôt de faire ses premiers pas à la télé, dans Casualty et The Book Group, au début des années 2000. Il se fait connaître du grand public en tant que Desmond Hume de la série culte Lost, un naufragé vivant sur l’île depuis trois ans, avant le crash du vol Oceanic 815. Il est d’abord une figure périodique, puis devient ensuite l’un des personnages principaux de la troisième saison, jusqu’à la fin du show en 2010. Henry Ian Cusick apparaît également dans un ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/19/01/24/20/28/1717300.jpg",
      "films_ID" => [],
      "series_ID" => [
        2
      ] // 2 = Les 100
    ],
    [
      "id" => 87,
      "fullname" => "Richard Harmon",
      "age" => 31,
      "sexe" => true,
      "nationality" => "Canadien",
      "biography" => "Issu d’une famille du show-biz, Richard Harmon est destiné à percer dans le monde du septième art. C’est donc tout naturellement, à l’âge de 14 ans, que le jeune canadien démarre sa carrière sur le petit écran, grâce à sa participation à la fiction post-apocalyptique Jeremiah. Il enchaîne avec les tournages de téléfilms, notamment Dans la peau d’une ronde avec Kaley Cuoco, et de nombreuses séries, comme Smallville, Caprica ou Fringe. En 2010, ce fan de football américain devient l’un des personnages récurrents du programme fantastique Tower Prep, dans laquelle il incarne Ray Snider, un adolescent aux dons exceptionnels. Un an plus tard, il est la tête d’affiche du dramatique Judas Kiss, s’illustre dans le terrifiant Grave Encounters 2 et figure sous les traits de Jasper Ames, l’ex petit-ami de Rosie dans The Killing. Enfin, Richard Harmon enfile le ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/19/06/17/14/35/1596072.jpg",
      "films_ID" => [],
      "series_ID" => [
        2
      ] // 2 = Les 100
    ],
    [
      "id" => 88,
      "fullname" => "Ricky Whittle",
      "age" => 41,
      "sexe" => true,
      "nationality" => "Britannique",
      "biography" => "Enfant, Ricky Whittle est repéré par l’équipe de l’Arsenal pour devenir footballeur professionnel. Mais à la suite d’une blessure, il abandonne le sport pour se consacrer à ses études à l’université de Southampton. En 2000, il est l’égérie d’une campagne de la marque Reebook et, dans le même temps, touche de près sa passion en incarnant l’un des joueurs de l’Harchester United, Ryan Naysmith, de la série Dream Team. Il quitte alors la faculté pour se consacrer au monde du septième art. Ricky Whittle enfile pour la première fois, en 2006, le costume de Calvin Valentin, l’un des personnages principaux du soap britannique très populaire Hollyoaks, qui relate les histoires des habitants de la ville de Chester. Durant cinq ans, il reste sous les traits du jeune policier. Puis, en 2012, il apparaît dans les programmes américains Single Ladies et NCIS : ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/19/03/08/09/06/0889050.jpg",
      "films_ID" => [],
      "series_ID" => [
        2
      ] // 2 = Les 100
    ],
    [
      "id" => 89,
      "fullname" => "Lindsey Morgan",
      "age" => 32,
      "sexe" => false,
      "nationality" => "Américaine",
      "biography" => "Dès son plus jeune âge, Lindey Morgan découvre sa passion pour les arts du spectacle. Elle participe aux pièces de théâtre organisées par l’école et étudie la comédie à l’université du Texas. Mais la jeune femme fait vite le choix de déménager à Los Angeles pour démarrer sa carrière d’actrice. En 2011, elle apparaît dans le film Detention, sous les traits d’Alexis Spencer, une pom-pom girl du lycée. Après quelques figurations, notamment dans How I met your mother et Happy Endings, la belle brune décroche un rôle dans le soap d’ABC, Alliances et Trahisons. Elle y incarne Kristina Davis, la fille d’une riche famille vivant dans le grand luxe. Enfin, Lindsey Morgan devient l’une des potentielles victimes de la diabolique Elizabeth Bathory dans Chastity Bites, avant d’être contactée par la CW pour camper l’un des personnages récurrents de la ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/19/06/17/14/47/2135135.jpg",
      "films_ID" => [],
      "series_ID" => [
        2
      ] // 2 = Les 100
    ],
    [
      "id" => 90,
      "role" => "Le Professeur",
      "fullname" => "Alvaro Morte",
      "age" => 47,
      "sexe" => true,
      "nationality" => "Espagnol",
      "biography" => "Alvaro Morte fait ses débuts en tant qu’acteur à l’âge de 27 ans. Originaire d’Andalousie, il joue d’abord des personnages mineurs dans quelques séries espagnoles comme Hospital Central et Policias, en el corazon de la calle. C'est en 2007 qu'il décroche son premier grand rôle dans le programme Planta 25. Durant deux ans, et sous le nom d’Alvaro Antonio Garcia, il y interprète le garde du corps d’un dirigeant d’entreprise. Cependant, la série n’a pas suffisamment de succès pour permettre à Alvaro de se faire véritablement remarquer, et il enchaîne de nouveau les petites apparitions télévisées entre 2009 et 2014 dans Las chicas de oro, Isabel ou encore Bienvenidos al Lolita. C’est la telenovela El secret de Puente Viejo qui fait largement connaître le comédien auprès du public espagnol. Il y prête ses traits à Lucas Molliner, un médecin de ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/19/07/15/10/05/0800925.jpg",
      "films_ID" => [],
      "series_ID" => [
        1
      ] // 1 = La casa de Papel
    ],
    [
      "id" => 91,
      "role" => "Berlin",
      "fullname" => "Pedro Alonso",
      "age" => 51,
      "sexe" => true,
      "nationality" => "Espagnol",
      "biography" => "Né d’un père comédien, c’est à la fin du lycée que Pedro Alonso entame des démarches pour devenir lui-même acteur. Il s’inscrit à l’Académie royale supérieur d’art dramatique de Madrid en 1992 et débute sur les planches de théâtre dans plusieurs pièces, où il perfectionne son jeu et ses techniques de danse.S’il fait sa première expérience devant la caméra dans un court métrage en 1995, c’est l’année suivante qu’il obtient une réelle opportunité de se faire connaître grâce au film Alma Gitana, une romance dramatique dans lequel il tient le rôle principal, celui d’un danseur professionnel amoureux d’une gitane. Suite à cela, il apparaît dans de nombreux longs métrages et séries télévisées qui viennent enrichir sa carrière et le faire connaître du public espagnol. À partir de 1998, il enchaîne les rôles réguliers dans différents ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/19/07/15/10/04/2195903.jpg",
      "films_ID" => [],
      "series_ID" => [
        1
      ] // 1 = La casa de Papel
    ],
    [
      "id" => 92,
      "role" => "Tokyo",
      "fullname" => "Ursula Corbero Delgado",
      "age" => 33,
      "sexe" => false,
      "nationality" => "Espagnole",
      "biography" => "A l'âge de 6 ans, Úrsula Corberó souhaite déjà être actrice et tourne dans des publicités. Devenue adolescente, elle obtient son premier rôle à la télévision, dans la série catalane Mirall Trencat en 2002. Ses études terminées, la jeune femme est choisie pour incarner Ruth Gomez, une lycéenne souffrant de boulimie dans la célèbre série populaire Physique ou Chimie, diffusée sur NRJ12 et June. Acclamée par la critique pour sa performance exceptionnelle, son interprétation lui a valu pas moins de deux récompenses. Entre-temps, la belle brune espagnole enchaîne les rôles pour le petit écran dans Isabel, Gran Reserva, Anclados ou encore La embajada. Passionnée par la mode, l'artiste, également mannequin, devient le visage de plusieurs marques. La comédienne apparaît ensuite à l'affiche de quelques films tels que le thriller horrifique Paranormal Xperience 3D ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/18/05/14/14/42/5110321.jpg",
      "films_ID" => [],
      "series_ID" => [
        1
      ] // 1 = La casa de Papel
    ],
    [
      "id" => 93,
      "role" => "Nairobi",
      "fullname" => "Alba Flores",
      "age" => 36,
      "sexe" => false,
      "nationality" => "Espagnole",
      "biography" => "Entourée de grands-parents musiciens, d’une mère productrice et de cousins acteurs, Alba Gonzales Villa, de son vrai nom, grandit bercée par les arts. Très jeune, elle comprend qu’elle veut suivre les pas de ses proches et commence à étudier le théâtre à l’âge de 13 ans dans le but de devenir comédienne. Ce n’est qu’après six ans de cours qu’elle monte sur scène pour la première fois dans la pièce Luna de miel en Hiroshima. En 2005, elle fait ses débuts sur grand écran en décrochant un petit rôle dans la comédie El Calentito, puis à la télévision l’année suivante dans un épisode de la série El comisario. Malgré ces apparitions et sa participation musicale à deux autres films, ce n’est qu’en 2013 qu'Alba commence à se faire connaître grâce au personnage de Jamila, amie d’une espionne à l’aube de la Seconde Guerre Mondiale dans la ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/19/07/15/09/55/0011783.jpg",
      "films_ID" => [],
      "series_ID" => [
        1
      ] // 1 = La casa de Papel
    ],
    [
      "id" => 94,
      "role" => "Rio",
      "fullname" => "Miguel Herran",
      "age" => 26,
      "sexe" => true,
      "nationality" => "Espagnol",
      "biography" => "Après une adolescence rebelle, Miguel Herrán est repéré dans la rue à l’âge de 19 ans par le réalisateur espagnol Daniel Guzmán, qui l’invite à participer au casting de son premier long métrage. Il est choisi pour incarner le protagoniste du drame A Cambio de nada. Pour ce tout premier rôle, il se glisse dans la peau de Darío, un adolescent faisant face à la séparation de ses parents et fuyant son foyer avec son meilleur ami. Dans la rue, il découvre une autre façon de voir la vie et se trouve une nouvelle famille. En parallèle, l’acteur débutant étudie au laboratoire privé d’interprétation William Layton avant de terminer ses études au Central de Cine de Madrid, tout comme Daniel Guzmán. A sa sortie, A Cambio de nada (2015) se voit récompenser par plus de dix prix lors de différents festivals et compétitions. Le film remporte notamment le Golden ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/18/09/27/17/35/5121683.jpg",
      "films_ID" => [],
      "series_ID" => [
        1
      ] // 1 = La casa de Papel
    ],
    [
      "id" => 95,
      "role" => "Denver",
      "fullname" => "Jaime Lorente",
      "age" => 31,
      "sexe" => true,
      "nationality" => "Espagnol",
      "biography" => "Diplômé de l’école d’art dramatique de Murcie en Espagne, Jaime Lorente est un jeune homme aux multiples talents. Pratiquant en effet la danse contemporaine et l’escrime, il se produit aussi au théâtre et prend part à de nombreuses pièces, dont certaines le conduiront même sur les scènes américaines. Son talent est récompensé en 2014 du prix du meilleur acteur María Jesús Sirvent pour son interprétation d’Allan dans la pièce de théâtre “Equus” de Peter Shaffer. Mais c’est sur le petit écran que la carrière de Jaime Lorente prend son envol. Il y apparaît pour la première fois en 2016 dans la série dramatique El secreto de Puente Viejo diffusée sur la chaîne espagnole Antena 3. Il interprète alors le chimiste Elìas Mato dans plus de 20 épisodes du programme. L’année suivante, il fait partie du casting principal de la série espagnole ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/19/07/16/09/48/2580642.jpg",
      "films_ID" => [],
      "series_ID" => [
        1
      ] // 1 = La casa de Papel
    ],
    [
      "id" => 96,
      "role" => "Arturo Roman",
      "fullname" => "Enrique Arce",
      "age" => 50,
      "sexe" => true,
      "nationality" => "Espagnol",
      "biography" => "Il est d'abord allé à l'université pour étudier le droit, mais a arrêté ses études au cours de sa quatrième année. Il a alors remporté Ellos i Elles, une émission de télévision valencienne sur Canal Nou, et a utilisé les 2 millions de pesetas (environ 10 000 £ / 15 000 $) pour payer ses études à l'American Academy of Dramatic Arts. Il a fait ensuite carrière en Espagne et à l'étranger.

      Il est notamment connu internationalement pour son rôle de « Arturo Román » dans la série La casa de papel de 2017 à 2020.",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/19/07/16/09/47/3105042.jpg",
      "films_ID" => [],
      "series_ID" => [
        1
      ] // 1 = La casa de Papel
    ],
    [
      "id" => 97,
      "role" => "Raquel Murillo",
      "fullname" => "Itziar Ituno",
      "age" => 48,
      "sexe" => false,
      "nationality" => "Espagnol",
      "biography" => "Dès sa plus tendre enfance, Itziar Ituno se passionne pour le cinéma et suit des cours à l'école de Théâtre de Basauri, sa ville natale. En parallèle, et malgré son envie de devenir comédienne, elle étudie la sociologie à l'université et apprend le basque, sa langue maternelle étant le castillan. C'est ce bilinguisme qui lui permet de décrocher ses premiers rôles à la télévision et de faire débuts sur les chaînes publiques basques. Itziar commence par jouer dans le téléfilm, Agur Olentzero, à l’âge de 23 ans, avant d'enchaîner les pièces de théâtres et d'obtenir un petit contrat au cinéma en 2003 dans El final de la noche. Mais la jeune femme préfère revenir au petit écran et se fait notamment remarquer grâce au personnage de Nekane Beitia, une policière lesbienne, qu'elle interprète dans le soap opera Goenkale de 2008 à 2015, année de l'annulation ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/19/07/15/10/00/2486719.jpg",
      "films_ID" => [],
      "series_ID" => [
        1
      ] // 1 = La casa de Papel
    ],
    [
      "id" => 98,
      "role" => "Helsinki",
      "fullname" => "Darko Peric",
      "age" => 45,
      "sexe" => true,
      "nationality" => "Yougoslave",
      "biography" => "Darko Perić est un acteur serbe, né le 25 mars 1977 à Kladovo (actuelle Serbie, alors en RFS de Yougoslavie). Faisant carrière en Espagne, il a acquis une renommée mondiale pour le rôle de Helsinki dans la série espagnole La casa de papel.",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/19/05/17/17/06/0709022.jpg",
      "films_ID" => [],
      "series_ID" => [
        1
      ] // 1 = La casa de Papel
    ],
    [
      "id" => 99,
      "role" => "Marseille",
      "fullname" => "Luka Peros",
      "age" => 46,
      "sexe" => true,
      "nationality" => "Yougoslave",
      "biography" => "Né à Zagred, Luka Peros a déménagé en moyenne tous les cinq ans dans son enfance. Son père était ingénieur en pétrochimie et toute la famille le suivait au fil de ses affectations. C'est ainsi qu'il a vécu en Autriche, à Abu Dabi... A 18 ans, il a été laissé seul à Boston pour poursuivre ses études de théatre, cinéma et télévision.
      Il a un frère qui vit en Chine.",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/19/07/15/09/58/5735007.jpg",
      "films_ID" => [],
      "series_ID" => [
        1
      ] // 1 = La casa de Papel
    ],
    [
      "id" => 100,
      "role" => "Luis Tamayo",
      "fullname" => "Fernando Cayo",
      "age" => 54,
      "sexe" => true,
      "nationality" => "Espagnol",
      "biography" => "Fernando Cayo est un acteur et metteur en scène espagnol qui interprète le rôle du colonel Luis Tamayo dans La Casa de Papel.",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/21/09/14/17/23/4111743.jpg",
      "films_ID" => [],
      "series_ID" => [
        1
      ] // 1 = La casa de Papel
    ],
  ];
}
