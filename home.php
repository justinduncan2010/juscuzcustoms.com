<?php
  include('header.php');
  include('db_connect.php');
?>

<!-- Header End -->
<div id="categorymenu">
        <nav class="subnav">
            <ul class="nav-pills categorymenu container">
                <li><a class="home active" href="home.php"><i class="icon-home icon-white font18"></i> <span> Home</span></a></li>
                <li><a href="catalog.php">Shop</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">Contact Us</a> </li>
                <?php
                if(isset($_SESSION['logged_in_user_access'])&&($_SESSION['logged_in_user_access'] == "admin")) {
                print "<li><a href='admin.php'>Admin</a> </li>";
                }
                ?>
                <li class="pull-right">
                    <form action="search.php" method="get" class="form-search top-search">
                        <input type="text" class="input-small search-query" placeholder="Search Here…">
                        <button class="btn btn-orange btn-small tooltip-test" data-original-title="Search"><i class="icon-search icon-white"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>   

<div id="maincontainer"> 
    <!-- Slider Start-->
    <section class="slider">
        <div id="layerslider-container-fw">
            <div id="layerslider3" style="width: 100%; height: 500px; margin: 0px auto; ">
                <div class="ls-layer" style="slidedirection: right; transition2d: 24,25,27,28; "> <img src="layerslider/gallery/banner3.jpg" class="ls-bg" alt="Slide background">
                    <h5 class="ls-s-1 text" style=" top:317px; left: 105px; slidedirection : fade; slideoutdirection : fade; durationout : 750; easingin : easeOutQuint; delayin : 300; scalein : .8; scaleout : .8; showuntil : 4000;"> Great Bachelor Pad furniture and Accessories </h5>
                </div>
                <div class="ls-layer" style="slidedirection: right; transition2d: 110,111,112,113; "> <img src="layerslider/gallery/banner2.jpg" class="ls-bg" alt="Slide background">
                    <h5 class="ls-s-1 text2" style=" top:47px; left: 105px; slidedirection : fade; slideoutdirection : fade; durationout : 750; easingin : easeOutQuint; delayin : 300; scalein : .8; scaleout : .8; showuntil : 4000;"> New Selections of Furniture Every Week </h5>
                </div>
                <div class="ls-layer" style="slidedirection: right; transition2d: 92,93,105; "> <img src="layerslider/gallery/banner1.jpg" class="ls-bg" alt="Slide background">
                    <h5 class="ls-s-1 text2" style=" top:47px; left: 105px; slidedirection : fade; slideoutdirection : fade; durationout : 750; easingin : easeOutQuint; delayin : 300; scalein : .8; scaleout : .8; showuntil : 4000;"> Check out our Bachelor Pad Outdoor Decorating Blog </h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider End-->
     
     <!-- Featured Product-->
    <section id="featured" class="row mt60">
        <div class="container">
            <ul class="thumbnails">
                <li class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3">
                    <h1 class="heading1"><span class="maintext orange"><i class="icon-star"></i> Featured Products</span></h1>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </li>
<?php
	
	$featured = 'SELECT * FROM products WHERE featured = "yes"';
	$myFeatured = $mysqli->query($featured);
	$view = 2;
	$zero = 0;
while(($row = $myFeatured->fetch_object())&&($zero<=$view)){
	$zero++;
	echo "<li class='col-lg-3 col-md-3 col-xs-12 col-sm-6 span3'> <a class='prdocutname' href='product.php?id=".$row->product_id."'>".$row->product_name."</a>";
	echo "<div class='thumbnail'><span class='sale tooltip-test'> <i class='icon-money font24'></i> <br>";
	echo "Sale</span> <a href='product.php?id=".$row->product_id."'><img alt='sale' width='300' height='222' src=".$row->image_url."></a>";
	echo "<div class='price'><div class='pricenew'>".$row->cost."</div><div class='priceold'>".$row->price."</div><div class='ratingstar'><div class='rw-ui-container' data-urid=".$row->product_id."></div></div></div>";
	echo "<a  class='btn btn-orange btn-small addtocartbutton'>Add to Cart</a> </div>";
	echo "</li>";
}
?>
            </ul>
        </div>
    </section>
    
    <!-- Latest Product-->
    <section id="latest" class="row mt40">
        <div class="container">
            <ul class="thumbnails">
                <li class="col-lg-3 col-md-3 col-xs-12 col-sm-6 span3">
                    <h1 class="heading1"><span class="maintext orange"><i class="icon-thumbs-up"></i> Latest Products</span></h1>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </li>
<?php
	$new = 'SELECT * FROM products WHERE new = "yes"';
	$myNew = $mysqli->query($new);
	$view = 2;
	$zero = 0;
while(($row = $myNew->fetch_object())&&($zero<=$view)){
    $zero++;
	echo "<li class='col-lg-3 col-md-3 col-xs-12 col-sm-6 span3'> <a class='prdocutname' href='product.php'>" .$row->product_name. "</a>";
	echo "<div class='thumbnail'><span class='new tooltip-test'> <i class='icon-calendar font24'></i> <br>";
	echo "New</span> <a href='product.php?id=".$row->product_id."'><img alt='sale' width='300' height='222' src=" . $row->image_url . "></a>";
	echo "<div class='price'><div class='pricenew'>" . $row->cost . "</div><div class='priceold'>" . $row->price . "</div><div class='ratingstar'><div class='rw-ui-container' data-urid=" .$row->product_id. "></div></div></div>";
	echo "<a  class='btn btn-orange btn-small addtocartbutton'>Add to Cart</a> </div>";
	echo "</li>";
}
?>
            </ul>
        </div>
    </section>
<div class="clearfix"></div>
<!-- /maincontainer --> 

<?php
  include('footer.php');
?>
