<div class="page home-page" id="top">

  <?php

  $first_word_h1 = "Développeur";
  $second_word_h1 = "Web";

  require ( ROOT . 'layouts/main_hero.php' );
  ?>

  <div class="page-content" id="page-content">

  <?php 
  require ( ROOT . 'components/skills.php' );
  require ( ROOT . 'components/projects.php' );
  if(IS_MOBILE) {
    require ( ROOT . 'components/futur_projects.php' );
    require ( ROOT . 'components/who.php' );
  } else {
    require ( ROOT . 'components/who.php' );
    require ( ROOT . 'components/futur_projects.php' );
  }
  ?>
  
  <div class="desktop">
    <?php 
      require ( ROOT . 'components/cta.php' );
    ?>
  </div>
  <div class="mobile">
    <?php 
      if(IS_MOBILE) {
        require ( ROOT . 'components/coordinates.php' );
        require ( ROOT . 'components/contact_form.php' );
      }
    ?>
  </div>

  </div>

<?php require ( ROOT . 'layouts/footer.php' ); ?>

</div>
