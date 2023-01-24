<?php

namespace Model;

class RealisatorModel extends MediaModel
{
  protected array $_datas = [
    [
      "id" => 0,
      "fullname" => "Rob Reiner",
      "age" => 75,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 10,
      "recompense" => 0,
      "biography" => "Rob Reiner fréquente durant sa jeunesse les plus grands auteurs et acteurs comiques de la télévision américaine : Mel Brooks, Neil Simon, Larry Gelbart, etc. Au cours de ses études à l'Université de Californie, il fonde le groupe d'improvisateurs The Session, puis continue son apprentissage au Bucks County Playhouse de Pennsylvanie. Après avoir monté Huis-clos de Jean-Paul Sartre avec Richard Dreyfuss, il travaille durant plusieurs années au sein d'une troupe d'improvisateurs, The Committee. A la fin des années 60, il débute comme scénariste-interprète sur The Smothers brothers show et obtient un triomphe avec le rôle de Meathead, le sympathique balourd de la série All in the family, pour lequel il décroche deux Emmys. Il s'illustre par ailleurs dans plusieurs films, dont Enter laughing de Carl Reiner et Summertree de Anthony Newley, et diverses émissions avant de passer derrière la caméra.",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/17/02/01/14/27/168241.jpg",
      "films_ID" => [
        1, 2, 6
      ] // 1 = Le loup de Wall Street / 2 = Misery / 6 = Stand By Me
    ],
    [
      "id" => 1,
      "fullname" => "Martin Scorsese",
      "age" => 80,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 10,
      "recompense" => 19,
      "biography" => "Souffrant d'asthme, Martin Scorsese fréquente assidument les salles de cinéma de Little Italy dès son adolescence. Il souhaite devenir peintre puis prêtre avant d'entamer ses études à la New York University où il tourne ses premiers courts métrages. En 1965, il commence à travailler sur Who's that knocking at my door ?, son premier long métrage avec Harvey Keitel dans le rôle principal, qu'il ne terminera que quatre années plus tard. Entre temps, il se fait renvoyer du tournage des Tueurs de la lune de miel au bout d'une semaine et effectue quelques travaux de montage. Le cinéaste est alors approché par Roger Corman qui lui propose de financer son second long métrage, Bertha Boxcar (1972). Mécontent des contraintes imposées par le producteur, il cherche à revenir à un sujet plus personnel et finit par trouver les fonds nécessaires au tournage de Mean streets (1973). Le film marque sa première collaboration avec son acteur fétiche Robert De Niro et impose Scorsese comme l'un des réalisateurs les plus prometteurs de sa génération.",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/19/09/09/12/00/5874736.jpg",
      "films_ID" => [
        1, 3
      ] // 1 = Le loup de Wall Street / 3 = Les Affranchis
    ],
    [
      "id" => 2,
      "fullname" => "Steven Spielberg",
      "age" => 75,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 12,
      "biography" => "Sans doute une des personnalités les plus emblématiques et influentes du Septième Art, Steven Spielberg se montre très précoce. Enfant, il réalise quelques petits films amateurs puis abandonne rapidement ses études pour tenter sa chance à Hollywood. Assistant monteur sur la série La Grande caravane en 1957, il apprend son métier sur le tas dans les années 60 en réalisant des courts-métrages (tel que Amblin', dont il gardera d'ailleurs l’appellation pour sa future maison de production) et même un long métrage (Firelight), puis travaille pour le petit écran, dirigeant notamment des épisodes de Les Règles du Jeu, Night Gallery et Columbo.Son talent de mise en scène se révèle au grand jour en 1971 avec le téléfilm Duel, oppressante course-poursuite entre un employé de commerce et un camion fou, qui remporte le Grand Prix du Festival d'Avoriaz. Le cinéaste réalise ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/16/05/17/11/39/453609.jpg",
      "films_ID" => [
        8, 24, 25, 26, 27
      ] // 8 = Minority Report / 24 = Il faut sauver le soldat Ryan / 25 = La liste de schindler / 26 = E.T L'extra-terrestre / 27 = Jurassic Park
    ],
    [
      "id" => 3,
      "fullname" => "Thomas Carter",
      "age" => 69,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 10,
      "recompense" => 19,
      "biography" => "Thomas Carter a signé en 2001 le succès international Save the last dance pour Paramount Pictures, après avoir notamment dirigé Eddy Murphy dans le film d'action Le flic de Los Angeles.

      Il a remporté l'Emmy du meilleur réalisateur à deux reprises sur \"Equal Justice\" (série dont il était aussi le créateur et producteur exécutif) et a obtenu, en tant que producteur, l'Emmy du meilleur téléfilm pour Don King : seulement en Amérique.
      
      Carter a réalisé les pilotes de certaines des séries les plus populaires de la télévision américaine, dont \"Deux flics à Miami\", \"St. Elsewhere\", \"A year in the life\", \"Equal justice\" (Droit à la justice) et \"Jack Killian, l'homme au micro\".",
      "photo" => "https://aws.vdkimg.com/artist/7/1/1/9/71199_photo_scale_160x200.jpg",
      "films_ID" => [
        28
      ] // 28 = Coach Carter
    ],
    [
      "id" => 4,
      "fullname" => "Roland Emmerich",
      "age" => 67,
      "sexe" => true,
      "nationality" => "Allemand",
      "nomination" => 7,
      "recompense" => 19,
      "biography" => "Après des études de peinture et de sculpture, Roland Emmerich se lance dans la publicité puis étudie le cinéma à Munich. Il fait ses débuts derrière la caméra avec la réalisation du moyen métrage Franzmann. En 1984, il se distingue en mettant en scène le film étudiant le plus cher d'Allemagne, Le Principe de l'Arche de Noé, très remarqué au Festival de Berlin.A la fin des années 80, Roland Emmerich fait déjà montre de son goût pour la science-fiction avec des films comme Joey, Hollywood-Monster et Moon 44. C'est lorsqu'il s'installe aux Etats-Unis que sa carrière décolle. En 1992, il réalise Universal Soldier, avec Jean-Claude Van Damme, qui remporte un franc succès au box-office. Il confirme deux ans plus tard avec Stargate, la porte des étoiles, emmené par Kurt Russell.C'est en 1996 que Roland Emmerich accède à la consécration internationale avec ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/18/08/09/11/09/0942708.jpg",
      "films_ID" => [
        29, 30, 31
      ] // 29 = White House Down / 30 = Independence Day / 31 = The patriot, le chemin de la liberté
    ],
    [
      "id" => 5,
      "fullname" => "Mel Gibson",
      "age" => 66,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 5,
      "biography" => "Mel Gibson est le sixième d'une famille de 11 enfants qui, installée aux Etats-Unis, émigre bientôt en Australie, terre natale de la mère, Ann. Après une formation au National Institute of Dramatic Arts de Sidney, Mel Gibson fait ses débuts au cinéma dans Summer city (1977), un thriller australien de Christopher Fraser. Parallèlement, il se produit au théâtre, où il fait preuve d'éclectisme, puis dans des séries télévisées comme The Sullivans ou encore Tickled pink.En 1979, le succès du film d'action futuriste Mad Max de George Miller lui assure une renommée mondiale. Suivront deux suites intitulées Mad Max 2 (1981) et Mad Max au-delà du Dôme du Tonnerre (1985). Parallèlement, ses prestations d'attardé mental dans Tim (1979) de Michael Pate et de jeune soldat inconscient dans Gallipoli (1981) de Peter Weir lui permettent de gagner ses galons critiques, sous la ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/16/05/23/10/09/431481.jpg",
      "films_ID" => [
        34, 35, 36
      ] // 34 = Tu ne tueras point / 35 = Braveheart / 36 = L'arme Fatale
    ],
    [
      "id" => 6,
      "fullname" => "David Fincher",
      "age" => 60,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 5,
      "biography" => "Dès l'âge de huit ans, David Fincher réalise de nombreux films dans le cadre familial. Passionné par le travail de George Lucas, il intègre dix ans plus tard la société d'effets spéciaux de son modèle, Industrial, Light and Magic. Durant ses quatre années passées chez ILM, Fincher travaille ainsi sur les effets spéciaux du Retour du Jedi, d'Indiana Jones et le Temple maudit ou de L'Histoire sans fin. Fort de cet acquis, il se spécialise ensuite dans la réalisation de publicités et de clips musicaux, créant sa propre société de production, Propaganda Films. Son travail pour la marque Nike et pour des artistes comme Madonna, Aerosmith ou les Rolling Stones l'impose vite comme un jeune surdoué de l'image.A 29 ans, David Fincher s'engage avec la Fox pour signer son premier long métrage, Alien 3, troisième volet de la saga fantastique emmenée par Sigourney Weaver.",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/medias/nmedia/18/64/19/48/19965756.jpg",
      "films_ID" => [
        17, 37
      ] // 17 = Seven / 37 = the Social Network / 
    ],
    [
      "id" => 7,
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
      ] // 2 = Mystic River / 12 = Impitoyable / 13 = Gran Torino / 14 = Le bon, la brute et le truand / 15 = Et pour quelques dollars de plus / 16 = Invictus
    ],
    [
      "id" => 8,
      "fullname" => "Louis Leterrier",
      "age" => 49,
      "sexe" => true,
      "nationality" => "Français",
      "nomination" => 2,
      "recompense" => 0,
      "biography" => "Né d'un père réalisateur et d'une mère directrice artistique, Louis Leterrier est d'abord batteur d'un groupe de musique avant de se lancer dans la direction de courts métrages. A l'âge de 18 ans, après quelques stages en publicité, il part suivre des études de cinéma à la New York University. En 1997, il assiste Jean-Pierre Jeunet sur le tournage de Alien, la résurrection.De retour en France, il travaille avec Luc Besson à la réalisation de spots publicitaires pour Club Internet et L'Oréal et du film Jeanne d'Arc (1999). Il collabore également, en tant que deuxième assistant, avec Alain Chabat sur le tournage de Astérix et Obélix : mission Cléopâtre (2001). Passé à la réalisation en 2002, Louis Leterrier co-signe avec Corey Yuen Le Transporteur, un film d'action interprété par Jason Statham. Il entre alors dans \"l'écurie Besson\" au même titre que Chris Nahon ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/pictures/210/174/21017408_20130703172308067.jpg",
      "films_ID" => [
        38
      ] // 38 = Insaisissables
    ],
    [
      "id" => 9,
      "fullname" => "Gus Van Sant",
      "age" => 70,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 6,
      "biography" => "Passionné de peinture dès son plus jeune âge, Gus Van Sant reçoit le diplôme de la Rhode Island School of Design en 1970. Après avoir voyagé plusieurs années en Europe, il s'installe en 1976 à Los Angeles, où il se prend bientôt d'affection pour la population marginale, source d'inspiration de plusieurs de ses films.Gus Van Sant démarre en tant qu'assistant de production auprès de Ken Shapiro, et réalise de nombreux courts-métrages, avant son premier long Mala Noche (1985), une romance homosexuelle filmée en 16 mm et en noir & blanc, primée par l'Association des Critiques de Los Angeles. Alors courtisé par Universal, le réalisateur choisit pourtant de partir à Portland pour se consacrer à d'anciens projets de films. Il conte ainsi la dérive d'une bande de junkies dans Drugstore Cowboy (1989) et brosse le portrait de deux prostitués dans My Own Private Idaho ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/210/008/21000884_20130423171745401.jpg",
      "films_ID" => [
        18
      ] // 18 = Will Hunting
    ],
    [
      "id" => 10,
      "fullname" => "Joseph Kosinsky",
      "age" => 48,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 1,
      "recompense" => 0,
      "biography" => "Joseph Kosinski fait ses études à la prestigieuse Université de Columbia (GSAPP) où il étudie l'architecture. Kosinski y officie toujours en tant qu'assistant professeur adjoint ; le metteur en scène apporte son aide aux étudiants dans les techniques de modélisation 3D. Le cinéaste met ensuite ses compétences aux services de l'infographie et des images générées par ordinateur. Il travaille ainsi dans la publicité, notamment pour les jeux vidéo. Le metteur en scène excelle dans ce domaine et se fait rapidement un nom dans le milieu à Los Angeles.Son travail dans la pub et sur les jeux vidéo attire l'attention des studios Disney qui font appel à lui pour diriger Tron l'héritage, suite directe du film de 1982, Tron de Steven Lisberger. Ce premier opus était déjà innovant en termes d'images de synthèse et Kosinski est un candidat tout désigné pour diriger cette ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/medias/nmedia/18/77/18/49/19581336.jpg",
      "films_ID" => [
        7
      ] // 7 = top Gun: Maverick
    ],
    [
      "id" => 11,
      "fullname" => "Joel Schumacher",
      "age" => 80,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 15,
      "recompense" => 0,
      "biography" => "Joel Schumacher suit des études artistiques à New York. Un diplôme de styliste en poche, il fait son entrée dans le monde de la télévision et du cinéma de manière flatteuse puisqu'il réalise des design de costumes pour des films d'Herbert Ross et de Woody Allen notamment.En 1981, Joel Schumacher réalise son premier long métrage, La Femme qui rétrécit, un hommage à Jack Arnold. Son premier succès public date quant à lui de 1985 avec la comédie St. Elmor's Fire, dans laquelle évolue Demi Moore et Rob Lowe. En 1987, il signe le film fantastique Génération perdue, libre adaptation des thèmes vampiriques, qui marque sa première collaboration avec Kiefer Sutherland qu'il retrouvera à quatre reprises dans la suite de sa carrière et notamment en 1991, avec L' Expérience interdite, film avec lequel le cinéaste fait son entrée dans la cour des grands en dirigeant Julia ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/16/08/05/12/08/341998.jpg",
      "films_ID" => [
        39
      ] // 39 = Phone Game
    ],
    [
      "id" => 12,
      "fullname" => "John McTiernan",
      "age" => 71,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 4,
      "recompense" => 0,
      "biography" => "Diplômé en théâtre de l'école de Juillard dans l'état de New York, John McTiernan effectue ses premiers pas derrière la caméra dans le cadre de l'American Film Institute, puis sur des spots publicitaires au début des années 80. En 1986, le metteur en scène américain signe son premier long métrage, le thriller Nomads avec pour vedette l'acteur irlandais Pierce Brosnan. Une expérience réussie même si relativement méconnu, qui pousse la 20th Century Fox a confier à John McTiernan son projet de science-fiction Predator en 1987. A la surprise générale, Predator rencontre un gigantesque succès public et critique. La réalisation efficace et sans concession de John McTiernan, associée à l'interprétation musclée de sa vedette Arnold Schwarzenegger, fait mouche et propulse le cinéaste dans le gotha des réalisateurs d'action. Un statut qu'il justifie une nouvelle fois ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/18/09/17/17/12/5258047.jpg",
      "films_ID" => [
        40,
      ] // 40 = Une journée en enfer
    ],
    [
      "id" => 13,
      "fullname" => "Oliver Stone",
      "age" => 76,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 14,
      "biography" => "D'un tempérament aventurier, Oliver Stone, né de père américain et de mère française, effectue très jeune de nombreux voyages avant de s'engager dans l'armée américaine et de partir pour le Vietnam. Il rentrera au pays auréolé de deux prestigieuses décorations (l’Étoile de Bronze et la Purple Heart), mais traumatisé par l'horreur des combats. Son orientation politique et artistique s'en ressentira. De retour, il reprend ses études et, en 1971, décroche un diplôme de cinéma à l'université de New York. Passionné par tous les aspects du 7e Art, Oliver Stone n'aura de cesse de se diversifier, voire de cumuler les fonctions : réalisateur, producteur, scénariste et même acteur... Scénariste de tous ses films, il sera aussi crédité pour les scripts, entre autres, de Midnight express (Oscar du Meilleur scénario), Conan le barbare, Scarface et Evita. En tant que ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/medias/nmedia/18/35/22/56/19648730.jpg",
      "films_ID" => [
        10,
      ] // 10 = Né un 4 Juillet
    ],
    [
      "id" => 14,
      "fullname" => "Michael Mann",
      "age" => 79,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 2,
      "biography" => "Après avoir étudié à la London's International Film School, Michael Mann débute sa carrière en réalisant des documentaires, des spots publicitaires et le court-métrage Juanpuri, pour lequel il reçoit le prix du jury au Festival de Cannes en 1970. Cinq ans après, il devient scénariste pour la télévision et travaille notamment sur la série Starsky et Hutch. Michael Mann passe ensuite à la réalisation de son premier téléfilm en 1979 avec Comme un homme libre, drame se déroulant dans l'univers carcéral.Michael Mann continue dans le registre du polar avec Le Solitaire en 1981, long métrage interprété par James Caan. Le réalisateur enchaîne en 1983 avec La Forteresse noire, mélange habile de fantastique et de film de guerre. Le réalisateur accède ensuite à la célébrité en créant et en produisant la série Deux flics à Miami avec la star montante de l'époque ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/14/06/05/12/11/300915.jpg",
      "films_ID" => [
        9,
      ] // 9 = Collateral
    ],
    [
      "id" => 15,
      "fullname" => "James Cameron",
      "age" => 68,
      "sexe" => true,
      "nationality" => "Canadien",
      "nomination" => 0,
      "recompense" => 9,
      "biography" => "James Cameron débute sa carrière en tant que directeur artistique, maquettiste, et projectionniste d'un film produit par Roger Corman, Les Mercenaires de l'espace, en 1980. Il passe à la réalisation de son premier film qu'en 1981 avec Piranha 2 - Les Tueurs volants. Cinéaste peu prolifique, il parvient tout de même à donner au cinéma de science-fiction ses lettres de noblesse à grands renforts d'effets spéciaux révolutionnaires, et ce en seulement quatre films dont il rédige également les scripts : Terminator (1984), Aliens le retour (1986), Abyss (1989), et Terminator 2 (1991).Trois ans après le second Terminator, il retrouve Arnold Schwarzenegger et signe l'un des plus gros succès de l'année 1994, avec le remake musclé de La Totale de Claude Zidi, True Lies. Entre temps, il produit Point Break (1991), et un autre film de science-fiction, Strange Days, deux longs ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/22/12/07/15/19/3602099.jpg",
      "films_ID" => [
        5, 43
      ] // 5 = titanic / 43 = Avatar
    ],
    [
      "id" => 16,
      "fullname" => "M. Night Shyamalan",
      "age" => 52,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 4,
      "biography" => "Issu d'un milieu aisé, Manoj Nelliyattu Shyamalan grandit en Pennsylvanie, dans la banlieue chic de Philadelphie. Poussé très jeune vers le cinéma, il réalise plusieurs dizaines de courts métrages amateurs largement inspirés de Steven Spielberg, son idole, avant de partir étudier à l'Ecole des Arts de l'université de New York.Son premier long métrage, Praying with Anger (1992) est plus ou moins basé sur une de ses propres expériences : un retour en Inde, son pays natal, après des années passées aux Etats-Unis. Acclamé par la critique, boudé par le public, le réalisateur enchaîne sur Wide Awake (1998), qu'il interprète, réalise, écrit, produit et tourne dans la ville de son enfance, Philadelphie.Sixième Sens, son 3ème film, inaugure en 1999 une collaboration fructueuse avec l'acteur Bruce Willis. Ce film traitant de phénomènes paranormaux est un succès ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/19/01/16/14/57/5699897.jpg",
      "films_ID" => [
        41, 42
      ] // 41 = Incassable / 42 = Glass
    ],
    [
      "id" => 17,
      "fullname" => "Robert Zemeckis",
      "age" => 70,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 2,
      "biography" => "Robert Zemeckis étudie à l'Université de l'Illinois, puis obtient en 1973 une licence de cinéma à l'USC. Au cours de ses études, ce natif de Chicago écrit, produit et réalise Field of honor, court métrage qui obtient l'Oscar du Meilleur film d'étudiant et décroche une quinzaine de récompenses un peu partout dans le monde.En 1978, grâce au soutien d'un certain Steven Spielberg, avec lequel il a participé à l'écriture de 1941 et qui deviendra l'un de ses proches, Robert Zemeckis signe son premier long-métrage, la comédie Crazy day, évocation de la première tournée des Beatles. Il réalise ensuite La Grosse magouille, mais c'est en 1984, avec le film d'aventure A la poursuite du diamant vert, emmené par Michael Douglas, que le cinéaste connaît son premier grand succès public.Dès lors, Robert Zemeckis accumule les succès, son cinéma de divertissement se mariant ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/16/11/10/15/18/427241.jpg",
      "films_ID" => [
        44, 46
      ] // 44 = Forrest Gump / 46 = Seul au monde
    ],
    [
      "id" => 18,
      "fullname" => "Frank Darabont",
      "age" => 63,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 7,
      "recompense" => 0,
      "biography" => "Frank Darabont naît le 28 janiver 1959 en France, dans le camp de réfugiés de Montbéliard. Ses parents, réfugiés politiques d'origine hongroise, déménage rapidement vers les Etats-Unis, et s'installe prêt de Los Angeles. Frank Darabont fera ainsi ses études dans le lycée d'Hollywood.Il fait son entrée dans le cinéma comme assistant de production et décorateur de plateau. Il travaille notamment sur le tournage de Les Jours et les Nuits de China Blue (1984) de Ken Russell et de Trancers (1985) de Charles Band. Il débute sa carrière de réalisateur en mettant en scène en 1983 un court métrage intitulé The Woman in the room, sa première adaptation de l'oeuvre de Stephen King.A la fin des années 80, Frank Darabont coécrit les scénarios de trois films d'horreur : Freddy 3, les griffes du cauchemar (1987) et Le Blob (1988) de Chuck Russell, ainsi que La Mouche 2 (1989) de ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/17/03/14/11/21/235114.jpg",
      "films_ID" => [
        45
      ] // 45 = La ligne Verte
    ],
    [
      "id" => 19,
      "fullname" => "Francis Ford Coppola",
      "age" => 83,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 11,
      "biography" => "Atteint à l'âge de dix ans de la poliomyélite et perdant ainsi l'usage de son bras gauche, Francis Ford Coppola apprend très vite à développer son imagination : durant sa convalescence, il met en scène des marionnettes, regarde beaucoup la télévision et réalise ses premiers films amateurs en 8mm. En 1960, il entre au département cinéma de l'UCLA (University of California, Los Angeles). Trois ans plus tard, Roger Corman lui confie la seconde équipe technique sur le tournage de The Young Racers, et lui permet par la même occasion de réaliser son premier long métrage : Dementia 13.En 1966, il entre dans la compagnie Seven Arts et écrit plusieurs scénarios dont Propriété interdite de Sydney Pollack et Paris brûle-t-il ? de René Clément. Il contribue également à l'écriture de Patton de Franklin J. Schaffner, qui lui vaut l'Oscar du Meilleur scénario en 1971. Il ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/17/03/27/15/24/261351.jpg",
      "films_ID" => [
        4
      ] // 4 = Le parrain
    ],
    [
      "id" => 20,
      "fullname" => "Brian De Palma",
      "age" => 82,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 1,
      "biography" => "Troisième fils d'un chirurgien orthopédiste et d'une femme au foyer, Brian De Palma grandit à Philadelphie dans l'ombre d'un frère aîné, Bruce, brillant scientifique adulé par la famille. Lui-même doué pour l'électronique -adolescent, il remporte un concours grâce à un mémoire sur \"l'application de la cybernétique aux équations différentielles\"-, il s'inscrit à la Columbia University de New York. Marqué par la vision, à 18 ans, de Sueurs froides d'Hitchcock (cinéaste auquel il ne cessera d'être comparé), il découvre avec émerveillement le monde du spectacle durant ses années de fac. Ayant acheté pour une poignée de dollars une caméra 16 mm, Brian De Palma signe au début des années 60 une poignée de courts et moyens métrages documentaires et de fiction, dont le remarqué Woton's Wake. Etudiant le cinéma au Sarah Lawrence College, il tourne avec ses ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/16/03/18/13/09/396751.jpg",
      "films_ID" => [
        47
      ] // 47 = Scarface
    ],
    [
      "id" => 21,
      "fullname" => "John N. Smith",
      "age" => 79,
      "sexe" => true,
      "nationality" => "Canadien",
      "nomination" => 0,
      "recompense" => 1,
      "biography" => "John N. Smith completed a BA in political philosophy at McGill University in Montreal in 1964. He worked as a stevedore, tobacco picker, construction worker and taxi driver before joining the CBC as a researcher in 1968. Within a year, he was producing the prime-time public affairs program The Way It Is, then moved to the private sector to produce the critically acclaimed series The Fabulous Sixties and Here Come the Seventies, and won an Emmy Award for the series 51st State, produced for the New York public television station WNET.",
      "photo" => "https://www.northernstars.ca/wp-content/uploads/2016/12/John_N_Smith-350-640x746.jpg",
      "films_ID" => [
        48
      ] // 48 = Esprits Rebelles
    ],
    [
      "id" => 22,
      "fullname" => "Sergio Leone",
      "age" => 60,
      "sexe" => true,
      "nationality" => "Italien",
      "nomination" => 10,
      "recompense" => 0,
      "biography" => "Né le 3 janvier 1929 à Rome, fils du metteur en scène italien Roberto Roberti et de l'actrice Bice Valerian, Sergio Leone était, comme qui dirait, prédestiné au cinéma. Il débute dans le milieu en tant qu'assistant, aussi bien de cinéastes italiens (Le Voleur de bicyclette de Vittorio De Sica, 1949) que de cinéastes américains tournant en Italie (Quo Vadis de Mervyn LeRoy, 1951 ; Ben-Hur de William Wyler, 1960). C'est vers la fin des années 50 qu'il commence à écrire ses premiers scénarios, puis remplace le réalisateur Mario Bonnard sur le tournage de Les Derniers Jours de Pompei (1959), au générique duquel il sera crédité comme co-réalisateur. Suite au succès de cette aventure, il se voit confier la réalisation d'un peplum, Le Colosse de Rhodes (1961). Après avoir dirigé la seconde équipe du film de Robert Aldrich, Sodome et Gomorrhe (1961), et face au déclin ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/210/127/21012710_20130615140603648.jpg",
      "films_ID" => [
        14, 15
      ] // 14 = Le bon, la brute et le truand / 15 = Et pour quelques dollars de plus
    ],
    [
      "id" => 23,
      "fullname" => "Ridley Scott",
      "age" => 85,
      "sexe" => true,
      "nationality" => "Britannique",
      "nomination" => 30,
      "recompense" => 0,
      "biography" => "Frère aîné de Tony Scott.Ridley Scott étudie au West Hartpool College of Art et au Royal College of Art de Londres. Au début des années 60, il intègre la British Broadcasting Company (BBC) et devient réalisateur d'une série policière très populaire sur la chaîne, Z Cars. Il est également chef décorateur sur deux séries de science-fiction, Out of the unknown (1965) et R3 (1964), et devient rapidement l'un des réalisateurs télé les plus inventifs du moment.C'est en 1977 que Ridley Scott effectue son passage au grand écran avec Les Duellistes, un drame historique porté par Keith Carradine et Harvey Keitel. Le long-métrage obtient le Prix du Jury au Festival de Cannes. Le cinéaste enchaîne alors deux longs-métrages de science-fiction très vite élevés au rang de films cultes : Alien, le huitième passager (1979), où Sigourney Weaver se trouve confrontée à un ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/14/12/10/16/47/273365.jpg",
      "films_ID" => [
        19
      ] // 19 = Seul sur Mars
    ],
    [
      "id" => 24,
      "fullname" => "Peter Weir",
      "age" => 78,
      "sexe" => true,
      "nationality" => "Australien",
      "nomination" => 0,
      "recompense" => 4,
      "biography" => "Après avoir bouclé ses études dans son Australie natale, Peter Weir s'envole pour Londres où il rédige et interprète des sketches satiriques en compagnie de sa compagne. De retour sur ses terres au milieu des années 60, il officie en tant que machiniste et régisseur de télévision, puis réalise de nombreux courts et moyens métrages.C'est en 1974 que Peter Weir signe son premier long-métrage, la comédie burlesque et fantastique Les Voitures qui ont mangé Paris, suivi du drame onirique Pique-nique à Hanging Rock et du film-catastrophe La Derniere Vague. Mais c'est en 1981, avec Gallipoli, qu'il ouvre son œuvre à un public international en recréant à l'écran la bataille du même nom.Dès lors, Peter Weir trace une carrière à la fois éclectique et réfléchie. Cinéaste rare, il aborde successivement des thèmes variés et jongle avec des genres différents. Il ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/16/06/14/12/24/293253.jpg",
      "films_ID" => [
        20
      ] // 20 = Le cercle des poètes disparus
    ],
    [
      "id" => 25,
      "fullname" => "Chris Columbus",
      "age" => 64,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 3,
      "recompense" => 0,
      "biography" => "Dès son plus jeune âge, Chris Columbus réalise des films en super 8 à partir de ses propres storyboards. Durant ses études à la Tisch School of the Arts de New York, il vend son premier scénario, Jocks, une comédie semi-autobiographique sur un lycéen catholique qui tente de devenir joueur de football. Après quoi, il débute sa carrière à Hollywood comme scénariste, en écrivant tout d'abord le script de Reckless pour James Foley, un drame inspiré de sa propre expérience à l'usine dans l'Ohio. Peu après, a lieu le premier tournant important de sa carrière, quand Steven Spielberg l'engage pour rédiger les scénarios de ses trois nouvelles productions, les deux premières étant aujourd'hui considérées comme deux films cultes des années 80, les Gremlins, les Goonies et Le secret de la pyramide. Chris Columbus passe alors derrière la caméra en mettant en scène ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/medias/nmedia/18/35/25/24/19246507.jpg",
      "films_ID" => [
        22
      ] // 22 = Madame Doubtfire
    ],
    [
      "id" => 26,
      "fullname" => "Joe Johnston",
      "age" => 72,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 3,
      "recompense" => 0,
      "biography" => "Joe Johnston débute sa carrière en tant que collaborateur sur les effets spéciaux de La Guerre des étoiles, en 1977. Il y apparaît également dans la peau d'un soldat de l’Étoile Noire. Un baptême du feu prestigieux suivi de fonctions plus importantes: Johnston est responsable des effets spéciaux des deux autres volets de la saga de science-fiction, L'Empire contre-attaque et Le Retour du Jedi, puis travaille sur ceux des Aventuriers de l'Arche perdue, pour lesquels il remporte d'ailleurs un Oscar.Proche collaborateur de George Lucas et Steven Spielberg, Joe Johnston officie en tant que directeur artistique sur Indiana Jones et le Temple maudit et superviseur des séquences aériennes sur Always. Après avoir été réalisateur de seconde équipe sur Miracle sur la 8ème rue (1987) puis produit le film fantastique Willow (1988), il se lance dans la mise en scène avec Chérie, ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/17/09/13/11/04/0171604.jpg",
      "films_ID" => [
        23
      ] // 23 = Jumanji
    ],
    [
      "id" => 27,
      "fullname" => "Tony Scott",
      "age" => 68,
      "sexe" => true,
      "nationality" => "Britannique",
      "nomination" => 0,
      "recompense" => 1,
      "biography" => "Frère cadet (de près de sept ans) de Ridley Scott, Tony Scott découvre le septième art à 16 ans, lorsqu'il joue dans le premier court métrage de Ridley, Boy and Bicycle. Diplômé en art graphique de la Sunderland Art School et du Royal College of Art de Londres, il se passionne pour le cinéma lors d'études complémentaires au Leeds College of Arts. En 1973, les deux frères fondent leur propre compagnie de production publicitaire, RSA. Durant plus de dix ans, chacun réalisera des centaines de publicités et développera un style propre, qui n'est cependant pas exempt de similitudes.En 1982, Tony Scott passe au long métrage avec Les Prédateurs, film de vampires hyper stylisé éreinté par la critique. Le succès, il le connaît de façon fulgurante quatre ans après avec Top gun. Réussite phénoménale au box-office (plus de 175 millions de dollars de recettes pour les ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/medias/nmedia/18/35/27/65/19190666.jpg",
      "films_ID" => [
        32
      ] // 32 = Ennemi d'état
    ],
    [
      "id" => 28,
      "fullname" => "Michael Bay",
      "age" => 57,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 3,
      "biography" => "Diplômé de la Wesleyan University et de l'Art Center College of Design de Pasadena, Michael Bay se lance à 24 ans dans la réalisation de clips vidéos, parallèlement à ses études. Rapidement engagé par Propaganda Films après un clip pour Donny Osmond, il travaille pour des artistes comme Aerosmith, Tina Turner, Meat Loaf et Lionel Richie. En même temps, il aborde la mise en scène de spots publicitaires et réalise des campagnes pour la Croix Rouge, Nike, Budweiser, Coca Cola ou encore Reebok. Ce statut de \"clippeur\" inspire son style visuel à venir : montage rapide, mouvements de caméra visibles, images esthétisées (filtres, saturation des couleurs, etc.).En 1995 il exporte son savoir-faire au cinéma en dirigeant Will Smith et Martin Lawrence dans son premier long métrage, Bad boys, un buddy movie survitaminé qui redynamise le genre. Avec près de 160 millions de ...",
      "photo" => "https://fr.web.img6.acsta.net/c_310_420/pictures/15/09/15/12/58/353163.jpg",
      "films_ID" => [
        33, 49, 50
      ] // 33 = Bad Boys / 49 = Pearl Harbor / 50 = Armageddon
    ],
    [
      "id" => 29,
      "fullname" => "Richard Donner",
      "age" => 91,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 6,
      "recompense" => 0,
      "biography" => "Fils d'un fabricant de meubles de Manhattan, Richard Donner suit des études commerciales et théâtrales à l'Université de New York avant de débuter comme acteur de complément dans des spectacles expérimentaux. Il joue dans la pièce de Martin Ritt Of human bondage, mais abandonne rapidement la comédie pour la réalisation. Après avoir collaboré à divers programmes de télévision new-yorkais, il s'installe à Los Angeles en 1958, où il remporte son premier grand succès en dirigeant Steve McQueen dans la série Au nom de la loi. Suivent d'innombrables épisodes de feuilletons policiers (Sur la piste du crime, William Conrad, Kojak, Perry Mason, Les Rues de San Francisco).C'est en 1976 que Richard Donner s'impose à Hollywood avec le film fantastique La Malédiction avant de porter à l'écran les aventures du célèbre justicier volant Superman (1978), un des plus grands ...",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/17/03/20/16/48/436458.jpg",
      "films_ID" => [
        36
      ] // 36 = L'Arme Fatale
    ],
    [
      "id" => 30,
      "fullname" => "Stanley Kubrick",
      "age" => 70,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 2,
      "biography" => "Issu d'une famille juive new-yorkaise, Stanley Kubrick grandit dans le Bronx. Son père, Jack, médecin de son état, se passionne pour la photographie, passion contagieuse qu'il transmet à son fils. Au point que ce dernier est engagé à 17 ans par le magazine Look, et en devient le plus jeune photographe-reporter. Quatre années plus tard il réalise à la suite d'un reportage photo sur le boxeur Walter Cartier son premier film, un court-métrage documentaire intitulé The Day of The Fight, et démissionne de son poste pour se consacrer à la réalisation. Après quelques courts, il s'attelle en 1953 à son premier long-métrage, Fear and desire, financé en grande partie par son oncle, et qu'il désavouera plus tard, en interdisant sa projection. Il y cumule les fonctions de réalisateur, producteur, monteur, directeur photo, opérateur, et se charge même en personne du tirage ...",
      "photo" => "https://fr.web.img2.acsta.net/c_310_420/medias/nmedia/18/85/93/27/19813127.jpeg",
      "films_ID" => [
        51, 53
      ] // 51 = Shining / 53 = Full Métal Jacket
    ],
    [
      "id" => 31,
      "fullname" => "Milos Forman",
      "age" => 86,
      "sexe" => true,
      "nationality" => "Tchécoslovaque",
      "nomination" => 0,
      "recompense" => 10,
      "biography" => "Enfant de la guerre, Milos Forman perd ses parents, déportés à Auschwitz ; il est alors élevé avec ses frères par le reste de sa famille. Il étudie le cinéma à l'Académie de Musique et d'Art Dramatique de Prague et réalise son premier long métrage en 1963, L'As de pique. Une comédie douce-amère, mélange de tendresse et d'ironie, comme dans Les Amours d'une blonde (1965), pour lequel les Américains le remarquent. En 1967, sa satire provocatrice Au feu les pompiers ! lui vaut les foudres de la censure dans son pays. Alors qu'il se trouve à Paris pour des négocier son premier contrat avec Hollywood, les studios tchèques le licencient au motif d'une sortie illégale du territoire. A la faveur du Printemps de Prague et de son vent de révolte, Milos Forman quitte l'Europe pour les Etats-Unis.Il réalise d'abord une comédie sociale, Taking Off (1971), puis change totalement ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/medias/nmedia/18/35/56/62/20512373.jpg",
      "films_ID" => [
        52
      ] // 52 = Vol au-dessus d'un nid de coucou
    ],
    [
      "id" => 32,
      "fullname" => "Jerry Zucker",
      "age" => 72,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 3,
      "recompense" => 0,
      "biography" => "Diplômé de la Shorewood High School et de l'Université du Wisconsin, Jerry Zucker écrit avec son frère David Zucker de nombreux articles humoristiques pour la revue Mad Magazine. Avec leur ami d'enfance Jim Abrahams, ils fondent la Kentucky Fried Theater comedy troupe, qui donne naissance en 1977 à la comédie The Kentucky fried movie réalisée par John Landis. Dans ce film apparaissent déjà les recettes qui font le succès des productions Zucker : une avalanche de gags, des cameos de personnes célèbres, et des parodies burlesques de films. En 1979, Jerry Zucker co-réalise avec Allan Arkush la comédie musicale Le Lycée des cancres, puis refait équipe en 1980 avec David Zucker et Jim Abrahams pour produire, écrire et diriger leur premier gros succès, Y a-t-il un pilote dans l'avion ?, une parodie des films catastrophes des années soixante-dix. Le trio enchaîne avec ...",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/medias/nmedia/18/91/00/43/20124495.jpg",
      "films_ID" => [
        54
      ] // 54 = Ghost
    ],
    [
      "id" => 33,
      "fullname" => "Todd Phillips",
      "age" => 51,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 1,
      "biography" => "Licencié de cinéma à l'Université de New-York, Todd Phillips débute sa carrière par la réalisation de deux documentaires Hated (1994) et Frat House (1998); ce dernier, évocation de la vie étudiante, étant récompensé du Grand Prix du Jury de la catégorie au Festival de Sundance.En 2000, Todd Phillips réalise Road trip, un premier long-métrage déjanté dans lequel il dirige notamment Tom Green et Seann William Scott. Il signe ensuite une nouvelle comédie délirante intitulée Back to School (retour à la fac) (2001), sur le désenchantement de jeunes adultes. En 2004, Todd Phillips est choisi pour mettre en scène Starsky and Hutch, adaptation cinématographique de la célèbre série télévisée portée sur grand écran par Ben Stiller et Owen Wilson, puis il signe deux ans après L'École des dragueurs, remake de L'Académie des coquins avec Billy Bob Thornton en tant ...",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/16/09/07/16/51/188884.jpg",
      "films_ID" => [
        55
      ] // 55 = Joker
    ],
    [
      "id" => 34,
      "fullname" => "Steve Duncan",
      "age" => 0,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 0,
      "biography" => "",
      "photo" => "https://www.shutterstock.com/image-vector/avatar-icon-male-profile-gray-260nw-538707334.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        0
      ], // 0 = L'enfer du devoir
    ],
    [
      "id" => 35,
      "fullname" => "Craig W. Van Sickle",
      "age" => 0,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 1,
      "recompense" => 0,
      "biography" => "Craig Van Sickle est un producteur et scénariste américain, qui a entre autres réalisé la série télévisée Le Caméléon (The Pretender).
      Il possède une compagnie de production, en partenariat avec Steven Long Mitchell.",
      "photo" => "https://cdn1.booknode.com/author_picture/455/craig-w-van-sickle-454745-330-540.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        8
      ], // 8 = Le Caméléon
    ],
    [
      "id" => 36,
      "fullname" => "Alex Pina",
      "age" => 55,
      "sexe" => true,
      "nationality" => "Espagnol",
      "nomination" => 0,
      "recompense" => 0,
      "biography" => "Alex Pina commence sa carrière comme journaliste dans la presse (El Diario Vasco, Diario de Mallorca (es)) et plus tard au sein de l'agence de presse Europa.

      Entre 1993 et 1996, il travaille comme scénariste et rédacteur à Videomedia (es) jusqu'à ce qu'il rejoigne Globomedia (es) en 1996, puis il rejoint l'émission Caiga quien caiga en tant que scénariste sur Telecinco.
      
      En 1997, chez Globomedia, il commence sa carrière de scénariste de fiction dans la série télévisée Más que amigos (Telecinco).
      
      Fin 2016, il quitte Globomedia et fonde Vancouver Media. La première création de la société est La casa de papel, qui est diffusé sur Antena 3 à partir du 2 mai 2017 et réunit plus quatre millions de téléspectateurs, avant de devenir un succès mondial avec sa diffusion sur Netflix.",
      "photo" => "https://fr.web.img3.acsta.net/c_310_420/pictures/19/07/15/10/03/0821689.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        1
      ], // 1 = La casa de papel
    ],
    [
      "id" => 37,
      "fullname" => "Jason Rothenberg",
      "age" => 55,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 0,
      "biography" => "Il est né à Detroit, dans le Michigan et a étudié la communication à l'université de Madison. Il a ensuite commencé sa carrière à Hollywood en tant qu'assistant. Il a ensuite été le producteur-assistant pour le film français American Cuisine en 1992 et 1998, mais aussi a été embauché, ensuite, pour faire la production du film Julien Donkey-Boy en 1999.

      Rothenberg crée The 100, pour CW en 2013, dont il est le développeur, le coécrivain, le coproducteur mais aussi le producteur exécutif.",
      "photo" => "https://fr.web.img4.acsta.net/c_310_420/pictures/14/11/28/12/18/192711.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        2
      ], // 2 = The 100
    ],
    [
      "id" => 38,
      "fullname" => "Matt Duffer",
      "age" => 38,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 0,
      "biography" => "Après avoir écrit et réalisé plusieurs courts métrages, leur script pour le film d'horreur post apocalyptique Hidden (en) fut acheté par Warner Bros. Pictures en 20116. Les frères réalisent alors le film et le diffusent en 2015. Peu après, les 'Duffer Bros' furent engagés en tant que réalisateurs et scénaristes pour la série Wayward Pines sur le réseau Fox.

      Leur carrière prend peu après un tournant en 2016 avec l'arrivée de leur série phénomène Stranger Things. Après un succès retentissant de la série, Netflix annonce le 30 septembre 2019 la signature des frères Duffer pour d'autres films et séries TV dans les années à venir7.",
      "photo" => "https://fr.web.img5.acsta.net/c_310_420/pictures/17/04/10/16/21/289267.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        3
      ], // 3 = stranger Things
    ],
    [
      "id" => 39,
      "fullname" => "Glen Mazzara",
      "age" => 55,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 0,
      "biography" => "Glen Mazzara est né à Manhattan et a grandi dans le Queens, à New York. Il a fréquenté l'université de New York et a obtenu une maîtrise en anglais. Il a travaillé comme administrateur d'hôpital à New York avant de déménager à Los Angeles pour poursuivre une carrière d'écrivain en 1998.

      Il a été rédacteur et écrivain pour les quatrième et cinquième saisons de Nash Bridges. Il a rejoint la série dramatique The Shield en tant que rédacteur et scénariste exécutif pour la première saison en 2002, a été promu producteur pour la deuxième saison tout en continuant à écrire, producteur superviseur pour la troisième saison, co-producteur exécutif pour la quatrième saison, producteur exécutif pour la cinquième saison, et a quitté la série au milieu de la sixième saison en 2006.
      
      Traduit avec www.DeepL.com/Translator (version gratuite)",
      "photo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Glen_Mazzara_at_Banff_World_Media_Festival_2012.jpg/220px-Glen_Mazzara_at_Banff_World_Media_Festival_2012.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        4
      ], // 4 = Walking Dead
    ],
    [
      "id" => 40,
      "fullname" => "David Shore",
      "age" => 63,
      "sexe" => true,
      "nationality" => "Canadien",
      "nomination" => 0,
      "recompense" => 0,
      "biography" => "En 1979, son expérience en tant que figurant sur la comédie Arrête de ramer, t’es sur le sable pousse David Shore à quitter son poste d’associé d’un cabinet d’avocat afin de débuter une carrière dans l’audiovisuel. Au milieu des années 90, le jeune homme scénarise quelques épisodes de séries télévisées (Le Retour des Incorruptibles, New York Police Blues, Les prédateurs…) et investit également le secteur de la production en supervisant la première saison du drame judiciaire Haute finance. Repéré par le créateur et producteur Paul Haggis, ce dernier lui propose d’être consultant sur le show policier américano-canadien Un tandem de choc, qui, grâce à son humour décalé, remporte un large succès national. En 1997, le novice continue de mettre à profit ses connaissances en matière de droit sur les deux premières saisons de The Practice: Bobby ...",
      "photo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/David_Shore_2009.jpg/800px-David_Shore_2009.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        5
      ], // 5 = Dr. House
    ],
    [
      "id" => 41,
      "fullname" => "Jeff Davis",
      "age" => 47,
      "sexe" => true,
      "nationality" => "Américain",
      "nomination" => 0,
      "recompense" => 0,
      "biography" => "En 2003, il vend un script à CBS qui deviendra Esprits criminels en 2005 et fut le coproducteur délégué de la première saison. Il quittera ses fonctions à la fin de la saison 1.

      En 2008, Jeff Davis entre en négociation avec MTV pour adapter le film Teen Wolf en série télévisée. En 2010, MTV commande une première saison de Teen Wolf et nomme Davis comme showrunner et producteur exécutif. Entre 2011 et 2017, Davis écrit 41 des 100 épisodes composant la série.
      
      En 2012, après la fin de la seconde saison de Teen Wolf, Jeff Davis négocie avec la chaîne A&E l'adaptation série de Morse, le script est finalement acheté par TNT, après le tournage du pilote, TNT ne commande pas la série.
      
      En 2021, Jeff Davis signe un contrat avec Paramount+ pour développer de nouveaux projets dont Teen Wolf: The Movie et l'adaptation des romans de Edo van Belkom Wolf Pack.",
      "photo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Jeff_Davis_by_Gage_Skidmore_2.jpg/220px-Jeff_Davis_by_Gage_Skidmore_2.jpg",
      "films_ID" => [], // 
      "series_ID" => [
        6
      ], // 6 = Teen Wolf
    ],
    [
      "id" => 42,
      "fullname" => "Sébastian Mellino",
      "age" => 47,
      "sexe" => true,
      "nationality" => "Argentin",
      "nomination" => 0,
      "recompense" => 0,
      "biography" => "Né à Buenos Aires le 21 juin 1975. Fils d'Ana María Tonni et de l'acteur et comédien Esteban Mellino. Sa carrière a commencé sous la direction de son père. Il a composé la musique du long métrage Loco, posee la fórmula de la felicidad (initialement prévu pour le théâtre) et de pièces pour enfants telles que El tesoro del pirata Chucho, avec la participation de Diego Topa.

      Sa formation professionnelle a eu lieu au CETC (Centro de Experimentación del Teatro Colón), à l'Institute for Living Voice et auprès de professeurs privés en Argentine et aux États-Unis.
      
      En 2000, il a commencé à travailler pour le label espagnol Vale Music (responsable de Operación Triunfo) et, à partir de 2002, il s'est développé en tant que directeur de casting et coach vocal pour Operación Triunfo (Argentine) (saisons I, II, III et IV).
      
      Traduit avec www.DeepL.com/Translator (version gratuite)",
      "photo" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRP_WfTsLBSE3ifjicJFoJ5Yx1dih1E9ki2URoKNDFpdg_6RceUK3BeMkzKfpPm10l57OA&usqp=CAU",
      "films_ID" => [], // 
      "series_ID" => [
        6
      ], // 6 = Poursuis tes rêves
    ],
  ];
}
