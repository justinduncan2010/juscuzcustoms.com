<html lang="en">
<head>
<meta charset="utf-8">
<title>BatchPad Home - Justin Duncan</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Justin Duncan">
<link href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/style.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet" media="screen">
<link href="css/portfolio.css" rel="stylesheet">
<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
<link rel="stylesheet" href="layerslider/css/layersliderstyle.css" type="text/css"> <!--Alicia will be making a separate header and footer php file-->

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php
$con = mysql_connect("sulley.cah.ucf.edu","ju655443","Jade7369!");
if (!$con) {
die("Can not Connect: " . mysql_error());
}

mysql_select_db("ju655443",$con);
$sql = 'SELECT * FROM products WHERE featured = "yes"';
$new = 'SELECT * FROM products WHERE new = "yes"';
$myData = mysql_query($sql,$con);
$myNew = mysql_query($new,$con);
?>
</head>
<body>
<!-- Header Start -->
<header>
  <div class="headerstrip">
    <div class="container">
      <a class="logo pull-left" href="home.php"><img title="BatchPad" alt="BatchPad" src="img/logo.png"></a>
      <!-- Top Nav Start -->
      <div class="pull-right">
        <div class="navbar" id="topnav">
          <div class="navbar-inner">
          	<div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
    					<div class="modal-dialog">
  						  <div class="modal-content">
    							<div class="modal-header">
      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      							<h4 class="modal-title">Please Sign-in</h4>
    							</div>
    							<!-- contents of Sign-in modal -->
    							<div class="modal-body"> 
    								<div class="form-group">
        							<label class="control-label" >Username<span class="red">*</span></label>
        							<div class="controls">
          								<input type="text" class=""  value="">
        							</div>
        						</div>
      							<div class="form-group">
        							<label class="control-label" >Password<span class="red">*</span></label>
        							<div class="controls">
          							<input type="text" class=""  value="">
        							</div>
      							</div>
    							</div>
    							<div class="modal-footer">
      							<button type="button" class="btn btn-orange" data-dismiss="modal">Cancel</button>
      							<button type="button" class="btn btn-primary">Sign-in</button>
    							</div>
  						  </div>
  						<!-- /.modal-content --> 
  					  </div>
  					<!-- /.modal-dialog --> 
  			    </div>
  			    <!-- /.modal -->
            <ul class="nav" >
            	<li class="text-nopad text-center"><a href="register.php">Sign-up</a></li>
                <li class="text-nopad"><p>or</p></li>
            	<li class="text-nopad"><a href="#myModal" data-toggle="modal"> &nbsp; login</a></li>
                <li class="dropdown hover carticon "> <a href="cart.php" class="dropdown-toggle" > <i class="icon-shopping-cart font18"></i> Shopping Cart <span class="label label-orange font14">2 item(s)</span> - $1,790.00 <b class="caret"></b></a>
                <ul class="dropdown-menu topcartopen ">
                  <li>
                    <table>
                      <tbody>
                        <tr>
                          <td class="image"><a href="product.php"><img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"></a></td>
                          <td class="name"><a href="product.php">product goes here</a></td>
                          <td class="quantity">x&nbsp;1</td>
                          <td class="total">$589.50</td>
                          <td class="remove"><i class="icon-remove"></i></td>
                        </tr>
                        <tr>
                          <td class="image"><a href="product.php"><img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"></a></td>
                          <td class="name"><a href="product.php">product goes here</a></td>
                          <td class="quantity">x&nbsp;1</td>
                          <td class="total">$589.50</td>
                          <td class="remove"><i class="icon-remove "></i></td>
                        </tr>
                      </tbody>
                    </table>
                    <table>
                      <tbody>
                        <tr>
                          <td class="textright"><b>Sub-Total:</b></td>
                          <td class="textright">$1.7900.00</td>
                        </tr>
                        <tr>
                          <td class="textright"><b>Tax (6.00%):</b></td>
                          <td class="textright">$123.20</td>
                        </tr>
                        <tr>
                          <td class="textright"><b>Total:</b></td>
                          <td class="textright">$1,813.20</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="well pull-right buttonwrap"> <a class="btn btn-orange" href="cart.php">View Cart</a></div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    <!-- Top Nav End -->
    </div>
  </div>
  <div id="categorymenu">
    <nav class="subnav">
      <ul class="nav-pills categorymenu container">
        <li><a class="active home" href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
        <li><a href="catalog.php">Shop</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="contact.php">Contact Us</a> </li>
        <li class="pull-right">
    	    <form action="search.php" method="get" class="form-search top-search">
      	    <input type="text" class="input-small search-query" placeholder="Search Here…">
      	      <button class="btn btn-orange btn-small tooltip-test" data-original-title="Search"><i class="icon-search icon-white"></i></button>
          </form>
        </li>
      </ul>
    </nav>
  </div>   
</header>
