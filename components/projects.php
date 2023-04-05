<?php 
$projects = [
  [
    'title' => "Site personnel", 
    'text' => "À l'heure actuelle, le projet de développement web front-end pour lequel j'en suis le plus fière, c'est mon site personnel. Il y a 2 ans, je suis tombé sur un tuto sur YouTube pour faire un site avec un aspect 3D. Et ceux, juste en utilisant du simple HTML, CSS et JS. Donc je me suis lancé sur l'idée de refaire mon site personnel avec ce style 3D, afin de découvrir et d'expérimenter la 3D en CSS. <br>
    Ce projet m'a permis de découvrir et d'expérimenter plein de nouvelles pratiques en CSS. C'est un peu mon site bac à sable. C'est un site sur lequel je travaille de temps en temps, à mes heures perdues. Ce qui fait qu'en 2 ans, il n'est toujours pas entièrement fini. En réalité, au niveau fonctionnalité et performance, il est assez complet, mais il manque plus qu'à rédiger les textes du site (je n'aime vraiment pas ça 😅).",
    'img_url' => "/data/img/site-personnel-mathis-gasparotto-developpeur-projet.jpg",
    'img_alt' => "site-personnel-mathis-gasparotto-developpeur-projet",
    'img_title' => "Illustration de mon projet personnel",
    'link' => "https://github.com/Mathis-Gasparotto/mathisgasparotto.fr",
  ],
  [
    'title' => "Générateur de facture", 
    'text' => "Dans le cadre de ma 2ème année de mon Bachelor Web & Multimedia, j'ai eu l'occasion de découvrir le framework PHP Laravel. Durant cette découverte, j'ai notamment développé une plateforme de génération de factures. Pour un peu plus d'explication, cette plateforme permet, suite à la connexion à son compte, de gérer ses clients, gérer ses missions avec ces clients, et pouvoir gérer automatiquement tous les documents relatifs à une mission (facture, etc..). Durant ce projet, j'ai donc pu faire des CRUD, et gérer les données en base de données, ainsi que gérer des relations entre plusieurs tables de données (même si en réalité il manque juste la génération du pdf 😉).",
    'img_url' => '/data/img/generator-de-facture-laravel-mathis-gasparotto-developpeur-projet.jpg',
    'img_alt' => "generator-de-facture-laravel-mathis-gasparotto-developpeur-projet",
    'img_title' => "Illustration du projet du générateur de facture sous Laravel",
    'link' => "https://github.com/Mathis-Gasparotto/mds_dev_objet_2021/tree/master/quote-generator",
  ],
  [
    'title' => "Plateforme de vote", 
    'text' => "Dans le cadre d'un projet de fin d'année (toujours en 2ème année de mon Bachelor), j'ai développé une plateforme de référendum (dédiée à être interne à l'école). Cette plateforme permettait de proposer aux délégués des classes de faire des référendums, et de les proposer aux étudiants, afin qu'ils puissent voter pour ou contre. Sur cette plateforme (qui est en réalité un site pour mobile développé en Laravel), il y a 3 types de comptes. Soit les comptes Administrateur de la plateforme (super admin !) qui peuvent tout faire, de façon à administrer la plateforme en cas de problème. Il y avait également les comptes de l'administration de l'école, qui eux peuvent juste consulter les référendums en cours (et ceux archivés), et les accepter ou non (à la fin de la période de vote). Puis nous avions les comptes délégués, qui peuvent proposer des référendums aux autres étudiants, et qui peuvent y voter. Et enfin, il y avait les comptes étudiants, qui eux peuvent juste voir les référendums en cours (ainsi que ceux archivés), voter à ces référendums, et suivre leur progression.",
    'img_url' => "/data/img/plateforme-de-vote-mathis-gasparotto-web-developpeur-laravel-projet.jpg",
    'img_alt' => "plateforme-de-vote-mathis-gasparotto-web-developpeur-laravel-projet",
    'img_title' => "Illustration du projet de plateforme de vote sous Laravel",
    'link' => "https://github.com/Mathis-Gasparotto/my-digital-vote",
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
      <a href="https://github.com/Mathis-Gasparotto?tab=repositories" class="btn btn-secondary btn-with-icon" target="_blank">
        <i class="fa fa-github"></i><span>Visiter mon GitHub</span>
      </a>
    </div>
  </div>
</section>