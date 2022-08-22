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
$bp = ['cv', 'portfolio', 'contact'];
if ($page == 'cv') {
  $bp = ['home', 'portfolio', 'contact'];
} elseif ($page == 'portfolio') {
  $bp = ['cv', 'home', 'contact'];
} elseif ($page == 'contact') {
  $bp = ['cv', 'portfolio', 'home'];
}
require_once ( ROOT . 'layouts/back-pages.php' );
require_once ( ROOT . 'layouts/end_main_container.php' );
require_once ( ROOT . 'layouts/nav_links.php' );
require_once ( ROOT . 'layouts/foot.php' );
?>