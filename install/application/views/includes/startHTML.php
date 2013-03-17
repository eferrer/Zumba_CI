<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  <title>
  <?php 
$objContent = $query_result->row();


	 //ternary
	 echo (isset($objContent->title))?$objContent->title:'Default title';
	  
	// the same as
	// if(isset($title)){
	// 	echo $title;
	// }else{
	// 	echo '';
	// }
 ?>
</title> 


<meta name="description" content="<?php echo (isset($description))?$description:'description' ; ?>">
<meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1"><!--very important line to include - enables iphone to recognise portrait and landscape-->

 <!--  Note the use of base url; turn on url helpers in the config.php file 
 - look at autoload folder in the config folder -->
  <link rel="stylesheet" href="<?=base_url()?>css/style.css">
  <script src="../../js/modernizr-2.6.2.min.js"></script>
<head>
    
</head>
<body>
    <!-- Insert your content here -->