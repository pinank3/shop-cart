<?php
	session_start();
	if(!isset($_SESSION['project_name'])){
		header("location:index.php");
	}
	require_once "header.php";
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>ADD Product</h2>
						<form id="product_form">
							<input type="text" name="pro_name" placeholder="mens wear" /><br>
							<input type="text" name="pro_price" placeholder="2000" /><br>
							<input type="text" name="pro_discount" placeholder="20 in %" /><br>	
							<select name ="pro_caid"><br>
								<option value="">Please Select Category</option>
								<?php
								$res=$obj->show_category();
								pre($res);
								if(is_array($res)){
									foreach ($res as $key => $val) {
										$id =$val['ca_id'];
										echo "<option value='$id'>".$val['ca_name']."</option>";
									}
								}
								?>
							</select><br>
							<input type="file" name="pro_path"><br>
							<input type="text_area" name="pro_description" placeholder="add description"><br>
							<button type="button" class="btn btn-default btn-product">Add product</button>
						</form>
						<div class="msg_product"></div>
					</div><!--/login form-->
				</div>
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php
	require_once "footer.php";
?>