<?php

define('INCLUDE_CHECK',1);
require "connect.php";

if(!$_POST)
{
	if($_SERVER['HTTP_REFERER'])
	header('Location : '.$_SERVER['HTTP_REFERER']);
	
	exit;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/demo.css" />


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="simpletip/jquery.simpletip-1.3.1.pack.js"></script>


<script type="text/javascript" src="js/script.js"></script>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Food Cart</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/home.css" rel="stylesheet">


</head>
<body>
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="demo.php">Food Cart</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div id="main-container">

    <div class="container">
    
    	<span class="top-label">
            <span class="label-txt"><strong style="font-size:16px">Your order</strong></span>
        </span>
        
        <div class="content-area">
    
    		<div class="content">
            	
                <?php
				
				$cnt = array();
				$products = array();
				$total=0;
				
				foreach($_POST as $key=>$value)
				{
					$key=(int)str_replace('_cnt','',$key);
				
					$products[]=$key;
					$cnt[$key]=$value;
				}

				$result = mysql_query("SELECT * FROM internet_shop WHERE id IN(".join($products,',').")");
				
				if(!mysql_num_rows($result))
				{
					echo '<h1>There was an error with your order!</h1>';
				}
				else
				{
					echo '<h1>You ordered:</h1>';
					
					while($row=mysql_fetch_assoc($result))
					{
						echo '<h2>'.$cnt[$row['id']].' x '.$row['name'].'</h2>';
						
						$total+=$cnt[$row['id']]*$row['price'];
					}
		
					echo '<h1>Total: $'.$total.'</h1>';
				}
				?>
                
                
       	        <div class="clear"></div>
       	        <br>
       	        <a href="urpaypal@paypal.com" class="button">Pay with Paypal</a>
            </div>
            <br>
       	        <a href="urpaypal@paypal.com" class="button">Pay with Paypal</a>

        </div>
        
        <div class="bottom-container-border">
        	<a href="urpaypal@paypal.com" class="button">Pay with Paypal</a>
        </div>

    </div>

</div>
</body>
</html>
