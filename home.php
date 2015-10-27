<?php
  include('header.php');
  include('db_connect.php');
?>

<!-- Header End -->

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
	echo "<li class='col-lg-3 col-md-3 col-xs-12 col-sm-6 span3'> <a class='prdocutname' href='product.php'>".$row->product_name."</a>";
	echo "<div class='thumbnail'><span class='sale tooltip-test'> <i class='icon-gift font24'></i> <br>";
	echo "Sale</span> <a href='#'><img alt='sale' width='300' height='222' src=".$row->image_url."></a>";
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
while($row = $myNew->fetch_object()){
	echo "<li class='col-lg-3 col-md-3 col-xs-12 col-sm-6 span3'> <a class='prdocutname' href='product.php'>" .$row->product_name. "</a>";
	echo "<div class='thumbnail'><span class='sale tooltip-test'> <i class='icon-gift font24'></i> <br>";
	echo "Sale</span> <a href='#'><img alt='sale' width='300' height='222' src=" . $row->image_url . "></a>";
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
</div>
