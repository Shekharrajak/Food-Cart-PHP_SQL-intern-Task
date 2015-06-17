<?php

define('INCLUDE_CHECK',1);
require "connect.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<link rel="stylesheet" type="text/css" href="css/demo.css" />


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="simpletip/jquery.simpletip-1.3.1.pack.js"></script>


<script type="text/javascript" src="js/script.js"></script>

<head>

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Food Cart</a>
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


<div class="main-container">
    <!-- Page Content -->
    <div class="container">

        <div class="row" style="margin-top:200px">

            <!--  Entries Column -->
            <div class="col-md-9" style="width:60%">
                    <span class="top-label">
            <span class="label-txt"><strong style="font-size:16px">Products</strong></span>
        </span>
        
        <div class="content-area">
    
            <div class="content drag-desired">
                <p> Drag the product into the cart.</p>
                <?php

                $result = mysql_query("SELECT * FROM internet_shop");
                while($row=mysql_fetch_assoc($result))
                {
                    echo '<div class="product"><strong>Price:'.$row['price'].'</strong><img src="img/products/'.$row['img'].'" alt="'.htmlspecialchars($row['name']).'" width="128" height="128" class="pngfix" /></div>';
                    
                    
                }

                ?>
                
                
                <div class="clear"></div>
            </div>

        </div>
        
        <div class="bottom-container-border">
        </div>



            </div>

            
            <div class="col-md-4" style="position:fixed float:right">

               
                <div class="well" style="margin-bottom:100px">
                    <h4> Search what  you want</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>
  <span class="top-label">
            
            <div class="affix-top affix" data-spy="affix" data-offset-top="20"style="margin-top:50px">
                        <span class="label-txt"><strong style="font-size:16px">Food Cart</strong></span>
        </span>
         <p> Drag the product into this cart.</p>
        
        <div class="content-area">
    
            <div class="content drop-here">
                <div id="cart-icon">
                    <img src="img/Shoppingcart_128x128.png" alt="shopping cart" class="pngfix" width="128" height="128" />
                    <img src="img/ajax_load_2.gif" alt="loading.." id="ajax-loader" width="16" height="16" />
                </div>

                <form name="checkoutForm" method="post" action="order.php">
                
                <div id="item-list">
                </div>
                
                </form>                
                <div class="clear"></div>

                <div id="total"></div>

                <div class="clear"></div>
                
                <a href="" onclick="document.forms.checkoutForm.submit(); return false;" class="button">Checkout</a>
                
          </div>

        </div>
        </div>
        <div class="bottom-container-border">
        </div>

                <!-- Side Widget Well -->
               
            </div>

    
      </div>  <!-- /.row -->
  </div> 
</div>
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 201</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    
    <!-- /.container -->

    <!-- jQuery -- <script src="js/jquery.js"></script>
    
        
     <!-- Bootstrap Core JavaScript 
    <script src="js/bootstrap.min.js"></script>
-->
</body>

</html>
