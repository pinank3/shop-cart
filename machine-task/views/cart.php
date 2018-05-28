<?php
	require_once 'header.php';
?>
<div class="container">
	<h2 class="text-center">Cart</h2>
	<?php
	// print_r($_COOKIE);
	if(isset($_COOKIE['cookie_product_id'])):
		$pro=$_COOKIE['cookie_product_id'];
		// echo $pro;
		$result=$obj->show_cart_record($pro);
		// pre($result);
		if(is_array($result)):
		foreach ($result as $val):
		?>
						<div class="col-sm-3">
							<div class="product-../assets/images-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="../assets/uploads/<?php echo $val['pro_path']; ?>" alt="" />
											<h2>
												<del><?php echo $val['pro_price'] ?></del>
												<?php echo ($val['pro_price'])-($val['pro_price']*$val['pro_discount']/100);?>
												
											</h2>
											<p><?php echo $val['pro_name'];  ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											<a href="#" for="<?php echo $val['pro_id']; ?>" class="btn btn-default delete-to-cart"><i class="fa fa-shopping-cart"></i>Delete</a>
										</div>
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
						endif;
						?>
</div>
<?php
	require_once 'footer.php';
?>