<section class="main-hero">
  <div class="overlay">
    <div class="inner">
      <div class="start">
        <h1 class="title"><span><?php echo $first_word_h1; ?></span> <?php echo $second_word_h1; ?></h1>
        <h2 class="subtitle">Mathis <span>GASPAROTTO</span></h2>
        <div class="btns btns-desktop">
          <a href="#projects" class="btn btn-secondary left scroll-animation">Mes projets</a>
          <a href="<?php echo $contact_url; ?>" class="btn btn-primary right changing-page-link contact_link scroll-to-top">Contact</a>
        </div>
        <div class="btns btns-mobile">
          <?php 
            $btn_dl_link = "/data/downloads/CV_DeveloppeurWeb_MathisGasparotto_RVB.pdf";
            $btn_dl_add_class = "btn-secondary cv-dl-btn left";
            $btn_dl_file_name = "CV_DeveloppeurWeb_MathisGasparotto_RVB.pdf";
            $btn_dl_text = "Télécharger mon CV";
            require ( ROOT . 'common/btn_dl.php' );
          ?>
          <a href="#contact" class="btn btn-primary right scroll-animation">Contact</a>
        </div>
      </div>
    </div>
  </div>
</section>