<div class="page home-page" id="top">

  <?php

  $first_word_h1 = "Développeur";
  $second_word_h1 = "Web";

  require 'layouts/main_hero.php';
  ?>

  <div class="page-content">

  <?php 
  require 'components/skills.php';
  require 'components/projects.php';
  require 'components/who.php';
  require 'components/futur_projects.php';
  require 'components/cta.php';
  ?>

  </div>

<?php require 'layouts/footer.php'; ?>

</div>
