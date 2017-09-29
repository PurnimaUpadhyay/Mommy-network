<?php 



function Redirect($url, $permanent = false)

{

    header('location: ' . $url, true, $permanent ? 301 : 302);



    exit();

}



if (isset($_GET['id'])) {



	



	// $mysqli = new mysqli('localhost', 'vikrant1989', 'admin@123','momi1');
	$mysqli = new mysqli('localhost', 'momi2', 'admin@123','momi2');

	



	$query_string = "DELETE FROM `subscribe` WHERE `id` = ".$_GET['id'];



	



if ($mysqli->query($query_string) === TRUE) {

	   echo "Record Delete successfully";



	  Redirect('subscribe.php', false);

	}else {

		echo "not deleted";

	}

			



}



 ?>