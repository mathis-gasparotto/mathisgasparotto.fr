<?php
define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);
// javascript:void(0);
$home_url = "/"; // /
$cv_url = "/cv"; // /cv
$portfolio_url = "/portfolio"; // /portfolio
$contact_url = "/contact"; // /contact

function isMobile() {
  return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

define('isMobile', isMobile());