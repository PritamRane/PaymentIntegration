<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; 

$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); 

if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
        echo "<b>Transaction status is success</b>" . "<br/>";
        $status = "Payment Successful";
        $message = "Thankyou For shopping with us.";
	}
	else {
        echo "<b>Transaction status is failure</b>" . "<br/>";
        $status = "Payment Failure";
	}

	
	

}
else {
	echo "<b>Checksum mismatched.</b>";
}

$ord = $_POST['ORDERID'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYBERSHOP</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/response.css">

</head>
<body>
    <div class="main-container">
        <div class="main-header">
            <div class="logo-container">
                <a href="index.html">
                    <img class="logo" src="img/logo.PNG" alt="">
                </a>
            </div>
        </div>
        <form action="TxnTest.php" method="POST">
            <div class="sell-objects">
                <div class="card-wrapper">
                    <div class="card">
					<h1><?php $message?></h1>
                      <div class="card-content">
						  
                        <div class=“img-view”>
                          <img id="img-laptop" src="img/product.jpg"/>
                        </div>
                      </div>
                      <div class="card-copy">
                        <p class="headline">DELL</p>
                        <h1>Dell Alienware</h1>
                        <h2>ORDER ID:<?php echo $ord ?></h2>
                        <div class="price"><?php echo $status?></div>
                      </div>
                    </div>
                  </div>           
            </div>
        </form>
        
    </div>
    
    
    <footer class="main-footer">
        <nav>
            <ul class="main-footer__links">
                <li class="main-footer__link">
                    <a href="#">Contact Us</a>
                </li>
                <li class="main-footer__link">
                    <a href="#">Terms of Use</a>
                </li>
            </ul>
        </nav>
    </footer>
</body>
</html>