-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 12 avr. 2023 à 14:02
-- Version du serveur : 8.0.30
-- Version de PHP : 8.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formationsdessins`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_articles` int NOT NULL,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hook` text NOT NULL,
  `subtitle` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `conclusion` varchar(10000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `excerpt` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `archived_at` datetime DEFAULT NULL,
  `id_users` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_articles`, `title`, `hook`, `subtitle`, `content`, `conclusion`, `excerpt`, `created_at`, `updated_at`, `archived_at`, `id_users`) VALUES
(5, 'Pas à pas - Dessiner des fleurs', 'Découvrez comment dessiner des fleurs grâce à notre pas à pas illustré. Que vous soyez débutant ou expérimenté, cet article vous guidera étape par étape dans la création de magnifiques fleurs réalistes. Suivez nos conseils et astuces pour donner vie à vos dessins floraux en un rien de temps !', 'a:4:{i:0;s:21:\"matériel nécessaire\";i:1;s:51:\"Étape 1 : Dessiner la forme générale de la fleur\";i:2;s:31:\"Étape 2 : Ajouter les détails\";i:3;s:26:\"Étape 3 : Mise en couleur\";}', 'a:4:{i:0;s:330:\"Pour réaliser ce pas à pas de dessin de fleurs, vous aurez besoin de quelques outils de base : du papier à dessin, un crayon de papier, une gomme, et des crayons de couleur. Vous pouvez également utiliser des feutres ou des pastels secs si vous le souhaitez, mais ce ne sont pas des éléments indispensables pour ce tutoriel.\";i:1;s:585:\"Pour dessiner une fleur, il est important de commencer par dessiner sa forme générale. Selon le type de fleur que vous souhaitez dessiner, vous devrez adapter cette forme. Certaines fleurs ont des pétales longs et étroits, d&#39;autres ont des pétales courts et arrondis. Dans cette étape, nous verrons comment dessiner les formes de fleurs les plus courantes.&#13;&#10;&#13;&#10;Il est également important de bien placer la fleur sur la page pour équilibrer la composition de votre dessin. Nous vous donnerons des conseils pour choisir l&#39;emplacement idéal de votre fleur.\";i:2;s:514:\"Dans cette étape, nous allons ajouter les détails à notre dessin de fleur pour la rendre plus réaliste. Pour cela, nous allons nous concentrer sur les éléments clés de la fleur tels que les pétales, les tiges, les feuilles, etc. Nous verrons comment les dessiner avec précision et comment les placer de manière harmonieuse sur la forme générale de la fleur. En suivant ces conseils, vous serez en mesure de donner vie à votre dessin et d&#39;impressionner votre entourage avec votre talent artistique.\";i:3;s:436:\"Pour donner vie à votre dessin de fleurs, la mise en couleur est essentielle. Dans cette étape, nous explorerons les différentes techniques de coloration pour les fleurs, allant des crayons de couleur à l&#39;aquarelle. Nous vous donnerons également des conseils pour choisir les couleurs qui conviennent le mieux à votre dessin, ainsi que pour les appliquer de manière harmonieuse, afin de créer un effet réaliste et lumineux.\";}', 'En conclusion, dessiner des fleurs peut sembler intimidant au début, mais avec de la pratique et en suivant ces étapes, cela deviendra plus facile et plus amusant. N&#39;oubliez pas de dessiner la forme générale de la fleur en premier, puis d&#39;ajouter des détails tels que les pétales et les feuilles. Enfin, utilisez différentes techniques de coloration pour ajouter de la vie à votre dessin. Continuez à pratiquer et à développer vos compétences en dessin pour devenir un véritable artiste floral.', 'Apprenez à dessiner de magnifiques fleurs en suivant notre pas à pas détaillé et facile à suivre, même pour les débutants !', '2023-04-06 16:49:04', '2023-04-07 15:25:52', NULL, NULL),
(7, 'La naissance de l&#39;art', 'L&#39;art à la préhistoire est l&#39;un des aspects les plus fascinants et mystérieux de l&#39;histoire de l&#39;humanité. Les œuvres d&#39;art créées par les premiers humains sont les plus anciennes manifestations de la créativité humaine que nous connaissons.', 'a:4:{i:0;s:17:\"Le Paléolithique\";i:1;s:19:\"L&#39;art pariétal\";i:2;s:10:\"Les Vénus\";i:3;s:15:\"Le Néolithique\";}', 'a:4:{i:0;s:516:\"L&#39;art préhistorique est divisé en plusieurs périodes en fonction des différentes évolutions technologiques et culturelles de l&#39;humanité. Les premières œuvres d&#39;art ont été créées pendant le Paléolithique, une période qui s&#39;étend de 2,6 millions d&#39;années avant notre ère jusqu&#39;à environ 10 000 avant notre ère. Les humains de cette période vivaient de la chasse et de la cueillette, et leurs œuvres d&#39;art reflètent souvent leur relation avec les animaux et la nature.\";i:1;s:505:\"Les premières œuvres d&#39;art du Paléolithique ont été découvertes dans des grottes et des abris rocheux. Les peintures rupestres sont souvent représentatives d&#39;animaux comme le bison, le cerf, le cheval ou le mammouth. Ces représentations sont souvent réalisées avec une grande précision, montrant une connaissance approfondie de l&#39;anatomie animale. Les couleurs utilisées étaient généralement des pigments minéraux, tels que l&#39;ocre, la terre de sienne, ou encore la céruse.\";i:2;s:608:\"Les humains du Paléolithique ont également créé des sculptures en pierre, principalement des figurines représentant des animaux ou des formes féminines appelées &#34;Vénus&#34;. Ces sculptures étaient généralement de petite taille, faites de pierre ou d&#39;os et certaines étaient même peintes. Les Vénus ont été trouvées dans toute l&#39;Europe, mais leur signification exacte est encore inconnue. Certains pensent qu&#39;elles représentaient des divinités de fertilité, tandis que d&#39;autres suggèrent qu&#39;elles étaient des amulettes ou des représentations de femmes enceintes.\";i:3;s:905:\"Pendant le Néolithique, une période de l&#39;histoire qui a débuté vers 10 000 avant notre ère, l&#39;agriculture et l&#39;élevage ont commencé à être pratiqués et les premières communautés sédentaires se sont formées. L&#39;art de cette période a donc reflété un changement dans le mode de vie des humains. Les sculptures en pierre étaient plus grandes et plus complexes, souvent représentatives de dieux et de déesses de la fertilité. Les premières poteries ont également été créées pendant cette période, ornées de motifs géométriques ou d&#39;animaux.&#13;&#10;En somme, l&#39;art à la préhistoire est un témoignage fascinant de la créativité et de la vision du monde des premiers humains. Les œuvres d&#39;art créées pendant cette période sont des preuves de la sophistication culturelle de ces peuples anciens, ainsi que de leur habilité technique.&#13;&#10;\";}', 'Les humains du Paléolithique ont également créé des sculptures en pierre, principalement des figurines représentant des animaux ou des formes féminines appelées &#34;Vénus&#34;. Ces sculptures étaient généralement de petite taille, faites de pierre ou d&#39;os et certaines étaient même peintes. Les Vénus ont été trouvées dans toute l&#39;Europe, mais leur signification exacte est encore inconnue. Certains pensent qu&#39;elles représentaient des divinités de fertilité, tandis que d&#39;autres suggèrent qu&#39;elles étaient des amulettes ou des représentations de femmes enceintes.', 'Autour de - 40 000 ans, à l&#39;aube du Poléolithique supérieur, l&#39;Eurasie occidentale connaît un bouleversement culturel majeur. C&#39;est la naissance de l&#39;art.', '2023-04-07 10:47:18', NULL, NULL, NULL),
(8, 'Pas à pas - Dessiner un portrait', 'Les proportions du visage sont difficiles à dessiner pour les débutants, mais la technique que je vais vous montrer fonctionne très bien.&#13;&#10;&#13;&#10;Comment apporter cette petite touche, ce petit truc miraculeux qui va faire que oui, on reconnaît tout de suite la personne, même si on n’a pas forcément détaillé. Et bien je vais vous montrer ça aujourd’hui.', 'a:3:{i:0;s:15:\"Les proportions\";i:1;s:11:\"Les valeurs\";i:2;s:17:\"De la 2d à la 3d\";}', 'a:3:{i:0;s:821:\"Vous avez dû vous rendre compte, à force de croquer des visages en 3D avec la méthode Loomis, qu’il y avait des limites. Et ces limites, c’est celles de la ressemblance, sauf s’il s’agit de bande dessinée. Si on veut faire des portraits réalistes et ressemblants, il va falloir connaître quelques techniques.&#13;&#10;&#13;&#10;Ces techniques ne sont pas forcément en 3 dimensions. Ça va être des techniques d’analyse en 2 dimensions et notamment l’analyse des distances dont j’ai certainement parlé dans des vidéos sur ma chaîne YouTube.&#13;&#10;&#13;&#10;Mais on va parler spécifiquement de la ressemblance. Et je vais vous montrer quelques petits exemples.&#13;&#10;&#13;&#10;Voici une image de Jean-Paul Belmondo qui était un acteur français qui était bien connu dans les années 70-80.\";i:1;s:725:\"Donc les valeurs de noir ici, ce n’est pas forcément les ombres. C’est toutes les valeurs sombres de la photo. Par exemple, certains reflets qui sont plutôt sombres et éventuellement des occlusions, des ombres de formes et des ombres portées. Parfois même la couleur du vêtement.&#13;&#10;&#13;&#10;Ainsi, cela peut vraiment dépendre, mais cela donne un tout. Et ce tout, est-ce qu’il est ressemblant à Belmondo. Je dirais que oui. La plupart des gens qui connaissent bien Belmondo et qui vont voir cette photo, vont reconnaître tout de suite son nez assez conséquent avec des narines grosses et larges. C’est un nez vraiment très reconnaissable. On remarque cette cassure au niveau du nez, dans l’ombre.\";i:2;s:692:\"On connaît tellement ces personnes-là qu’elles deviennent des icônes. Et ces icônes, on peut en faire des logos, des pochoirs. Et on voit tout de suite que dans les formes, il n’y a que deux valeurs.&#13;&#10;&#13;&#10;On sait tout de suite qu’il s’agit de ces personnes-là. On a une certaine mémoire visuelle. Le plus important là-dedans, il n’est pas en 3D. Le plus important là-dedans, il est en 2D.&#13;&#10;&#13;&#10;On a vu plein de choses dans cette formation et notamment la construction 3D. Malheureusement, ça ne va pas vraiment nous aider pour autre chose que la structure correcte du crâne (ce qui est déjà pas mal hein), de l’anatomie et donc du portrait.\";}', 'Donc les valeurs de noir ici, ce n’est pas forcément les ombres. C’est toutes les valeurs sombres de la photo. Par exemple, certains reflets qui sont plutôt sombres et éventuellement des occlusions, des ombres de formes et des ombres portées. Parfois même la couleur du vêtement.&#13;&#10;&#13;&#10;Ainsi, cela peut vraiment dépendre, mais cela donne un tout. Et ce tout, est-ce qu’il est ressemblant à Belmondo. Je dirais que oui. La plupart des gens qui connaissent bien Belmondo et qui vont voir cette photo, vont reconnaître tout de suite son nez assez conséquent avec des narines grosses et larges. C’est un nez vraiment très reconnaissable. On remarque cette cassure au niveau du nez, dans l’ombre.', 'Dans cet article, nous allons voir comment amener de la ressemblance dans un portrait.', '2023-04-07 12:03:10', NULL, NULL, NULL),
(9, 'Les 8 règles de la composition', 'Découvrez les 8 règles de la composition artistique et améliorez votre dessin dès aujourd&#39;hui ! &#13;&#10;De l&#39;utilisation des lignes directrices à la règle des tiers, en passant par la gestion des espaces négatifs, cet article vous guidera à travers les principes fondamentaux de la composition pour vous aider à créer des dessins équilibrés et impactants. &#13;&#10;Prêt à relever le défi et à donner vie à vos dessins ?', 'a:5:{i:0;s:19:\"La règle des tiers\";i:1;s:16:\"L&#39;équilibre\";i:2;s:12:\"Le mouvement\";i:3;s:13:\"La profondeur\";i:4;s:14:\"Les contrastes\";}', 'a:5:{i:0;s:693:\"La règle des tiers est une technique simple mais puissante pour améliorer la composition de vos dessins. &#13;&#10;En divisant votre dessin en tiers verticalement et horizontalement, vous pouvez créer des lignes directrices pour placer votre sujet ou les éléments importants le long de ces lignes ou à leur intersection. &#13;&#10;Cette technique crée une composition plus équilibrée et dynamique qui attire l&#39;œil du spectateur et améliore l&#39;impact visuel de votre dessin. &#13;&#10;Que vous soyez un artiste débutant ou expérimenté, la règle des tiers est une méthode essentielle à connaître pour créer des dessins captivants et esthétiquement plaisants.&#13;&#10;\";i:1;s:725:\"&#13;&#10;L&#39;équilibre est un élément clé de la composition en dessin qui permet de créer une harmonie visuelle dans votre œuvre d&#39;art. &#13;&#10;Il peut être atteint de différentes manières, que ce soit par une symétrie formelle ou une asymétrie dynamique.&#13;&#10;En équilibrant les éléments de votre dessin de manière égale, vous pouvez créer un sentiment de stabilité et de calme, tandis que l&#39;asymétrie peut créer une tension visuelle qui attire l&#39;œil du spectateur. &#13;&#10;Que vous cherchiez à créer un dessin harmonieux ou plus dynamique, l&#39;équilibre est un aspect clé de la composition à garder à l&#39;esprit pour créer des dessins impactants et réussis.&#13;&#10;\";i:2;s:722:\"Le mouvement est un élément essentiel de la composition en dessin qui peut ajouter une dimension dynamique et expressive à vos œuvres d&#39;art. &#13;&#10;Le mouvement peut être suggéré par des lignes courbes, des angles inclinés ou des formes irrégulières, qui guident l&#39;œil du spectateur à travers votre dessin. &#13;&#10;En ajoutant du mouvement, vous pouvez donner vie à vos personnages et objets et créer une composition plus intéressante et impactante. &#13;&#10;En maîtrisant l&#39;art du mouvement dans votre dessin, vous pouvez créer une œuvre d&#39;art qui semble presque animée, captivant l&#39;attention du spectateur et ajoutant une dimension supplémentaire à votre travail.&#13;&#10;\";i:3;s:814:\"La profondeur est un élément crucial de la composition en dessin, car elle permet de créer une illusion de volume et de spatialité dans une image bidimensionnelle. La profondeur peut être obtenue en utilisant plusieurs techniques, telles que la perspective, les valeurs tonales, la superposition des plans, l&#39;utilisation de lignes de fuite, entre autres.&#13;&#10;&#13;&#10;L&#39;utilisation de la perspective est particulièrement importante pour créer une profondeur réaliste. La perspective est basée sur le principe que les objets plus éloignés apparaissent plus petits que les objets plus proches, et que les lignes parallèles semblent converger vers un point de fuite. En utilisant la perspective, l&#39;artiste peut créer une illusion de profondeur et de volume, même sur une surface plate.\";i:4;s:740:\"Les contrastes sont un élément clé de la composition en dessin. Ils permettent de créer des zones de tension et de mettre en avant certains éléments. Les contrastes peuvent être de différentes natures : contraste de valeurs, contraste de couleurs, contraste de textures, etc. Par exemple, un contraste de valeurs fort peut être utilisé pour mettre en avant un objet ou un personnage dans une composition. De même, un contraste de couleurs peut être utilisé pour attirer l&#39;œil du spectateur sur une zone précise. Les contrastes permettent donc de créer des hiérarchies et de guider le regard du spectateur dans l&#39;image. Il est important de bien les maîtriser pour réussir une composition équilibrée et dynamique.\";}', 'En conclusion, la composition en dessin est un élément crucial pour créer des œuvres d&#39;art réussies et impactantes. &#13;&#10;En maîtrisant les principes de la composition tels que la règle des tiers, l&#39;équilibre et le mouvement, vous pouvez donner vie à vos dessins et créer des compositions harmonieuses et dynamiques qui attirent l&#39;œil du spectateur. &#13;&#10;Que vous soyez un artiste débutant ou expérimenté, l&#39;apprentissage de ces principes fondamentaux peut vous aider à améliorer considérablement la qualité de votre travail et à créer des dessins qui communiquent efficacement votre vision artistique. &#13;&#10;En gardant à l&#39;esprit ces principes de composition, vous pouvez faire passer votre dessin au niveau supérieur et créer des œuvres d&#39;art qui sont à la fois belles et significatives.&#13;&#10;', 'La composition en dessin est un élément essentiel pour donner de la force, de la profondeur et de l&#39;équilibre à une oeuvre d&#39;art, découvrez les astuces pour bien la maîtriser dans notre dernier article.', '2023-04-07 15:13:58', NULL, NULL, NULL),
(11, 'La perspective', 'La perspective est un élément clé de l&#39;art, de l&#39;architecture, de la photographie et de nombreuses autres formes d&#39;expression visuelle. Elle peut transformer la façon dont nous voyons le monde qui nous entoure. Dans cet article, nous allons explorer ce qu&#39;est la perspective, comment elle est utilisée dans différents domaines et pourquoi elle est si importante.', 'a:4:{i:0;s:34:\"Qu&#39;est-ce que la perspective ?\";i:1;s:29:\"La perspective dans l&#39;art\";i:2;s:36:\"Les différents types de perspective\";i:3;s:34:\"L&#39;importance de la perspective\";}', 'a:4:{i:0;s:409:\"La perspective est la manière dont les objets sont représentés en fonction de leur position et de leur distance par rapport à l&#39;observateur. Elle est souvent utilisée pour donner l&#39;impression de profondeur et de dimensionnalité dans les dessins, les peintures et les photographies. La perspective peut également être utilisée pour créer des illusions d&#39;optique ou des effets dramatiques.\";i:1;s:406:\"La perspective a été utilisée par les artistes depuis la Renaissance pour créer des œuvres d&#39;art plus réalistes. Les artistes utilisent des techniques de perspective pour donner l&#39;impression que les objets sont en trois dimensions sur une surface plane. La perspective linéaire est la technique la plus courante et consiste à utiliser des lignes convergentes pour représenter l&#39;espace.\";i:2;s:449:\"Il existe plusieurs types de perspective, notamment la perspective linéaire, la perspective atmosphérique et la perspective de fuite. La perspective linéaire utilise des lignes convergentes pour représenter l&#39;espace, tandis que la perspective atmosphérique utilise la couleur et la lumière pour donner l&#39;impression de profondeur. La perspective de fuite est utilisée pour créer des effets de mouvement ou de dynamisme dans une image.\";i:3;s:427:\"La perspective est importante car elle peut transformer la façon dont nous voyons le monde qui nous entoure. Elle peut nous donner l&#39;impression que les objets sont en trois dimensions sur une surface plane et nous permettre de visualiser des bâtiments et des espaces avant leur construction. La perspective peut également être utilisée pour créer des effets dramatiques ou des illusions d&#39;optique dans les images.\";}', 'En conclusion, la perspective est un élément clé de nombreuses formes d&#39;expression visuelle, de l&#39;art à l&#39;architecture en passant par la photographie. Elle peut donner l&#39;impression de profondeur et de dimensionnalité dans les images, ainsi que créer des illusions d&#39;optique et des effets dramatiques. Comprendre la perspective est essentiel pour créer des œuvres d&#39;art et des bâtiments réalistes et efficaces.', 'La perspective est importante car elle peut transformer la façon dont nous voyons le monde qui nous entoure.', '2023-04-08 18:01:34', NULL, NULL, NULL),
(12, 'Le matériel de dessin', 'Le choix du matériel de dessin est crucial pour les artistes débutants et expérimentés. Il peut faire la différence entre une œuvre d&#39;art réussie et une qui ne l&#39;est pas. Dans cet article, nous allons explorer les différents types de matériel de dessin disponibles, comment choisir le bon pour vous et quelques conseils pour tirer le meilleur parti de votre matériel de dessin.', 'a:3:{i:0;s:44:\"Les différents types de matériel de dessin\";i:1;s:52:\"Comment choisir le bon matériel de dessin pour vous\";i:2;s:66:\"Conseils pour tirer le meilleur parti de votre matériel de dessin\";}', 'a:3:{i:0;s:380:\"Il existe de nombreux types de matériel de dessin, tels que les crayons, les feutres, les pastels, les fusains et les stylos. Chacun a ses avantages et ses inconvénients en termes de texture, de précision et de facilité d&#39;utilisation. Il est important de choisir le bon type de matériel de dessin en fonction de votre style de dessin et de vos préférences personnelles.\";i:1;s:427:\"Le choix du bon matériel de dessin dépend de nombreux facteurs, tels que le niveau de détail que vous souhaitez atteindre, le support sur lequel vous dessinez et le type d&#39;effet que vous recherchez. Par exemple, les crayons sont idéaux pour les dessins détaillés, les pastels sont parfaits pour les œuvres d&#39;art plus douces et plus floues, tandis que les feutres sont idéaux pour les lignes nettes et précises.\";i:2;s:426:\"Une fois que vous avez choisi le bon matériel de dessin, il est important de savoir comment l&#39;utiliser efficacement pour créer une œuvre d&#39;art réussie. Vous pouvez expérimenter avec différents types de pression et de mouvement pour créer des textures et des effets uniques. Vous pouvez également mélanger différents types de matériel de dessin pour obtenir des effets de couleur et de texture intéressants.\";}', 'En conclusion, le choix du matériel de dessin est un élément clé pour créer une œuvre d&#39;art réussie. Il est important de choisir le bon type de matériel en fonction de votre style de dessin et de vos préférences personnelles. En utilisant efficacement votre matériel de dessin et en expérimentant avec différents types de pression et de mouvement, vous pouvez créer des œuvres d&#39;art uniques et intéressantes.', 'Le choix du bon matériel de dessin est crucial pour créer une œuvre d&#39;art réussie.', '2023-04-08 18:09:40', NULL, NULL, NULL),
(13, 'Le dessin de nature morte', 'Le dessin de nature morte est une technique artistique classique qui consiste à dessiner des objets inanimés tels que des fruits, des légumes, des objets ménagers et autres. Dans cet article, nous allons examiner les bases du dessin de nature morte, les différentes techniques que vous pouvez utiliser, les éléments clés à prendre en compte et quelques conseils pour améliorer votre pratique.', 'a:4:{i:0;s:35:\"Les bases du dessin de nature morte\";i:1;s:53:\"Les différentes techniques de dessin de nature morte\";i:2;s:41:\"Les éléments clés à prendre en compte\";i:3;s:39:\"Conseils pour améliorer votre pratique\";}', 'a:4:{i:0;s:409:\"Le dessin de nature morte consiste à dessiner des objets inanimés, généralement disposés sur une surface plane. C&#39;est une technique courante utilisée par les artistes pour développer leur sens de la composition, de la forme, de la lumière et de l&#39;ombre. Les objets peuvent être disposés selon un thème ou une couleur, ou simplement en fonction de ce que l&#39;artiste souhaite représenter.\";i:1;s:457:\"Il existe différentes techniques que vous pouvez utiliser pour dessiner une nature morte, telles que le dessin au trait, la peinture, la craie et les pastels. Le choix de la technique dépend de votre style personnel et de l&#39;effet que vous souhaitez créer. Certaines techniques sont plus appropriées pour créer une texture et une profondeur, tandis que d&#39;autres sont plus adaptées pour créer des lignes nettes et précises.&#13;&#10;&#13;&#10;\";i:2;s:423:\"Lorsque vous dessinez une nature morte, il est important de prendre en compte plusieurs éléments clés, tels que la composition, l&#39;éclairage, la perspective et l&#39;ombre. Ces éléments peuvent avoir un impact considérable sur l&#39;aspect final de votre dessin. Par exemple, la composition peut aider à créer une dynamique et une harmonie, tandis que l&#39;ombre peut ajouter de la profondeur et de la texture.\";i:3;s:359:\"Pour améliorer votre pratique du dessin de nature morte, il est important de dessiner régulièrement, d&#39;expérimenter avec différents matériaux et de vous inspirer de l&#39;art d&#39;autres artistes. Vous pouvez également pratiquer en dessinant rapidement des croquis de nature morte pour améliorer votre sens de la composition et de la perspective.\";}', 'En conclusion, le dessin de nature morte est une technique artistique classique qui peut être utilisée pour développer de nombreuses compétences artistiques. En comprenant les bases du dessin de nature morte, les différentes techniques disponibles, les éléments clés à prendre en compte et en pratiquant régulièrement, vous pouvez améliorer votre pratique et créer des œuvres d&#39;art fascinantes.', 'Le dessin de nature morte est une technique classique pour développer les compétences artistiques.', '2023-04-08 18:13:25', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `articles_subcategories`
--

CREATE TABLE `articles_subcategories` (
  `id_articles` int NOT NULL,
  `id_sub_categories` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int NOT NULL,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categories`, `title`, `content`) VALUES
(1, 'Techniques de dessin', 'Tous ce qu&#39;il faut savoir sur les techniques de dessin.'),
(2, 'Matériel de dessin', 'Tous ce qu&#39;il faut savoir sur le matériel de dessin.'),
(3, 'Histoire de l&#39;art', 'Tous ce qu&#39;il faut savoir sur l&#39;histoire de l&#39;art.'),
(4, 'Pas à pas', 'Dessin réalisé pas à pas pour que vous compreniez au mieux comment se construit un dessin.');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_comments` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `content` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `validated_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleated_at` datetime DEFAULT NULL,
  `id_forums` int DEFAULT NULL,
  `id_users` int NOT NULL,
  `id_articles` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_comments`, `title`, `content`, `created_at`, `validated_at`, `updated_at`, `deleated_at`, `id_forums`, `id_users`, `id_articles`) VALUES
(2, 'Magnifique article !', 'Merci pour ce magnifique article !!!', '2023-04-07 18:47:46', '2023-04-08 17:28:26', '2023-04-08 17:28:26', NULL, NULL, 34, 5),
(4, 'Super article !', 'J&#39;ai adoré comment dessiner avec un caillou.', '2023-04-07 19:14:15', '2023-04-08 17:03:57', '2023-04-08 17:03:57', NULL, NULL, 34, 7),
(7, 'Apprendre la nature morte', 'Merci pour tous ces bons conseil pour étudier les natures mortes.', '2023-04-08 18:33:24', '2023-04-08 18:35:21', '2023-04-08 18:35:21', NULL, NULL, 34, 13),
(8, 'Au top', 'Super idée cet article,  c&#39;est rare d&#39;en trouver de si bonne qualité !!!!', '2023-04-08 18:34:06', '2023-04-08 18:35:25', '2023-04-08 18:35:25', NULL, NULL, 34, 11),
(9, 'Perdue dans les rayons !', 'J&#39;ai tout le temps du mal à trouver le matériel adhéquate pour mes dessins. Ton article m&#39;a bien fait sourire. Je me sens plus à l&#39;aise lorsque je me trouve dans un magasin d&#39;art.', '2023-04-08 18:35:11', '2023-04-08 18:35:29', '2023-04-08 18:35:29', NULL, NULL, 34, 12),
(10, 'La révélation', 'Cet article est une bénédiction. Je suis tellement heureux de te suivre dans cette aventure !!!', '2023-04-08 18:36:18', '2023-04-08 18:37:30', '2023-04-08 18:37:30', NULL, NULL, 34, 9),
(11, 'La préhistoire', 'Je n&#39;avais pas idée qu&#39;au temps de la prehistoire, il y avait autant de bons artistes. Je les voyais reclu dans des grottes à grelotter de froid.', '2023-04-08 18:37:22', '2023-04-08 18:37:32', '2023-04-08 18:37:32', NULL, NULL, 34, 7),
(14, 'waouaw', 'thanks', '2023-04-10 10:40:55', '2023-04-10 10:41:03', '2023-04-10 10:41:03', NULL, NULL, 34, 12);

-- --------------------------------------------------------

--
-- Structure de la table `forums`
--

CREATE TABLE `forums` (
  `id_forums` int NOT NULL,
  `private` tinyint(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `id_modules` int NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` varchar(10000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `disabled_at` datetime DEFAULT NULL,
  `id_trainings` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id_modules`, `title`, `content`, `created_at`, `updated_at`, `disabled_at`, `id_trainings`) VALUES
(1, 'Introduction', 'Bienvenue à tous dans cette formation sur les bases du dessin ! &#13;&#10;&#13;&#10;Que tu sois débutant ou que tu souhaites simplement rafraîchir tes connaissances, cette formation est conçue pour t&#39;offrir une introduction complète aux principes fondamentaux du dessin.', '2023-03-11 19:01:52', '2023-03-21 23:47:05', NULL, 1),
(2, 'Le Matériel', 'Le choix du matériel est crucial pour réussir un dessin, car cela peut affecter la qualité et l&#39;apparence de ton travail. Dans ce module, nous allons découvrir les différents types de matériel de dessin, y compris les crayons et les différents types de papier.', '2023-03-11 19:10:25', '2023-03-22 00:03:58', NULL, 1),
(3, 'Observer en 2d', 'Au cours de ce module, nous allons explorer les principes fondamentaux de l&#39;observation en 2D et comment les appliquer dans tes dessins. Nous allons apprendre à voir les formes et les lignes, les ombres et les textures, et comment les utiliser pour créer des dessins réalistes et précis.', '2023-03-11 19:11:56', '2023-03-21 23:52:10', NULL, 1),
(4, 'Observer en 3d', 'Au cours de ce module, nous allons explorer les principes fondamentaux de l&#39;observation en 3D, tels que la perspective linéaire et atmosphérique, la profondeur, l&#39;ombre et la lumière. Nous allons également discuter de techniques pour représenter des objets en trois dimensions, y compris comment créer des objets qui semblent sortir de la page.', '2023-03-11 19:12:55', '2023-03-21 23:50:44', NULL, 1),
(5, 'Ombres et lumières', 'Au cours de ce module, nous allons explorer les principes fondamentaux de l&#39;ombre et de la lumière, tels que la source lumineuse, les zones d&#39;ombres, les reflets et les contrastes. Nous allons également discuter des différents types de lumière, tels que la lumière directe et diffuse, et comment les utiliser pour créer différents effets dans tes dessins.', '2023-03-11 19:13:59', '2023-03-21 23:53:36', NULL, 1),
(6, 'Textures et matières', 'La texture est l&#39;un des éléments clés qui permet de donner du réalisme et de la profondeur à vos dessins. Dans ce module, nous allons explorer les différentes techniques pour créer des textures réalistes et des effets de matière.', '2023-03-11 19:15:32', '2023-03-22 00:01:21', NULL, 1),
(7, 'Composition', 'La composition est une compétence clé pour créer des dessins qui sont équilibrés, esthétiques et captivants. Dans ce module, nous allons découvrir les principes fondamentaux de la composition et les techniques de base pour créer une mise en page efficace.', '2023-03-11 19:16:12', '2023-03-21 23:59:43', NULL, 1),
(8, 'Exercice final', 'C&#39;est le moment de mettre tes nouveaux talents à exécution ! Fait de ton mieux :)', '2023-03-11 19:17:07', '2023-03-13 18:14:04', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `subcategories`
--

CREATE TABLE `subcategories` (
  `id_sub_categories` int NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `id_categories` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `subcategories`
--

INSERT INTO `subcategories` (`id_sub_categories`, `title`, `content`, `id_categories`) VALUES
(1, 'Natures mortes', 'Tous ce qu&#39;il faut savoir sur les natures mortes', 1),
(2, 'Paysages', 'Tous ce qu&#39;il faut savoir sur les paysages.', 1),
(3, 'Animaux', 'Tous ce qu&#39;il faut savoir sur les animaux.', 1),
(4, 'Portraits', 'Tous ce qu&#39;il faut savoir sur le portrait.', 1),
(5, 'Corps humain', 'Tous ce qu&#39;il faut savoir sur le corps humain.', 1),
(6, 'Artistes célèbres', 'Tous ce qu&#39;il faut savoir sur les artistes célèbres.', 3),
(7, 'Mouvements dans l&#39;art', 'Tous ce qu&#39;il faut savoir sur les mouvements dans l&#39;art.', 3),
(8, 'Les crayons', 'Tous ce qu&#39;il faut savoir sur les crayons à dessin.', 1),
(9, 'Les papiers', 'Tous ce qu&#39;il faut savoir sur les papiers à dessin.', 2),
(10, 'Les gommes', 'Tous ce qu&#39;il faut savoir sur les gommes à dessin.', 2),
(11, 'La perspective', 'Tous ce qu&#39;il faut savoir sur la perspective.', 1),
(12, 'La composition', 'Tous ce qu&#39;il faut savoir sur la composition.', 1),
(13, 'L&#39;ombre et la lumière', 'Tous ce qu&#39;il faut savoir sur l&#39;ombre et la lumière.', 1),
(14, 'Les textures', 'Tous ce qu&#39;il faut savoir sur les textures.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `submodules`
--

CREATE TABLE `submodules` (
  `id_sub_modules` int NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `disabled_at` datetime DEFAULT NULL,
  `id_modules` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `submodules`
--

INSERT INTO `submodules` (`id_sub_modules`, `title`, `content`, `created_at`, `updated_at`, `disabled_at`, `id_modules`) VALUES
(1, 'Fonctionnement de la formation', 'Avant de commencer, je voudrais prendre un moment pour discuter de ce que tu peux attendre de cette formation et comment elle va fonctionner.&#13;&#10;&#13;&#10;Tout d&#39;abord, cette formation est conçue pour être interactive et pratique. Tu auras des exercices pratiques à faire pour mettre en pratique les compétences que tu apprendras tout au long de la formation.&#13;&#10;&#13;&#10;De plus, cette formation est structurée de manière progressive. Nous commencerons par les principes de base tels que les formes, les lignes et les ombres, puis nous passerons à des sujets plus avancés tels que la perspective et la composition. Chaque section de la formation construira sur les précédentes pour t&#39;aider à développer une compréhension solide des principes fondamentaux du dessin.&#13;&#10;&#13;&#10;Enfin, cette formation est conçue pour être flexible. Tu peux travailler à ton propre rythme et revenir en arrière pour revoir des concepts ou des techniques si nécessaire.&#13;&#10;&#13;&#10;Je suis ravis de t&#39;aider à développer tes compétences en dessin et j&#39;espère que cette formation sera une expérience éducative et enrichissante pour toi. Alors, sans plus tarder, commençons !', '2023-03-11 19:43:32', '2023-03-21 23:45:01', NULL, 1),
(2, 'Accès aux forums', 'Que tu sois un artiste débutant ou expérimenté, ce forum est l&#39;endroit idéal pour échanger des idées, partager tes connaissances, poser des questions et découvrir de nouvelles techniques pour améliorer tes compétences en dessin. Ici, tu pourras discuter de sujets tels que la composition, les techniques de dessin, les matériaux, la perspective, les ombres et les lumières, les proportions et bien plus encore. Tu pourras également partager tes œuvres avec la communauté pour recevoir des critiques constructives et des conseils sur la façon de les améliorer.', '2023-03-11 19:46:13', '2023-03-22 01:26:06', NULL, 1),
(3, 'État d&#39;esprit de croissance', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:46:30', '2023-03-14 09:24:49', NULL, 1),
(4, 'Matériel nécessaire', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:46:44', '2023-03-14 09:25:15', NULL, 1),
(5, 'Démonstration', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:47:01', '2023-03-14 09:25:20', NULL, 1),
(6, 'Les crayons', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:47:22', '2023-03-14 09:26:22', NULL, 2),
(7, 'Les gommes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:47:40', '2023-03-14 09:26:28', NULL, 2),
(8, 'Les papiers', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:47:58', '2023-03-14 10:16:12', NULL, 2),
(9, 'Résumé', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:48:16', '2023-03-14 09:26:37', NULL, 2),
(10, 'Exercices', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:48:29', '2023-03-14 09:26:46', NULL, 2),
(11, 'La ligne', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:48:52', '2023-03-14 09:26:56', NULL, 3),
(12, 'La forme', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:49:06', '2023-03-14 09:27:10', NULL, 3),
(13, 'Les mesures', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting', '2023-03-11 19:49:27', '2023-03-19 12:51:32', NULL, 3),
(14, 'Résumé', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:49:42', '2023-03-14 09:27:48', NULL, 3),
(15, 'Exercices', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:50:03', '2023-03-14 09:27:59', NULL, 3),
(16, 'Les bases de la perspective', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:50:24', '2023-03-14 09:28:09', NULL, 4),
(17, 'Les corps géométriques', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:50:38', '2023-03-14 09:28:20', NULL, 4),
(18, 'La perspective isométrique', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:50:57', '2023-03-14 09:28:30', NULL, 4),
(19, 'La perspective linéaire', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:51:15', '2023-03-14 09:28:39', NULL, 4),
(20, 'Résumé', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:51:27', '2023-03-14 09:29:11', NULL, 4),
(21, 'Exercices', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:52:09', '2023-03-14 09:29:21', NULL, 4),
(22, 'Les aplats', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:52:39', '2023-03-14 09:29:38', NULL, 5),
(23, 'Les dégradés', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:52:52', '2023-03-14 09:29:51', NULL, 5),
(24, 'L&#39;échelle de valeur', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:53:08', '2023-03-14 09:30:04', NULL, 5),
(25, 'La lumière', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:53:29', '2023-03-14 09:30:19', NULL, 5),
(26, 'Les ombres', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:53:52', '2023-03-14 09:30:32', NULL, 5),
(27, 'Résumé', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:54:06', '2023-03-14 09:30:45', NULL, 5),
(28, 'Exercices', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:54:21', '2023-03-14 09:30:57', NULL, 5),
(29, 'Les textures lisses', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:54:45', '2023-03-14 09:31:08', NULL, 6),
(30, 'Les textures irrégulières', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:55:12', '2023-03-14 09:31:19', NULL, 6),
(31, 'Les textures miroitantes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:55:31', '2023-03-14 09:31:32', NULL, 6),
(32, 'Les textures mates', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:55:51', '2023-03-14 09:31:43', NULL, 6),
(33, 'Les textures brillantes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:56:09', '2023-03-14 09:31:52', NULL, 6),
(34, 'Les textures fibreuses', 'fdzlhiefgdKHLZGFLKZGFLkzghfqfdskjvf', '2023-03-11 19:56:27', NULL, NULL, 6),
(35, 'Résumé', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:56:41', '2023-03-14 09:32:00', NULL, 6),
(36, 'Exercices', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:56:56', '2023-03-14 09:32:16', NULL, 6),
(37, 'Principes de base', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:57:21', '2023-03-14 09:32:27', NULL, 7),
(38, 'Le point focal', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:57:33', '2023-03-14 09:32:39', NULL, 7),
(39, 'Les vignettes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:57:49', '2023-03-14 09:32:53', NULL, 7),
(40, 'Les erreurs à éviter', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:58:06', '2023-03-14 09:33:16', NULL, 7),
(41, 'Résumé', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:58:19', '2023-03-14 09:33:26', NULL, 7),
(42, 'Exercices', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:58:31', '2023-03-14 09:33:34', NULL, 7),
(43, 'Exercice', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#38;#38;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-03-11 19:58:49', '2023-03-14 09:33:52', NULL, 8);

-- --------------------------------------------------------

--
-- Structure de la table `trainings`
--

CREATE TABLE `trainings` (
  `id_trainings` int NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `disabled_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `trainings`
--

INSERT INTO `trainings` (`id_trainings`, `title`, `content`, `updated_at`, `created_at`, `disabled_at`) VALUES
(1, 'Les fondamentaux du dessin', 'Formation complète pour bien débuter l&#39;apprentissage du dessin et connaître les bases.', '2023-03-15 15:54:30', '2023-03-10 18:37:40', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `email` char(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `validated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `lastname`, `firstname`, `pseudo`, `birthdate`, `country`, `email`, `password`, `created_at`, `updated_at`, `validated_at`, `deleted_at`, `admin`) VALUES
(34, 'Vanoverberghe', 'Stéphanie', 'L&#39;alchimiste', '1983-08-20', 'Gabon', 'orangestreet@live.fr', '$2y$10$oEBfaHn1Ym4hfdfyXUia0umKLr2tqK4n5VCL9CSHSQUc.2D3ADZsS', '2023-04-02 23:16:30', '2023-04-10 13:58:48', '2023-04-02 23:16:47', NULL, 1),
(36, 'Nicolas', 'Estelle', 'Kachuga', '1980-03-20', 'France', 'enicolas.passion@gmail.com', '$2y$10$3vsDXT0kNtGRVd/hR4aNyO93z0eCVYZuXHugtp1zX7XlqP/dP0NB2', '2023-04-07 09:35:38', '2023-04-08 12:17:47', '2023-04-07 09:35:55', NULL, NULL),
(40, 'Daillet', 'Fanny', 'Dexen', '1990-02-27', 'France', 'fanny.daillet@gmail.com', '$2y$10$3GDWG5rYSogTzhdKNvm6Fe8KeSHC.LvEVqeBccTNsFnF2HO.iRn0y', '2023-04-12 15:29:23', '2023-04-12 15:30:08', '2023-04-12 15:30:08', NULL, NULL),
(41, 'Dupond', 'Sophie', 'sosodu80', '1998-04-12', 'Mali', 'dupond.sophie@gmail.com', '$2y$10$1Htzk7vNuj0EDDr.nEPM1uYh513Nx2MnDqTaW5ck2UCsxMQPFSvFK', '2023-04-12 15:34:22', '2023-04-12 15:34:43', '2023-04-12 15:34:43', NULL, NULL),
(42, 'DiCaprio', 'Leonardo', 'Leo', '1974-10-09', 'Monaco', 'leonardo@gmail.com', '$2y$10$fvvcvCA7ADlBC97ziRm9p.xElAdf6kKDU2gdd1dBmeYVANDcL77GO', '2023-04-12 15:35:48', '2023-04-12 15:36:01', '2023-04-12 15:36:01', NULL, NULL),
(43, 'Jeuniaux', 'Adeline', 'Roxylya', '1987-06-06', 'Sénégal', 'roxylya@hotmail.fr', '$2y$10$afUpIcix6tH9CyyMlCFdNeeevQRYRcy.HJv6VgQvg5PB/aE4bG4AC', '2023-04-12 15:37:28', '2023-04-12 15:37:43', '2023-04-12 15:37:43', NULL, NULL),
(44, 'Dupond', 'Coline', 'Cocodu59', '2002-03-03', 'Cameron', 'coline.dupond@live.fr', '$2y$10$9I/MUsXpllYpOxpfrgyICOERFyW/.uLw6nr8hebvTA9qfABfbDIJy', '2023-04-12 15:43:02', '2023-04-12 15:44:06', '2023-04-12 15:44:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users_trainings`
--

CREATE TABLE `users_trainings` (
  `id_users` int NOT NULL,
  `id_trainings` int NOT NULL,
  `start_training` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `id_videos` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `id_sub_modules` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id_videos`, `title`, `deleted_at`, `id_sub_modules`) VALUES
(61, 'video_04_04', NULL, 25),
(62, 'video_04_05', NULL, 26),
(63, 'video_04_06', NULL, 35),
(64, 'video_04_07', NULL, 21),
(66, 'video_05_01', NULL, 29),
(69, 'test', NULL, 2),
(70, 'sousmodule', NULL, 1),
(72, 'sousmodule2', NULL, 6),
(73, 'sousmodule3', NULL, 7),
(74, 'sousmodule3', NULL, 11),
(76, 'exercice final', NULL, 43),
(77, 'sousmodules22', NULL, 1),
(78, 'les bases de la perspective', NULL, 16),
(79, 'principe de base', NULL, 37),
(80, 'test', NULL, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_articles`),
  ADD KEY `id_users` (`id_users`);

--
-- Index pour la table `articles_subcategories`
--
ALTER TABLE `articles_subcategories`
  ADD PRIMARY KEY (`id_articles`,`id_sub_categories`),
  ADD KEY `id_sub_categories` (`id_sub_categories`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comments`),
  ADD KEY `id_forums` (`id_forums`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_articles` (`id_articles`);

--
-- Index pour la table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id_forums`);

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id_modules`),
  ADD KEY `id_trainings` (`id_trainings`);

--
-- Index pour la table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id_sub_categories`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Index pour la table `submodules`
--
ALTER TABLE `submodules`
  ADD PRIMARY KEY (`id_sub_modules`),
  ADD KEY `id_modules` (`id_modules`);

--
-- Index pour la table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id_trainings`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `users_trainings`
--
ALTER TABLE `users_trainings`
  ADD PRIMARY KEY (`id_users`,`id_trainings`),
  ADD KEY `id_trainings` (`id_trainings`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_videos`),
  ADD KEY `id_sub_modules` (`id_sub_modules`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_articles` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comments` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `forums`
--
ALTER TABLE `forums`
  MODIFY `id_forums` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `id_modules` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id_sub_categories` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `submodules`
--
ALTER TABLE `submodules`
  MODIFY `id_sub_modules` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id_trainings` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_videos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Contraintes pour la table `articles_subcategories`
--
ALTER TABLE `articles_subcategories`
  ADD CONSTRAINT `articles_subcategories_ibfk_1` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id_articles`),
  ADD CONSTRAINT `articles_subcategories_ibfk_2` FOREIGN KEY (`id_sub_categories`) REFERENCES `subcategories` (`id_sub_categories`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_forums`) REFERENCES `forums` (`id_forums`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id_articles`);

--
-- Contraintes pour la table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_ibfk_1` FOREIGN KEY (`id_trainings`) REFERENCES `trainings` (`id_trainings`);

--
-- Contraintes pour la table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);

--
-- Contraintes pour la table `submodules`
--
ALTER TABLE `submodules`
  ADD CONSTRAINT `submodules_ibfk_1` FOREIGN KEY (`id_modules`) REFERENCES `modules` (`id_modules`);

--
-- Contraintes pour la table `users_trainings`
--
ALTER TABLE `users_trainings`
  ADD CONSTRAINT `users_trainings_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `users_trainings_ibfk_2` FOREIGN KEY (`id_trainings`) REFERENCES `trainings` (`id_trainings`);

--
-- Contraintes pour la table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`id_sub_modules`) REFERENCES `submodules` (`id_sub_modules`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
