<?php //for part 3
// This file is the handle form that will process and validate input from the form
	function validateStr($str){
		$str = trim($str);
		$str = stripcslashes($str);
		$str = htmlspecialchars($str);

		return $str;
	}

	$errors = []; //empty array
    $username_pattern = "/[a-zA-Z]+\.[a-zA-Z]+[0-9]{2}$/";
    //format for the username is first.lastname00

	//Check if the user click the submit button
	if(isset($_POST['submit'])){ //when you click on submit button

        //this validates the string and removes malicious code
		$name = validateStr($_POST['username']);
        $validpw = validateStr($_POST['password']);

		if(empty($_POST['username'])){ //checking for empty username field
			$errors['username'] = "Missing Username"; //associative array
		} else if(!preg_match($username_pattern, $name )){
            $errors['username'] = "Incorrect format, format is firstname.lastname00";
        }

		if(empty($_POST['password'])){ //checking for empty username field
			$errors['password'] = "Missing Password"; //associative array
		} 

        //check for format in username. Used $name because the input is validated
        

		//redirect the user if there are no errors
		if(count($errors) == 0){
            echo"<p>Congratulations, you have signed up!</p>"; //success message
            
            // *** append the input into the array ***
            //check if the user is new (how?)

            $addtoarray = array("username" => $name, "password" => $validpw);
            

            $file = 'accounts.json'; //grab info from this guy
            $current = file_get_contents($file); //grab current accounts from file
            
            $all = json_decode($current, true); //put all accounts in anther array

            array_push($all, $addtoarray); // push new account into the array
            
            $all = json_encode($all);//array back to json

            file_put_contents($file, $all); //rewrite the file with new contents


			//header('Location: welcome.php'); //this is where you will go if info is validated
			exit(); //do not keep processing the page! Brings us to another page
		}
	}
	
?>