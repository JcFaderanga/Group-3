<?php 

include("connections.php");

	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$surname =$_POST['surname'];
	$surffix =$_POST['surffix'];
	$birthdate = $_POST['birthdate'];
	$gender = $_POST['gender'];
	$contactnumber = $_POST['contactnumber'];
	$course = $_POST['course'];
	$adress = $_POST['adress'];
	$lastschool = $_POST['lastschool'];
	$Gfirstname = $_POST['Gfirstname'];
	$Gsurname = $_POST['Gsurname'];
	$Gnumber = $_POST['Gnumber'];
 

 if($firstname && $middlename && $surname && $surffix && $birthdate && $gender && $contactnumber && $course && $adress && $lastschool && $Gfirstname && $Gsurname && $Gnumber){
$query =mysqli_query($connections, "INSERT INTO tbl_enrollment(firstname,middlename,surname,surffix,birthdate,gender,contactnumber,course,adress,lastschool,Gfirstname,Gsurname,Gnumber) VALUES ('$firstname','$middlename','$surname','$surffix','$birthdate','$gender','$contactnumber','$course','$adress','$lastschool','$Gfirstname','$Gsurname','$Gnumber')");
}

?>