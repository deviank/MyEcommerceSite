<?php
  // create short variable names
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];
  $engineqty = $_POST['engineqty'];
  $headlightqty = $_POST['headlightqty'];
  $magsqty = $_POST['magsqty'];
  $find = $_POST['find'];
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
  $date = date('H:i, jS F Y');

?>
<html>
<head>
  <title>Devian's Store - Order Results</title>
</head>
<body>
<h1>Devian's Store</h1>
<h2>Order Results</h2>
<?php

	echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

	echo "<p>Your order is as follows: </p>";

	$totalqty = 0;
	$totalqty = $tireqty + $oilqty + $sparkqty + $engineqty + $headlightqty + $magsqty;
	echo "Items ordered: ".$totalqty."<br />";


	if ($totalqty == 0) {

	  echo "You did not order anything on the previous page!<br />";

	} else {

	  if ($tireqty > 0) {
		echo $tireqty." tires<br />";
	  }

	  if ($oilqty > 0) {
		echo $oilqty." bottles of oil<br />";
	  }

	  if ($sparkqty > 0) {
		echo $sparkqty." spark plugs<br />";
      }
      
      if ($engineqty > 0) {
		echo $sparkqty." spark plugs<br />";
      }
      
      if ($headlightqty > 0) {
		echo $sparkqty." spark plugs<br />";
      }
      
      if ($magsqty > 0) {
		echo $sparkqty." spark plugs<br />";
	  }
	}


	$totalamount = 0.00;

	define('TIREPRICE', 100);
	define('OILPRICE', 10);
    define('SPARKPRICE', 4);
    define('ENGINEPRICE', 550);
    define('HEADLIGHTPRICE', 2);
    define('MAGSPRICE', 300);

	$totalamount = $tireqty * TIREPRICE
				 + $oilqty * OILPRICE
                 + $sparkqty * SPARKPRICE
                 + $engineqty * ENGINEPRICE
                 + $headlightqty * HEADLIGHTPRICE
                 + $magsqty * MAGSPRICE;

	echo "Subtotal: $".number_format($totalamount,2)."<br />";

	$taxrate = 0.10;  // local sales tax is 10%
	$totalamount = $totalamount * (1 + $taxrate);
	echo "Total including tax: $".number_format($totalamount,2)."<br />";

	if($find == "a") {
	  echo "<p>Regular customer.</p>";
	} elseif($find == "b") {
	  echo "<p>Customer referred by TV advert.</p>";
	} elseif($find == "c") {
	  echo "<p>Customer referred by phone directory.</p>";
	} elseif($find == "d") {
	  echo "<p>Customer referred by word of mouth.</p>";
	} elseif ($find == "e"){
	  echo "<p>Customer referred to us by a Website.</p>";
	} elseif ($find == "f"){
	  echo "<p>Customer referred to us by an online social plaform.</p>";
	} elseif ($find == "g"){
	  echo "<p>Cusomer referred to us by a Billboard.</p>";
	} elseif ($find == "h"){
	  echo "<p>Cusomer referred to us by a Magazine.</p>";
	} elseif ($find == "i"){
	  echo "<p>Cusomer referred to us by a Newspaper.</p>";
	} else {
	  echo "<p></p>";
	  }

echo "<p>Total of order is $".$totalamount."</p>";
echo "<p>Address to ship to is ".$address."</p>";

$outputstring = $date."\t".$tireqty." tires \t".$oilqty." oil\t"
    .$sparkqty." spark plugs\t\$".$totalamount
    ."\t". $address."\n";



// open file for appending
@ $fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", 'ab');

flock($fp, LOCK_EX);

if (!$fp) {
    echo "<p><strong> Your order could not be processed at this time.
		    Please try again later.</strong></p></body></html>";
    exit;
}

fwrite($fp, $outputstring, strlen($outputstring));
flock($fp, LOCK_UN);
fclose($fp);

echo "<p>Order written.</p>";

	  ?>
</body>
</html>
