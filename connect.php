<?php 	
		$server="localhost";
		$user="root";
		$password="";
		$database="test";

		$connect=mysqli_connect($server, $user, $password, $database);
		if (!$connect) {
			die(mysqli_error($connect));
		}
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$ID = $_POST['ID'];
		$Age = $_POST['Age'];
		$Email = $_POST['Email'];

		$stmt = $connect->prepare("INSERT INTO registration (FirstName, LastName, ID, Age, Email) 
            VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiis", $FirstName, $LastName, $ID, $Age, $Email);
    $stmt->execute();
    //echo "Registration successful";

    //session
    session_start();
    $_SESSION['Email']=$Email;
    header("location:home.php");
    
    $stmt->close();
    $connect->close();
 ?> 