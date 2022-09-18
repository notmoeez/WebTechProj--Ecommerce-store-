<!-- HEADER -->
<?php
ob_start();
require('header.inc.php');
?>
<!-- HEADER -->


<!-- CART -->
<?php
if(count($product->getData('cart'))!=0){
    require('Template/_cart.inc.php');

}else{
    require('Template/notFound/_cartNotFound.php');
}
?>
<!-- CART -->

<!-- WISHLIST -->
<?php
if(count($product->getData('wishlist'))!=0){
    require('Template/_wishlist.inc.php');

}else{
    require('Template/notFound/_wishlistNotFound.php');
}
?>
<!-- WISHLIST -->

<!-- NEW PHONES -->
<?php
require('Template/_new-phones.inc.php');
?>
<!-- NEW PHONES -->

<!-- FOOTER -->
<?php
require('footer.inc.php');
?>
<!-- FOOTER -->