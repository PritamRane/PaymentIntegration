<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
<link rel="stylesheet" href="css/checkout.css">
</head>
<body>
	<h1>Merchant Check Out Page</h1>
	<pre>
	</pre>
	<form method="post" action="pgRedirect.php">
		<table border="1" hidden>
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php $ord="ORDS" . rand(10000,99999999); echo $ord?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="198590">
					</td>
				</tr>
				<tr>
					<td>6</td>
					<td><label>Email*</label></td>
					<td><input title="EMAIL" 
						type="email" name="EMAIL">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit"	onclick=""></td>
					<div class="sell-objects">
                <div class="card-wrapper">
                    <div class="card">
                      <div class="card-content">
                        <div class="img-view">
						  <img id="img-laptop" src="img/product.jpg"/>
						  <h1>x</h1>
						  <h1>1</h1>
                        </div>
                      </div>
                      <div class="card-copy">
                        <p class="headline">DELL</p>
                        <h1>Dell Alienware</h1>
                        <p>ORDER ID: <?php echo $ord?></p>
                        <div class="price"> Rs. 1,98,590.00 </div>
                        <input type="text" id="price" value="Rs. 1,98,590.00" hidden>
                        <input type="submit" value="CHECKOUT" class="btn-buy"></input>
                      </div>
                    </div>
                  </div>           
            </div>
				</tr>
			</tbody>
		</table>
		
	</form>
	<div class="main-container">
        <div class="main-header">
            <div class="logo-container">
                <a href="index.html">
                    <img class="logo" src="img/logo.PNG" alt="">
                </a>
            </div>
        </div>
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