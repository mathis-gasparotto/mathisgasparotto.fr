<div class="page cv-page" id="top">

  <?php

  $first_word_h1 = "Mon";
  $second_word_h1 = "CV";

  require ( ROOT . 'layouts/hero.php' );
  ?>

  <div class="page-content">
    <section class="section cv-dl-n-show">
      <div class="center column cv-container container">
        <?php require ( ROOT . 'components/cv_dl_btn.php' ); ?>
        <?php require ( ROOT . 'components/cv_embed.php' ); ?>
      </div>
    </section>
  <?php
  require ( ROOT . 'components/cta.php' );
  ?>

  </div>

<?php require ( ROOT . 'layouts/footer.php' ); ?>

</div>
