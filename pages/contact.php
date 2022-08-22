<div class="page contact-page" id="top">

  <?php

  $first_word_h1 = "Me";
  $second_word_h1 = "Contacter";

  require ( ROOT . 'layouts/hero.php' );
  ?>

  <div class="page-content">

  <?php 
  require ( ROOT . 'components/coordinates.php' );
  require ( ROOT . 'components/contact_form.php' );
  ?>

  </div>

  <?php require ( ROOT . 'layouts/footer.php' ); ?>

</div>
