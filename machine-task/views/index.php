<?php 
	require_once 'header.php';
	require_once 'sidebar.php';
?>
<div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="../assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
	</div>
	<div class="span9">
	<div class="well np">
		<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
			  <div class="item">
                <img style="width:100%" src="../assets/img/bootstrap_free-ecommerce.png" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Bootstrap shopping cart</h4>
                      <p><span>Very clean simple to use</span></p>
                </div>
              </div>
			  <div class="item">
                <img style="width:100%" src="../assets/img/carousel1.png" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Bootstrap Ecommerce template</h4>
                      <p><span>Highly Google seo friendly</span></p>
                </div>
              </div>
			  <div class="item active">
                <img style="width:100%" src="../assets/img/carousel3.png" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      <h4>Twitter Bootstrap cart</h4>
                      <p><span>Very easy to integrate and expand.</span></p>
                </div>
              </div>
              <div class="item">
                <img style="width:100%" src="../assets/img/bootstrap-templates.png" alt="bootstrap templates">
                <div class="carousel-caption">
                      <h4>Bootstrap templates integration</h4>
                      <p><span>Compitable to many more opensource cart</span></p>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>    
<div class="conatainer">
<div class="col-sm-9 padding-right">
	<div class="features_items"><!--features_items-->
		<h2 class="title text-center">Features Items</h2>
			<?php
			$result=$obj->show_products();
			// pre($result);
			if(is_array($result)):
			foreach ($result as $val):
			?>
			<div class="col-3">
			<div class="product-../assets/images-wrapper">
			<div class="productinfo text-center">
			<img src="../assets/uploads/<?php echo $val['pro_path']; ?>" alt="" />
			<h2>
			<del><?php echo $val['pro_price'] ?></del>
			<?php echo ($val['pro_price'])-($val['pro_price']*$val['pro_discount']/100);?>
												
			</h2>
			<p><?php echo $val['pro_name'];  ?></p>
			<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>			
			</div>
			<div class="choose">
			<ul class="nav nav-pills nav-justified">
			<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
			<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
			</ul>
			</div>
			</div>
			</div>
			<?php
			endforeach;
			endif;
			?>
		</div>
						
</div><!--features_items-->
</div>
<!-- 
Clients 
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div class="span2">
			<a href="#"><img alt="" src="../assets/img/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="../assets/img/2.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="../assets/img/3.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="../assets/img/4.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="../assets/img/5.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="../assets/img/6.png"></a>
		</div>
	</div>
</section>

<?php 

	require_once "footer.php";

?>