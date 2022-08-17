<?php
$page_title = "Développeur Web - Mathis GASPAROTTO";

require_once 'layouts/head.php';
require_once 'layouts/header.php';
require_once 'layouts/start_main_container.php';
?>
<div class="main">

  <div class="click-to-select"></div>

  <?php
  require_once 'pages/home.php';
  ?>

</div>
<?php
require_once 'layouts/back-pages.php';
require_once 'layouts/end_main_container.php';
require_once 'layouts/nav_links.php';
require_once 'layouts/foot.php';
?>