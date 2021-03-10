<?php //for part 1
// This file is the handle form that will process and validate input from the form
	function validateStr($str){
		$str = trim($str);
		$str = stripcslashes($str);
		$str = htmlspecialchars($str);

		return $str;
	}


	//if(isset($_POST['submit'])){
	if($_SERVER["REQUEST_METHOD"] !== "POST") {
		//redirect the user to the destination
		header('Location: ../CSC226Assignment3/part1.php'); //brings us back to the form
		exit(); //terminate our program
	}

	$errors = []; //empty array
	//Check if the user click the submit button
	if(isset($_POST['submit'])){ //when you click on submit button
		if(empty($_POST['username'])){ //checking for empty username field
			$errors['username'] = "Missing Username"; //associative array
		} //two different cases, no else if

		$name = validateStr($_POST['username']);

		if(empty($_POST['password'])){ //checking for empty username field
			$errors['password'] = "Missing Password"; //associative array
		} 

		//redirect the user if there are no errors
		if(count($errors) == 0){
			header('Location: welcome.php'); //this is where you will go if info is validated
			exit(); //do not keep processing the page!
		}
	}
	
?>