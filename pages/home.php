<div class="page home-page" id="top">

  <?php

  $first_word_h1 = "Développeur";
  $second_word_h1 = "Web";

  require ( ROOT . 'layouts/main_hero.php' );
  ?>

  <div class="page-content">

  <?php 
  require ( ROOT . 'components/skills.php' );
  require ( ROOT . 'components/projects.php' );
  require ( ROOT . 'components/who.php' );
  require ( ROOT . 'components/futur_projects.php' );
  require ( ROOT . 'components/cta.php' );
  ?>

  </div>

<?php require ( ROOT . 'layouts/footer.php' ); ?>

</div>
