<html>

<head> 

<style>

h1 {

  color: green;

   font-size: 70px;

}

</style>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>

 <style>

 .button {

  background-color: gray; /* Green */

  border: none;

  color: white;

  padding: 16px 40px;

  text-align: center;

  text-decoration: none;

  display: inline-block;

  font-size: 100px;

   margin: 20px 2px;

   cursor: pointer;

   outline: none;

   border-radius: 15px;

   box-shadow: 0 9px #999;

}

.button:hover {background-color: #3e8e41}

.button:active {

  background-color: #3e8e41;

  box-shadow: 0 5px #666;

  transform: translateY(15px);

}

.wrapper {

    text-align: center;

}



.btnon {padding: 50px 202px;}

.btnoff {padding: 50px 178px;}

 </style>

 



<body>



<form action="" method="POST">



<div class="wrapper">

<h1>Cudosheep</h1>

<button class="button btnon" id="ba" type="submit" name = "ON" >ON</button><br>	

<button class="button btnoff" id="bb" type="submit" name = "OFF" >OFF</button>

</div>

<div id="ab"></div>

</body>

	

</html>


<?php 

// function adm($coco=0){
// if($coco==1 || $coco=="1" || $coco=='1'){

$server 	= "localhost";	// Change this to correspond with your database port

$username 	= "id";			// Change if use webhost online

$password 	= "1234";

$DB 		= "nof";				// database name





$update = new mysqli($server, $username, $password, $DB);	// Check database connection

			if ($update->connect_error) {

				die("Connection failed: " . $update->connect_error);
					echo "Connection failed: ";
			} 

			

			

if(isset($_POST['ON']))			// If press ON

{	

			

			$sql = "UPDATE status SET valor = 1";	// Update present status to database

			// If don't put this If , we can't change the value in database

			if ($update->query($sql) === TRUE) {	// Because it's been a long time , so i forgot

				//$_GET[] = -4;						// why i have to put this line but it still run when it's commented

			} 

}



if(isset($_POST['OFF']))		// If press OFF

{					

					

			$sql = "UPDATE status SET valor = 0";	// Update present status to database

			// Echo "0" , equivalent with send data to App to toast OFF

			if ($update->query($sql) === TRUE) {	// Because it's been a long time , so i forgot

				//$_GET[] = -5;						// why i have to put this line but it still run when it's commented

			} 

	

	

}			

// }else{echo "no tienes permiso";}





// }	

?>


<!-- <script>
var p1 = "success";
</script>

?php
echo "<script>document.writeln(p1);</script>";
?> -->

<script>
	var ok = false;
var ad = localStorage.getItem("ad");

if(ad == "permiso"){
	// ok = "a";
// var d = 1;

// var ?php $b?> = 1;



// -
	

}else{
	ok = "no";

document.getElementById("ab").innerHTML = "<h1>no tienes permiso</h1>";

document.getElementById("ba").style.display = "none";

document.getElementById("bb").style.display = "none";



}

console.log(ok);

</script>
<!-- 
?php 

// $lk = json_encode("<script>document.write(d);</script>");

// $c = "<script>document.write(d);</script>";
$c = $b;

adm($c);

echo $c;

?> -->


<!-- ?php

// $b = json_encode("<script>document.write(ok);</script>");

// $c = json_decode($b);

$c = "<script>document.write(ok);</script>";

if( $c == "a" ){

	echo "aceptado ";
}
else{
	echo "denegado " ;
}



?>
 -->




<?php



$server 	= "localhost";	// Change this to correspond with your database port

$username 	= "id";			// Change if use webhost online

$password 	= "1234";

$DB 		= "nof";	


$conn = new mysqli($server, $username, $password,$DB);		// Check database connection

	if ($conn->connect_error) 

	{

		//die("Connection failed: " . $conn->connect_error);

	} 

	

	$query ="SELECT * from status";					// Select all data in table "status"

	$result = $conn->query($query);

	

		while($row = $result->fetch_row()) 

		{

			echo $row[0];					// Echo data , equivalent with send data to esp

		}



		
		// $a = "Ola K aCe";		

		


?>


<!-- <script>

var datos = '?php echo json_encode($a); ?>';

var nombres = JSON.parse(datos);

document.write(nombres);

</script> -->
