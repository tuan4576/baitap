
<?php
 define("PATH","http://localhost/PHANTHANHTUAN_2122110123/index.php?");
include_once("partial/header.php");
?>	


<div class="row content">
	<?php
	if(!isset($_GET['page'])){
		$page = "";
	}else{
		$page = $_GET['page'];
	}
	$route =[
		'' => 'pages/home.php',	
		'home' => 'pages/home.php',
		'product' => 'product/product.php',
		'cart' => 'cart/cart.php',
		'contact' => 'user/contact.php',
		'registration' => 'user/registration.php'
	];
	foreach($route as $key=>$value){
		if ($page ==$key){
		   include_once($value);
		}
	 }
	?>
<?php
include_once("partial/footer.php");
?>	