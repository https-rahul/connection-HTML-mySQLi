<!-- declare the variables and instert values taken by POST action on connected HTML page -->
<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection format: all the details must be single quoted
    $conn = new mysqli('<hostname>','<username>','<password>','<databaseName>');
    // checking for connection using above mentioned auth
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);  //error message display
	} else {
        //tablename does not need to be single quoted
		$stmt = $conn->prepare("insert into <tablename>(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)"); //? means values will be taken from variable
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully..."; //success message display
		$stmt->close();
		$conn->close(); //closing connection
	}
?>