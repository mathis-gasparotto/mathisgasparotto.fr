<?php
require_once ( ROOT . 'components/layouts/head.php' );
require_once ( ROOT . 'components/layouts/header.php' );
require_once ( ROOT . 'components/layouts/start_main_container.php' );
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
  require_once ( ROOT . 'components/layouts/back-pages.php' );
}
require_once ( ROOT . 'components/layouts/end_main_container.php' );
require_once ( ROOT . 'components/layouts/reload_in_progress.php' );
require_once ( ROOT . 'components/layouts/nav.php' );
require_once ( ROOT . 'components/layouts/go-to-top.php' );
require_once ( ROOT . 'components/layouts/foot.php' );
?>