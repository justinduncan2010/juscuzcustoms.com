<<<<<<< HEAD
<<<<<<< HEAD
<?php 
session_start();
?>
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
<link rel="stylesheet" href="layerslider/css/layersliderstyle.css" type="text/css"
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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
                    <!-- Sign-in Modal popup window -->
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
                                            	<form method="post" action="">
                    							<label class="control-label" >Username<span class="red">*</span></label>
                    							<div class="controls">
                      								<input name="username" id="username" type="text" placeholder="Username or Email"/>
                    							</div>
                  							</div>
                  							<div class="form-group">
                    							<label class="control-label" >Password<span class="red">*</span></label>
                    							<div class="controls">
                      								<input name="password" id="password" type="password" placeholder="Password"/>
                    							</div>
                  							</div>
              							</div>
              							<div class="modal-footer">
                                        <?php 
											if(isset($_POST['submit']) && (!isset($_SESSION['logged_in']))) {
										// query to select all users/passwords
											$select_users = "SELECT * FROM users";
											$select_users_result = $mysqli->query($select_users);
											
										if($mysqli->error) {
												print "Select query error!  Message: ".$mysqli->error;
											}
										
											while($row = $select_users_result->fetch_object()) {
												if ((($_POST['username']) == ($row->username)) && (md5($_POST['password']) == ($row->password))) {
													// check if user input = a record in the database
													$_SESSION['logged_in']              = true;
													$_SESSION['logged_in_user']         = $row->username;
													$_SESSION['logged_in_firstname']    = $row->first_name;
													$_SESSION['logged_in_lastname']     = $row->last_name;
													$_SESSION['logged_in_user_id']      = $row->user_id;
													$_SESSION['logged_in_user_access']  = $row->access_level;
												} 
												elseif((($_POST['username']) != ($row->username)) && (md5($_POST['password']) != ($row->password))){
												
												?>
                                                
                                                <h4 class="red">Sorry, Invalid username or password</h4>
												<?php break;
												}
											}
										}
										?>
                							<button type="button" class="btn btn-orange" data-dismiss="modal">Cancel</button>
                                            <input name="submit" id="submit" type="submit" class="btn btn-primary" value="Sign-in" />
                                            </form>
              							</div>
            						</div>
            						<!-- End of .modal-content --> 
          						</div>
          						<!-- End of.modal-dialog --> 
        					</div>
        					<!-- End of .modal -->
                        <ul class="nav" >
                        	<?php 
							if(!isset($_SESSION['logged_in'])) { 
							?>
                            
                        	<li class="text-nopad text-center"><a href="register.php">Sign-up</a></li>
                            <li class="text-nopad"><p>or</p></li>
                        	<li class="text-nopad"><a href="#myModal" data-toggle="modal"> &nbsp; login</a></li>
                            <li class="dropdown hover carticon "> <a href="cart.php" class="dropdown-toggle" > <i class="icon-shopping-cart font18"></i> Shopping Cart <span class="label label-orange font14">2 item(s)</span> - $1,790.00 <b class="caret"></b></a>
                            
                            <?php
							}else if(($_SESSION['logged_in_user_access'] == "admin")) {
							print "<li class='text-nopad'><p>not &nbsp;".$_SESSION['logged_in_firstname']."?</p></li>"; ?>
                        	<li class="text-nopad"><a href="logout.php"> &nbsp; logout</a></li>
                            <li class="text-nopad"><a href="admin.php"> &nbsp; To Admin Page</a></li>
                            
                            <?php 
							}elseif(($_SESSION['logged_in_user_access'] == "customer")){
							?>
                            
							<?php echo "<li class='text-nopad text-center'>Welcome".$_SESSION['logged_in_firstname']."!</a></li>"; ?>
                            <?php echo "<li class='text-nopad'><p>not ".$row->user_firstname."?</p></li>"; ?>
                        	<li class="text-nopad"><a href="logout.php" data-toggle="modal"> &nbsp; logout</a></li>
                            <li class="text-nopad"><a href="client.php" data-toggle="modal"> &nbsp; Account info</a></li>
                            
                            <?php
							}
                            ?>
                            
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
                <li><a class="home" href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
                <li><a class="active" href="catalog.php">Shop</a></li>
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
=======
<html lang="en"><head><meta charset="utf-8"><title>BatchPad Home - Justin Duncan</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content=""><meta name="author" content="Justin Duncan"><link href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet" type="text/css"><link href="css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="css/font-awesome.min.css"><link href="css/style.css" rel="stylesheet"><link href="css/prettyPhoto.css" rel="stylesheet" media="screen"><link href="css/portfolio.css" rel="stylesheet"><link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css"><link rel="stylesheet" href="layerslider/css/layersliderstyle.css" type="text/css"> <!--Alicia will be making a separate header and footer php file--><!-- HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]>      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    <![endif]--><?php$con = mysql_connect("sulley.cah.ucf.edu","USERNAME","PASSWORD");if (!$con) {die("Can not Connect: " . mysql_error());}mysql_select_db("ju655443",$con);$sql = 'SELECT * FROM products WHERE featured = "yes"';$new = 'SELECT * FROM products WHERE new = "yes"';$myData = mysql_query($sql,$con);$myNew = mysql_query($new,$con);?></head><body><!-- Header Start --><header>  <div class="headerstrip">    <div class="container">      <a class="logo pull-left" href="home.php"><img title="BatchPad" alt="BatchPad" src="img/logo.png"></a>      <!-- Top Nav Start -->      <div class="pull-right">        <div class="navbar" id="topnav">          <div class="navbar-inner">          	<div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">    					<div class="modal-dialog">  						  <div class="modal-content">    							<div class="modal-header">      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>      							<h4 class="modal-title">Please Sign-in</h4>    							</div>    							<!-- contents of Sign-in modal -->    							<div class="modal-body">     								<div class="form-group">        							<label class="control-label" >Username<span class="red">*</span></label>        							<div class="controls">          								<input type="text" class=""  value="">        							</div>        						</div>      							<div class="form-group">        							<label class="control-label" >Password<span class="red">*</span></label>        							<div class="controls">          							<input type="text" class=""  value="">        							</div>      							</div>    							</div>    							<div class="modal-footer">      							<button type="button" class="btn btn-orange" data-dismiss="modal">Cancel</button>      							<button type="button" class="btn btn-primary">Sign-in</button>    							</div>  						  </div>  						<!-- /.modal-content -->   					  </div>  					<!-- /.modal-dialog -->   			    </div>  			    <!-- /.modal -->            <ul class="nav" >            	<li class="text-nopad text-center"><a href="register.php">Sign-up</a></li>                <li class="text-nopad"><p>or</p></li>            	<li class="text-nopad"><a href="#myModal" data-toggle="modal"> &nbsp; login</a></li>                <li class="dropdown hover carticon "> <a href="cart.php" class="dropdown-toggle" > <i class="icon-shopping-cart font18"></i> Shopping Cart <span class="label label-orange font14">2 item(s)</span> - $1,790.00 <b class="caret"></b></a>                <ul class="dropdown-menu topcartopen ">                  <li>                    <table>                      <tbody>                        <tr>                          <td class="image"><a href="product.php"><img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"></a></td>                          <td class="name"><a href="product.php">product goes here</a></td>                          <td class="quantity">x&nbsp;1</td>                          <td class="total">$589.50</td>                          <td class="remove"><i class="icon-remove"></i></td>                        </tr>                        <tr>                          <td class="image"><a href="product.php"><img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"></a></td>                          <td class="name"><a href="product.php">product goes here</a></td>                          <td class="quantity">x&nbsp;1</td>                          <td class="total">$589.50</td>                          <td class="remove"><i class="icon-remove "></i></td>                        </tr>                      </tbody>                    </table>                    <table>                      <tbody>                        <tr>                          <td class="textright"><b>Sub-Total:</b></td>                          <td class="textright">$1.7900.00</td>                        </tr>                        <tr>                          <td class="textright"><b>Tax (6.00%):</b></td>                          <td class="textright">$123.20</td>                        </tr>                        <tr>                          <td class="textright"><b>Total:</b></td>                          <td class="textright">$1,813.20</td>                        </tr>                      </tbody>                    </table>                    <div class="well pull-right buttonwrap"> <a class="btn btn-orange" href="cart.php">View Cart</a></div>                  </li>                </ul>              </li>            </ul>          </div>        </div>      </div>    <!-- Top Nav End -->    </div>  </div>  <div id="categorymenu">    <nav class="subnav">      <ul class="nav-pills categorymenu container">        <li><a class="active home" href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>        <li><a href="catalog.php">Shop</a></li>        <li><a href="about.php">about</a></li>        <li><a href="contact.php">Contact Us</a> </li>        <li class="pull-right">    	    <form action="search.php" method="get" class="form-search top-search">      	    <input type="text" class="input-small search-query" placeholder="Search Here…">      	      <button class="btn btn-orange btn-small tooltip-test" data-original-title="Search"><i class="icon-search icon-white"></i></button>          </form>        </li>      </ul>    </nav>  </div>   </header>
>>>>>>> parent of 550560d... pagination working
=======
<html lang="en"><head><meta charset="utf-8"><title>BatchPad Home - Justin Duncan</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content=""><meta name="author" content="Justin Duncan"><link href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet" type="text/css"><link href="css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="css/font-awesome.min.css"><link href="css/style.css" rel="stylesheet"><link href="css/prettyPhoto.css" rel="stylesheet" media="screen"><link href="css/portfolio.css" rel="stylesheet"><link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css"><link rel="stylesheet" href="layerslider/css/layersliderstyle.css" type="text/css"> <!--Alicia will be making a separate header and footer php file--><!-- HTML5 shim, for IE6-8 support of HTML5 elements --><!--[if lt IE 9]>      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    <![endif]--><?php$con = mysql_connect("sulley.cah.ucf.edu","USERNAME","PASSWORD");if (!$con) {die("Can not Connect: " . mysql_error());}mysql_select_db("ju655443",$con);$sql = 'SELECT * FROM products WHERE featured = "yes"';$new = 'SELECT * FROM products WHERE new = "yes"';$myData = mysql_query($sql,$con);$myNew = mysql_query($new,$con);?></head><body><!-- Header Start --><header>  <div class="headerstrip">    <div class="container">      <a class="logo pull-left" href="home.php"><img title="BatchPad" alt="BatchPad" src="img/logo.png"></a>      <!-- Top Nav Start -->      <div class="pull-right">        <div class="navbar" id="topnav">          <div class="navbar-inner">          	<div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">    					<div class="modal-dialog">  						  <div class="modal-content">    							<div class="modal-header">      							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>      							<h4 class="modal-title">Please Sign-in</h4>    							</div>    							<!-- contents of Sign-in modal -->    							<div class="modal-body">     								<div class="form-group">        							<label class="control-label" >Username<span class="red">*</span></label>        							<div class="controls">          								<input type="text" class=""  value="">        							</div>        						</div>      							<div class="form-group">        							<label class="control-label" >Password<span class="red">*</span></label>        							<div class="controls">          							<input type="text" class=""  value="">        							</div>      							</div>    							</div>    							<div class="modal-footer">      							<button type="button" class="btn btn-orange" data-dismiss="modal">Cancel</button>      							<button type="button" class="btn btn-primary">Sign-in</button>    							</div>  						  </div>  						<!-- /.modal-content -->   					  </div>  					<!-- /.modal-dialog -->   			    </div>  			    <!-- /.modal -->            <ul class="nav" >            	<li class="text-nopad text-center"><a href="register.php">Sign-up</a></li>                <li class="text-nopad"><p>or</p></li>            	<li class="text-nopad"><a href="#myModal" data-toggle="modal"> &nbsp; login</a></li>                <li class="dropdown hover carticon "> <a href="cart.php" class="dropdown-toggle" > <i class="icon-shopping-cart font18"></i> Shopping Cart <span class="label label-orange font14">2 item(s)</span> - $1,790.00 <b class="caret"></b></a>                <ul class="dropdown-menu topcartopen ">                  <li>                    <table>                      <tbody>                        <tr>                          <td class="image"><a href="product.php"><img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"></a></td>                          <td class="name"><a href="product.php">product goes here</a></td>                          <td class="quantity">x&nbsp;1</td>                          <td class="total">$589.50</td>                          <td class="remove"><i class="icon-remove"></i></td>                        </tr>                        <tr>                          <td class="image"><a href="product.php"><img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product"></a></td>                          <td class="name"><a href="product.php">product goes here</a></td>                          <td class="quantity">x&nbsp;1</td>                          <td class="total">$589.50</td>                          <td class="remove"><i class="icon-remove "></i></td>                        </tr>                      </tbody>                    </table>                    <table>                      <tbody>                        <tr>                          <td class="textright"><b>Sub-Total:</b></td>                          <td class="textright">$1.7900.00</td>                        </tr>                        <tr>                          <td class="textright"><b>Tax (6.00%):</b></td>                          <td class="textright">$123.20</td>                        </tr>                        <tr>                          <td class="textright"><b>Total:</b></td>                          <td class="textright">$1,813.20</td>                        </tr>                      </tbody>                    </table>                    <div class="well pull-right buttonwrap"> <a class="btn btn-orange" href="cart.php">View Cart</a></div>                  </li>                </ul>              </li>            </ul>          </div>        </div>      </div>    <!-- Top Nav End -->    </div>  </div>  <div id="categorymenu">    <nav class="subnav">      <ul class="nav-pills categorymenu container">        <li><a class="active home" href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>        <li><a href="catalog.php">Shop</a></li>        <li><a href="about.php">about</a></li>        <li><a href="contact.php">Contact Us</a> </li>        <li class="pull-right">    	    <form action="search.php" method="get" class="form-search top-search">      	    <input type="text" class="input-small search-query" placeholder="Search Here…">      	      <button class="btn btn-orange btn-small tooltip-test" data-original-title="Search"><i class="icon-search icon-white"></i></button>          </form>        </li>      </ul>    </nav>  </div>   </header>
>>>>>>> parent of 550560d... pagination working
