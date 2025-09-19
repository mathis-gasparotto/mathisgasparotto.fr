<?php 
$projects = [
  [
    'title' => "ShiftUp", 
    'text' => "Dans le cadre d’un projet interfiliaire d’une durée d’un an au sein de mon MBA Développeur Full-Stack, j’ai travaillé sur la conception et le développement d’une plateforme SaaS de génération de stratégies marketing assistée par intelligence artificielle. L’objectif de cette application est d’aider les entreprises et porteurs de projets à obtenir rapidement des plans d’action marketing personnalisés, en fonction de leur secteur d’activité et de leur audience cible. Les utilisateurs peuvent générer différents supports de stratégies marketing, tels que le SMART, le SWOT, les 4P, les 5P, etc...<br>
    Côté technique, nous avons donc une génération d'un ou plusieurs supports de stratégie marketing suivant les informations d'un projet donnée, ainsi qu'un CRUD de ses derniers. Nous avons également un système d'authentification et de gestion d'équipes. Pour les technos, je suis parti sur le framework Quasar pour le front-end. Pour le back-end, étant donné que nous ne sommes pas fermé à plusieurs type d'interface (mobile, web, desktop, etc...), j'ai fait le choix stratégique de faire une API afin de pouvoir centraliser tout cela, et ceux avec API Platform et Symfony. En ce qui concerne l'IA, j'ai tout d'abord intégré l'API de OpenAI, puis par soucis de confidentialité, nous avons décidé de passer plutôt par Mistral AI. Cependant j'ai tout de même tenté d'héberger un modèle d'IA localement avec LLama3.2, mais pour des soucis de performances en local, et par soucis de coûts d'hébergement, nous avons décidé de rester avec l'API de Mistral AI.",
    'img_url' => "/data/img/plateforme-saas-de-generation-de-stratégie-marketing-par-ia.jpg",
    'img_alt' => "plateforme-saas-de-generation-de-stratégie-marketing-par-ia",
    'img_title' => "Illustration de l'application ShiftUp",
    'link' => "https://github.com/mathis-gasparotto/shift-up",
  ],
  [
    'title' => "Stop Pièces Auto", 
    'text' => "Lors de mon alternance chez CookieLab, j'ai eu l'occasion de travailler sur la majorité du projet client Stop Pièces Auto. Ce client est une grande casse automobile qui propose plus de 150 000 pièces automobiles d'occasion, et qui souhaitait un site e-commerce pour vendre ces dernières.<br>
    La particularité de ce projet est que, en plus de tout en système d'authentification et de checkout, nous y avons intégré un système de recherche instantanée avec Meilisearch, ainsi qu'un système complet de filtres pour les pièces. De plus, nous y avons ajouté un back-office pour notre client, afin qu'il puisse gérer son activité (consulter son chiffre d'affaires, gérer l'état des commandes, afficher les commandes à préparer/expédier, etc...).<br>
    Pour le côté technique, nous avons utilisé React et Redux pour le front-end, ainsi que Laravel et LunarPHP pour le back-end, et enfin Filament pour le back-office.",
    'img_url' => '/data/img/site-ecomerce-avec-recherche-instantanée-et-back-office.jpg',
    'img_alt' => "site-ecomerce-avec-recherche-instantanée-et-back-office",
    'img_title' => "Illustration du projet Stop Pièces Auto",
    'link' => "https://stopieces-auto.fr",
  ],
  [
    'title' => "Gymy", 
    'text' => "Lorsque j'allais à la salle de sport, je notais toutes mes séances et les mes performances sur un tableau Excel, mais ce n'était vraiment pas très pratique. J'ai donc regardé s'il n'y avait pas une application mobile pour rendre cela plus simple, mais celle que j'avais trouvé ne le plaisait pas vraiment, et une partie des fonctionnalités souhaitées étaient payantes. J'ai donc décidé de faire ma propre application mobile.<br>
    Dans cette application, j'ai fait un système d'authentification, la création et la gestion d'entraînements, dans lesquels il y a des exercices. Ces exercices, nous pouvons modifier leur ordre dans l'entraînement, ainsi que leur rajouter et modifier des performances. Sur la page d'ajout de performance, on peut accéder à un tableau illustrant notre progression. À côté de ça, nous pouvons créer et gérer des planifications qui servent à planifier notre semaine type, en choisissant les entraînements à faire pour chaque jour de la semaine. Il y a également un timer disponible sur l'application pour les temps de repos. Enfin, tout cela est disponible également sans créer de compte grâce à un système d'invité.<br>
    Pour les technologies utilisées, j'ai utilisé Quasar afin de pouvoir exporter l'application pour mobile et au format Web, afin de pouvoir gérer mes séances également depuis un ordinateur. Et pour le back-end, afin de gagner du temps, j'ai choisi d'utiliser les services de Firebase. Pour la base de données, étant donné qu'il était pertinent de faire une application local-first, j'ai utilisé le service de base de données en temps réel de Firebase que je stock en LocalStorage dans l'application (évidemment que les données propres à l'utilisateur en question).<br/>
    Utilisant ce projet tous les jours, je trouve presque tout le temps des améliorations à faire, et étant mon \"side-project\" favori, cela en fait un projet que je maintiens régulièrement.",
    'img_url' => "/data/img/application-de-sport-mathis-gasparotto-web-developpeur-projet.jpg",
    'img_alt' => "application-de-sport-mathis-gasparotto-web-developpeur-projet",
    'img_title' => "Illustration du projet Gymy",
    'link' => "https://github.com/mathis-gasparotto/gymy",
  ],
  [
    'title' => "Montage vidéo", 
    'text' => "Lors d'un projet d'école visant à travailler pendant 1 semaine pour un client réel, notre mission était de faire, pour une association, une application permettant de faire un montage vidéo automatique de photos et vidéos stockées sur un Google Drive. Dans ce projet, je me suis occupé de la partie génération du montage vidéo, et pour cela, j'ai tout d'abord utilisé Electron pour en faire une application installable au format desktop, afin que l'association n'ait pas besoin de payer un hébergement. Puis, en ce qui concerne la génération de la vidéo, j'ai utilisé FFmpeg sous la librairie JavaScript fluent-ffmpeg (qui permet d'utiliser les commandes de FFmpeg au format JavaScript).<br/>
    En ce qui concerne la récupération des contenus depuis le Google Drive, mes collègues ont utilisé la librairie JavaScript de Google.",
    'img_url' => "/data/img/application-de-montage-video-automatique-electron-mathis-gasparotto.jpg",
    'img_alt' => "application-de-montage-video-automatique-electron-mathis-gasparotto",
    'img_title' => "Illustration du projet de montage vidéo",
    'link' => "https://github.com/mathis-gasparotto/mds-2023-workshop-client",
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
      <a href="https://github.com/mathis-gasparotto" class="btn btn-secondary btn-with-icon" target="_blank">
        <i class="fa fa-github"></i><span>Visiter mon GitHub</span>
      </a>
    </div>
  </div>
</section>