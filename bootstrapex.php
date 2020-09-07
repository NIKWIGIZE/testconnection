<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Slick -->
    <link href="slick/slick/slick.css" rel="stylesheet">
	  <link href="slick/slick/slick-theme.css" rel="stylesheet">
	   <!-- Jqscript.net -->
	   <link href="zoom-image/css/jquery.jqZoom.css" rel="stylesheet">
	    <!-- JQUI-->
	   <link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.css">
<link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
<link type="text/css" rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
	  <style></style>
  </head>
  <body>
  <br>
 
 <div class="container">
 
<h1 class="text-danger">Hello World!</h1>
 
 <?php 
 //connect to heroku database i created called bigrwanda-database
 
 $hostname="us-cdbr-east-02.cleardb.com";
 $username="b2ffb9bae31362";
 $pass="83b1c0c2 ";
 $dbname="heroku_173a3af4752f299";
 $conn=new mysqli($hostname,$username,$pass,$dbname,3306);
 if($conn->connect_error){
	 die($conn->connect_error);
 }
 
 $query=$conn->prepare("SELECT*FROM user_account")or die($conn->error);
 $query->execute();
 
 //bind result
 
 $result=$query->get_result();
 
 while($row=$result->fetch_assoc()){
	 
	 echo $row['name']."<br>";
	 echo $row['email']."<br>";
	 echo $row['phone']."<br>";
	 echo $row['password']."<br>";
	 
 }
 ?>
 </div>
 
    <script src="jquery-3.4.1.min .js"></script>
    <!-- bootstrap-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- Slick -->
	 <script src="slick/slick/slick.js"></script>
	 <!-- jqscript.net -->
	 	 <script src="zoom-image/js/jquery.jqZoom.js"></script>
		 <!-- Sticky -->
		  <script src="sticky/jquery.sticky.js"></script>
		  <!--JQUI-- -->
		  <script src="jqueryui/jquery-ui.js"></script>
	
	 <script>
 $(document).ready(function(){
	
	$("#sendGift").click(function(){
	var checked=$("#sendGift").is(":checked");
	
	if( checked==true){
   	$(this).each(function(){
		localStorage.setItem($(this).prop("checked"));
	})
	}	
})









	
 })
 </script>
  </body>
</html>