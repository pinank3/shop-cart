<?php
require_once "db_helper.php";

	final class db_project extends db_helper{
		
		function check_email_count($email){
			return self::select(
				"count(*) as cnt","users","us_email='$email'"
			);
		}
		function user_insert($name,$dob,$email,$password){
			return self::insert(
					"users",
					"us_name,us_dob,us_email,us_password",
					"'$name','$dob','$email','$password'"
					);			
				}
		function get_user_data($email){
					return $this->select(
					"*","users","us_email='$email'"
			);

		}
			function get_password_userwise($email){
					return $this->select(
					"us_password","users","us_email='$email'"
			);

		}
		function update_password($pass,$email){
			return $this->update("users","us_password='$pass'","us_email='$email'");
		}
		function show_category(){
			//echo "hello";
			return $this->select("ca_id,ca_name","categories","1");
		}
		function show_items(){

			return db_helper::select(
				"*","items","1 order by pro_id desc");
		}
		function show_category_wise($id){

			return db_helper::select(
				"*","items","pro_id='$id' order by pro_id desc");
		}
		function check_category_count($caname){
			return self::select(
				"count(*) as cnt","categories","ca_name='$caname'"
			);
		}
		function category_insert($name){
			return self::insert(
					"categories",
					"ca_name",
					"'$name'"
					);			
		}
		function show_products(){
			// echo "hello";
			return $this->select(
				"*","items","1 order by pro_id desc"
			);
		}
		function product_insert($rec){
			return parent::insert("items",
				"pro_name,pro_discount,pro_price,pro_caid,pro_path,pro_description","'$rec[0]','$rec[1]','$rec[2]','$rec[3]','$rec[4]','$rec[5]'");
		}
		function show_cart_record($pro){
			// echo $pro;
			return $this->select("*","items","pro_id order by pro_id desc");
		}
		}
	$obj = new  db_project();
?>