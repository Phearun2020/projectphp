<?php
ob_start();
//include header.php file
include ("header.php");
?>

<?php
/*include banner area*/
  include ('Template/_banner-area.php');
/*include banner area*/

/*include top sale*/
include ('Template/_top-sale.php');
/*include top sale*/

/*include special price section*/
include ('Template/_special-price.php');
/*include special price section*/

/*include banner ads */
include ('Template/_banner-ads.php');
/*include banner ads */

/*include new phones section*/
include ('Template/_new-phone.php');
/*include new phones section*/

/*include blogs area*/
include ('Template/_blogs.php');
/*include blogs area*/
?>


<?php
//include header.php file
include ("footer.php");
?>

