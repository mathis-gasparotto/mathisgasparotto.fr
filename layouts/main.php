<?php
require_once ( ROOT . 'layouts/head.php' );
require_once ( ROOT . 'layouts/header.php' );
require_once ( ROOT . 'layouts/start_main_container.php' );
?>
<div class="main">

  <div class="click-to-select"></div>

  <?php
  require_once ( ROOT . 'pages/' . $page . '.php' );
  ?>

</div>
<?php
$bp = ['cv', 'contact'];
if ($page == 'cv') {
  $bp = ['home', 'contact'];
} elseif ($page == 'contact') {
  $bp = ['cv', 'home'];
}

if (!IS_MOBILE) {
  require_once ( ROOT . 'layouts/back-pages.php' );
}
require_once ( ROOT . 'layouts/end_main_container.php' );
require_once ( ROOT . 'layouts/need_reload.php' );
require_once ( ROOT . 'layouts/nav.php' );
require_once ( ROOT . 'layouts/go-to-top.php' );
require_once ( ROOT . 'layouts/foot.php' );
?>