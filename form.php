<?php

include("connection.php")

    $password = $_POST['Password'];
	$firstName = $_POST['FirstName'];
	$lastName = $_POST['LastName'];
	$middleName =$_POST['MiddleName'];
	$Surffix =$_POST['Surffix'];
	$bdate = $_POST['birthDate'];
	$gender = $_POST['Gender'];
	$address = $_POST['Address'];
	$lschool = $_POST['Lschool'];
	$course = $_POST['course'];
	$email = $_POST['Email'];
	$number = $_POST['contactNo'];
	$gname = $_POST['Gname'];
	$glastname = $_POST['GLastname'];
	$gnumber = $_POST['Gnumber'];


		$stmt = $conn->prepare("insert into tbl_enrollment(Password,Firstname,Lastname,Middlename,Surffix, Birthdate, Gender, Address, Lschool, Course, Email, ContactNo, Gname, GLastname, Gnumber) values
		(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssssissi", $password, $firstName, $lastName,$middleName, $Surffix, $bdate, $gender, $address,$lschool, $course, $email,$number,$gname,$glastname, $gnumber );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>