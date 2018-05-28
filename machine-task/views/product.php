<?php 
	require_once 'header.php';
	require_once 'sidebar.php';
?>
<!-- 
Body Section 
-->
			  <div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="../assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="../assets/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="../assets/img/shopping-cart-template.png" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="../assets/img/bootstrap-template.png" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

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
        

<!-- New Products -->

	<div class="well well-small">
	<h3>New Products </h3>
	<hr class="soften"/>
		<div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
				<div class="col-sm-3">
			  <div class="thumbnail">
			  	
				 
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<?php 
				$id=$_GET['id'];
				echo "$id";
					$result = $obj->show_category_wise($id);
					//pre($result);

					if(is_array($result)):
					 	foreach ($result as $val):
				?>
				<a href="product_details.html"><img src="../assets/uploads/<?php echo $val['pro_path'];?>" alt=""></a>

				<div class="caption cntr">
					<p><?php echo $val['pro_name'];?></p>
					<p><strong> <?php echo $val['pro_price'];?></strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			</div>
			  </div>
			</li>
			<?php 
			 	endforeach;
			 endif;
			?> 
		  </ul>
		</div>
	</div>
	<!--
	Featur>
ed Products
	-->
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