<a href="<?php echo $btn_link; ?>" class="btn<?php if(isset($btn_add_class)) { echo ' ' . $btn_add_class; } ?><?php if(isset($btn_icon)) { echo ' btn-with-icon'; } ?>" <?php if(isset($btn_new_tab) && $btn_new_tab) { ?> target="_blank" <?php } ?> >
  <?php if(isset($btn_icon)) { ?>
    <i class="fa <?php echo $btn_icon; ?>"></i>
  <?php } ?>
  <span>
    <?php echo $btn_text; ?>
  </span>
</a>