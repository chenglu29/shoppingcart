<?php
  //清除購物車資料
  setcookie("book_no_list", "");
  setcookie("book_name_list", "");
  setcookie("price_list", "");
  setcookie("quantity_list", "");	
	
  //導向 shopping_car.php 網頁
  header("location:shopping_car.php");	
?>