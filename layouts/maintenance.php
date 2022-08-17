<section class="section maintenance full full-center">
  <div class="content">
    <h2><?php echo $message; ?></h2>
    <?php if(isset($btn_link) && isset($btn_text)) { 
      require "common/btn.php";
    } ?>
  </div>
</section>