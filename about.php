<?php include("db_connect.php");
include("header.php");
$_SESSION['view'] = 12;
$_SESSION['sort'] = 'blank';                                       
?>
<div id="categorymenu">
        <nav class="subnav">
            <ul class="nav-pills categorymenu container">
                <li><a class="home" href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
                <li><a href="catalog.php">Shop</a></li>
                <li><a class="active" href="about.php">about</a></li>
                <li><a href="contact.php">Contact Us</a> </li>
                <?php
                if(isset($_SESSION['logged_in_user_access'])&&($_SESSION['logged_in_user_access'] == "admin")) {
        print "<li><a href='admin.php'>Admin</a> </li>";
        }
        ?>
                <li class="pull-right">
                    <form action="search.php" method="post" class="form-search top-search">
                        <input type="text" name="search" class="input-small search-query" placeholder="Search Here…">
                        <button class="btn btn-orange btn-small tooltip-test" data-original-title="Search"><i class="icon-search icon-white"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>   
    <!--Header End-->

<div id="maincontainer"> 
     <!--  breadcrumb --> 
     <div class="container">  
      <ul class="breadcrumb">
        <li>
          <a href="home.php">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">About Us</li>
      </ul>
       <h1 class="heading1"><span class="maintext"><i class="icon-shopping-cart"></i> About Us</span></h1>
    <!-- Section Start-->
    <section class="row" id="about">
   
    <ul class="aboutus row">
    	
        <li class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
		<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-group font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Who We Are </h2>
        Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. </div>
</div>
        </li>
        <li class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
		<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-time font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Our History</h2>
        Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. </div>
</div>
        </li>
        <li class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
		<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-upload font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Our Goal</h2>
        Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. </div>
</div>
        </li>
        
      </ul> 
       <ul class="aboutus row">
    	
        <li class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
		<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-thumbs-up font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2"> Satisfaction </h2>
        Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. </div>
</div>
        </li>
        <li class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
		<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-globe font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Worldwide Network</h2>
        Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. </div>
</div>
        </li>
        <li class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
		<div class="row">
		<div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"><div class="icons"><i class="icon-signal font72"></i></div></div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-11 span3">
        <h2 class="heading2">Our Growth </h2>
        Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum is simply dummy text of the printing and industry. Lorem has been the industry's standard dummy text ever since the 1500s."
" Lorem Ipsum is simply dummy text of the printing and industry. </div>
</div>
        </li>
      </ul> 
    </section>
    </div>
    <!-- Section End--> 
    
<!-- /maincontainer --> 
<footer id="footer">
    <section class="footersocial">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3 info">
                    <h2> <i class="icon-link"></i> SiteMap </h2>
                    <ul>
                        <li><a href="home.php">Home</a> </li>
                        <li><a href="client.php">My Account</a> </li>
                        <li><a href="catalog.php">Shop</a> </li>
                        <li><a href="contact.php">Contact Us</a> </li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="cart.php">My Cart</a> </li>
                        <li><a href="register.php">Sign-Up</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3 contact">
                    <h2> <i class="icon-phone-sign"></i> Contact Info </h2>
                    <ul>
                        <li class="location"> 404 Not found Rd.‎ Melbourne, Fl 32903</li>
                        <li class="phone">(800)555-7890 &nbsp; (877)555-7890</li>
                        <li class="mobile"> #Bachpad</li>
                        <li class="email"> sales@batchpad.com</li>
                    </ul>
                </div>
                <!-- Testimonial-->
                                <!-- Testimonial-->
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span3">
                    <div class="sidewidt">
                        <h2 class="heading2"><span><i class="icon-edit"></i> Testimonials</span></h2>
                        <div class="flexslider" id="testimonialsidebar">
                            <ul class="slides">
                                <li> " Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."<br>
                                    " Lorem Ipsum is simply dummy text of the printing and  industry. <br>
                                    <br>
                                    <span class="pull-left orange">By : Themeforest</span> </li>
                                <li> " It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker   of Lorem Ipsum."<br>
                                    " Lorem Ipsum is simply dummy text of the printing and  industry. <br>
                                    <br>
                                    <span class="pull-left orange">By : Envato</span> </li>
                                <li> " Lorem Ipsum is simply dummy text of the printing and  industry. Lorem  has been the industry's standard dummy text ever since the 1500s."<br>
                                    " Lorem Ipsum is simply dummy text of the printing and  industry. <br>
                                    <br>
                                    <span class="pull-left orange">By : Themeforest</span> </li>
                                <li> " It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker."<br>
                                    " Lorem Ipsum is simply dummy text of the printing and  industry. <br>
                                    <br>
                                    <span class="pull-left orange">By : Envato</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3 facebook">
                    <h2> <i class="icon-facebook-sign"></i> Facebook </h2>
                    <div class="seperator"></div>
                    <div class="seperator1"></div>
                    <div id="fb-root"></div>
                    <div class="fb-like-box" data-href="https://www.facebook.com/BachelorHaus" data-width="292" data-show-faces="true" data-colorscheme="dark" data-stream="false" data-show-border="false" data-header="false"  data-height="240"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="copyrightbottom">
        <div class="container">
            <div class="row">
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span5 col-lg-3 col-md-3 col-xs-12 col-sm-12 paymentsicons"></div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 textcenter"> This site is not official and is an assignment for a UCF Digital Media course - Designed by Justin Duncan </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 span5 col-lg-3 col-md-3 col-xs-12 col-sm-12 paymentsicons"> <img title="PayPal" alt="paypal" src="img/payment_paypal.png"> <img title="American Express" alt="american-express" src="img/payment_american.png"><img title="Maestro" alt="maestro" src="img/payment_maestro.png"> <img title="Discover" alt="discover" src="img/payment_discover.png"> </div>
            </div>
        </div>
    </section>
    <a id="gotop" href="#">Back to top</a>
</footer>
<!-- javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate.min.js"></script> 
<script type="text/javascript" src="js/jquery.easing.js"></script> 
<script src="js/respond.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script  src="js/jquery.prettyPhoto.js"></script> 
<script defer src="js/jquery.flexslider.js"></script> 
<script src="layerslider/js/greensock.js" type="text/javascript"></script> 
<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script> 
<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>  
<script  src="js/zoomsl-3.0.min.js"></script> <script  type="text/javascript" src="js/jquery.validate.js"></script> 
<script type="text/javascript"  src="js/jquery.carouFredSel-6.1.0-packed.js"></script> 
<script defer src="js/custom.js"></script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">(function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "259474",
            uid: "3b0bc03895785eed657c9e205359ca03",
            source: "website",
            options: {
                "advanced": {
                    "font": {
                        "hover": {
                            "color": "#B7D086"
                        },
                        "size": "12px",
                        "bold": true,
                        "color": "#B7D086"
                    }
                },
                "size": "tiny",
                "label": {
                    "background": "#427E53"
                },
                "style": "oxygen_green",
                "isDummy": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-69797602-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>