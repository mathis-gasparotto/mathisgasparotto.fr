<?php 
class Project {
  public string $title;
  public string $text;
  public string $img_url;
  public string $img_alt;
  public string $img_title;
  public string $link;

  public function __construct(string $title, string $text, string $img_url, string $img_alt, string $img_title, string $link)
  {
    $this->title = $title;
    $this->text = $text;
    $this->img_url = $img_url;
    $this->img_alt = $img_alt;
    $this->img_title = $img_title;
    $this->link = $link;
  }
}
$projects = [
  new Project(
    $title = "Titre du projet", 
    $text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia tempora placeat aliquam aperiam minus minima mollitia et ratione? Tenetur laudantium possimus pariatur porro ipsam sed facilis maiores obcaecati nam culpa.",
    $img_url = "/data/img/008899.png", // https://via.placeholder.com/640x480.png/008899?text=sint
    $img_alt = "image-projet",
    $img_title = "Image de projet",
    $link = "#",
  ),
  new Project(
    $title = "Titre du projet", 
    $text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia tempora placeat aliquam aperiam minus minima mollitia et ratione? Tenetur laudantium possimus pariatur porro ipsam sed facilis maiores obcaecati nam culpa.",
    $img_url = "/data/img/008899.png", // https://via.placeholder.com/640x480.png/008899?text=sint
    $img_alt = "image-projet",
    $img_title = "Image de projet",
    $link = "#",
  ),
  new Project(
    $title = "Titre du projet", 
    $text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia tempora placeat aliquam aperiam minus minima mollitia et ratione? Tenetur laudantium possimus pariatur porro ipsam sed facilis maiores obcaecati nam culpa.",
    $img_url = "/data/img/008899.png", // https://via.placeholder.com/640x480.png/008899?text=sint
    $img_alt = "image-projet",
    $img_title = "Image de projet",
    $link = "#",
  ),
];
?>

<section class="section projects">
  <div class="container">
    <?php foreach($projects as $project) { ?>
      <div class="project-container">
        <div class="img-container">
          <img src="<?php echo $project->img_url; ?>" class="img" alt="<?php echo $project->img_alt; ?>" title="<?php echo $project->img_title; ?>" loading="lazy" />
        </div>
        <div class="text-container">
          <h3 class="title"><?php echo $project->title; ?></h3>
          <p class="content text"><?php echo $project->text; ?></p>
          <a href="<?php echo $project->link; ?>" class="btn read-more-btn btn-primary">En savoir plus</a>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="projects-show-more container">
    <div class="left bold">Et bien d’autres jeux vidéos en tout genre…</div>
    <div class="right">
      <!-- <a href="/portfolio" class="btn btn-secondary">En découvrir plus</a> -->
      <span class="btn btn-secondary changing-page-link portfolio_link">En découvrir plus</span>
    </div>
  </div>
</section>