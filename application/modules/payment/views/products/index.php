
<!DOCTYPE html>
<head>
</head>
<body>

<?php
$salt='3sf0jURk';
$key='C0Dr8m';
$firstname='nitesh';
$lastname='Singh';
$surl='http://localhost/eduworkers.co.uk/payment/success';
$phone='3847384';


$curl='http://www.google.com';
$furl='https:/www.yahoo.in';
$txnid='PLS-10061-'.rand(999,9999);
$productinfo='sds';
$email='nkscoder@gmail.com';
$amount='100';
$hash = hash('sha512',$key.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|||||||||||'.$salt);
?>
<form action='https://test.payu.in/_payment' method='post'>
<input type="hidden" name="firstname" value="<?php echo $firstname; ?>" />
<!-- <input type="hidden" name="lastname" value="<?php echo $lastname; ?>" /> -->
<input type="hidden" name="surl" value="<?php echo $surl; ?>" />
<input type="hidden" name="phone" value="<?php echo $phone; ?>" />
<input type="hidden" name="key" value="<?php echo $key; ?>" />
<input type="hidden" name="hash" value = "<?php echo $hash; ?>" />
<input type="hidden" name="curl" value="<?php echo $curl; ?>" />
<input type="hidden" name="furl" value="<?php echo $furl; ?>" />
<input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
<input type="hidden" name="productinfo" value="<?php echo $productinfo; ?>" />
<input type="hidden" name="amount" value="<?php echo $amount; ?>" />
<input type="hidden" name="email" value="<?php echo $email; ?>" />
<input type= "submit" value="submit">
</form>
</body></html>  