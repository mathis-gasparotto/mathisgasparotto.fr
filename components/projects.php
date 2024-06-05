<?php 
$projects = [
  [
    'title' => "Yessy", 
    'text' => "Dans le cadre d'un projet avec les autres filières de mon école en fin de Bachelor, j'ai eu l'occasion de développer ma première vraie application mobile. Cette application consiste à faire des paris entre amis sur n'importe quel événement. De plus, les utilisateurs peuvent créer des paris communautaires et les ouvrir à tout le monde. Pour ce qui est de la mise en jeu des paris, l'organisateur peut choisir que ça soit notre monnaie virtuelle interne, soit quelque chose de personnalisé. J'ai également mis en place un système de récompense de connexion quotidienne.<br>
    Côté technique, nous avons donc un CRUD des paris et de leurs choix, ainsi qu'un système d'authentification. Pour les technos, j'ai utilisé le framework Quasar pour le front-end. Pour le back-end, étant donné que j'étais le seul développeur sur ce projet et que j'avais un temps très limité, j'ai fait le choix stratégique de ne pas faire d'API et d'utiliser les services de Firebase.",
    'img_url' => "/data/img/application-de-paris-entre-amis-mathis-gasparotto-developpeur-projet.jpg",
    'img_alt' => "application-de-paris-entre-amis-mathis-gasparotto-developpeur-projet",
    'img_title' => "Illustration de l'application Yessy",
    'link' => "https://github.com/mathis-gasparotto/yessy-app",
  ],
  [
    'title' => "IneaLab", 
    'text' => "Lors de mon alternance chez GETINOV, j'ai eu l'occasion de travailler sur la quasi-totalité du projet IneaLab. Ce projet consiste à développer une application SASS pour la gestion de FabLab, et dans notre cas, l'utiliser pour notre propre FabLab : IneaLab.<br>
    Dans cette application web, nous pouvons nous authentifier, recharger notre porte-monaie virtuel, réserver des machines sur des créneaux horaires disponibles, réserver sa place dans un atelier, réserver une formation avec un intervenant sur des créneaux horaires disponibles. Pour toutes les réservations, nous pouvons également les modifier, les visualiser, ainsi que les annuler. La prise de réservation, lorsque nous choisissons le créneaux horaire, cela se fait via un calendrier interactif. Ce calendrier intéractif permet également de voir les créneaux déjà occupés, ainsi de nos propres réservations.<br>
    Pour le côté technique, nous avons utilisé VueJS et Nuxt pour le front-end, ainsi qu'API Platfrom et Symfony pour le back-end.",
    'img_url' => '/data/img/application-sass-fablab-mathis-gasparotto-developpeur-projet.jpg',
    'img_alt' => "application-sass-fablab-mathis-gasparotto-developpeur-projet",
    'img_title' => "Illustration du projet IneaLab",
    'link' => "https://inealab.com",
  ],
  [
    'title' => "Gymy", 
    'text' => "Lorsque j'allais à la salle de sport, je notais toutes mes séances et les mes performances sur un tableau Excel, mais ce n'était vraiment pas très pratique. J'ai donc regardé s'il n'y avait pas une application mobile pour rendre cela plus simple, mais celle que j'avais trouvé ne le plaisait pas vraiment, et une partie des fonctionnalités souhaitées étaient payantes. J'ai donc décidé de faire ma propre application mobile.<br>
    Dans cette application, j'ai fait un système d'authentification, la création et la gestion d'entraînements, dans lesquels il y a des exercices. Ces exercices, nous pouvons modifier leur ordre dans l'entraînement, ainsi que leur rajouter et modifier des performances. Sur la page d'ajout de performance, on peut accéder à un tableau illustrant notre progression. À côté de ça, nous pouvons créer et gérer des planifications qui servent à planifier notre semaine type, en choisissant les entraînements à faire pour chaque jour de la semaine. Il y a également un timer disponible sur l'application pour les temps de repos. Enfin, tout cela est disponible également sans créer de compte grâce à un système d'invité.<br>
    Pour les technologies utilisées, j'ai utilisé Quasar afin de pouvoir exporter l'application pour mobile et au format Web, afin de pouvoir gérer mes séances également depuis un ordinateur. Et pour le back-end, afin de gagner du temps, j'ai choisi d'utiliser les services de Firebase. Pour la base de données, étant donné qu'il était pertinent de faire une application local-first, j'ai utilisé le service de base de données en temps réel de Firebase que je stock en LocalStorage dans l'application (évidemment que les données propres à l'utilisateur en question).",
    'img_url' => "/data/img/application-de-sport-mathis-gasparotto-web-developpeur-projet.jpg",
    'img_alt' => "application-de-sport-mathis-gasparotto-web-developpeur-projet",
    'img_title' => "Illustration du projet Gymy",
    'link' => "https://gymy-f709a.web.app/",
  ],
];
?>

<section class="section projects" id="projects">
  <div class="container">
    <h2 class="section-title">Mes projets</h2>
    <div class="projects-container">
      <?php foreach($projects as $project) { ?>
        <div class="project-container">
          <div class="img-container">
            <img src="<?php echo $project['img_url']; ?>" class="img" alt="<?php echo $project['img_alt']; ?>" title="<?php echo $project['img_title']; ?>" loading="lazy" />
            <h3 class="title"><?php echo $project['title']; ?></h3>
          </div>
          <div class="text-container">
            <p class="content text"><?php echo $project['text']; ?></p>
            <a href="<?php echo $project['link']; ?>" class="btn read-more-btn btn-primary" target="_blank">En savoir plus</a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <div class="projects-show-more container">
    <div class="left bold">Et bien d'autres projets en tout genre…</div>
    <div class="right">
      <a href="https://github.com/mathis-gasparotto?tab=repositories" class="btn btn-secondary btn-with-icon" target="_blank">
        <i class="fa fa-github"></i><span>Visiter mon GitHub</span>
      </a>
    </div>
  </div>
</section>