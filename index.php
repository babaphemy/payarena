<?php ob_start();?>
<?php  
session_start();
if ($_POST){

$price = $_POST['price'];                                              //Gets amount and pass to variable
$url = "http://196.46.20.80:8085/KHROMEPAY";                           //URL to post data to. CHANGE CODE-ID TO YOUR MERCHANTID SENT VIA EMAIL
$datap = json_encode(array(
	'Amount'    => $price,
	'Fee' => 0,
	'Currency'       => '566',
	'Description' => 'Payment for Tshirts',
	'ReturnUrl'      => 'https://payarena.herokuapp.com/response.php',                 //Rename return url accordingly
	'SecretKey' => 'DF6FD65C0A393B359994BD51924C583BF366F2855977A6C3'      
    ));                                                               //Order request sent to CIPG

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HTTPHEADER,   array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $datap);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
$json_response = curl_exec($curl); 
curl_getinfo($curl, CURLINFO_HTTP_CODE);
$redirectURL = curl_getinfo($curl,CURLINFO_EFFECTIVE_URL );             //Gets the response URL from CIPG server and stores in $redirectURL
echo("transid here is : " . $redirectURL);
header( 'Location: ' . $redirectURL );                                 //Redirecting to PG for payment
curl_close($curl);                                                     //Closes open curl.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>DEMO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Unified Payments Demo">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
	<link href="demo-panel/demo-panel-style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>DEMO CONNECTION TO UNIFIED PAYMENTS' PAYMENT GATEWAY</h2>
				  <div class="contact-form-wrapper">
						<form id="" method="post" class="form-horizontal margin-bottom-30px" role="form" novalidate>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<img src="assets/images/lap.jpg">   
										<input type="text" class="form-control" id="contact-name" name="price" placeholder="Price*" value ="60000" required>
									</div>

								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-6">
									<button id="" type="submit" class="btn btn-primary">  <span>Checkout</span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
