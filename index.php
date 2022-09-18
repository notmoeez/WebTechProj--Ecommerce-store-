<!-- HEADER -->
<?php
ob_start();

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}


require('header.inc.php');
?>
<!-- HEADER -->


<!-- CAROUSEL -->
<?php
require('Template/_carousel.inc.php');
?>

<!-- CAROUSEL -->

<!-- TOP SALE -->
<?php
require('Template/_top-sale.inc.php');
?>

<!-- TOP SALE -->

<!-- SPECIAL PRICE -->
<?php
require('Template/_special-price.inc.php');
?>
<!-- SPECIAL PRICE -->

<!-- WEBSITE ADS -->
<?php
require('Template/_phone-ads.inc.php');
?>
<!-- WEBSITE ADS -->

<!-- NEW PHONES -->
<?php
require('Template/_new-phones.inc.php');
?>
<!-- NEW PHONES -->

<!-- BLOGS -->
<?php
require('Template/_blog.inc.php');
?>
<!-- BLOGS -->


<!-- FOOTER -->
<?php
require('footer.inc.php');
?>
<!-- FOOTER -->