<?php //for part 3
// This file is the handle form that will process and validate input from the form
// "sanitizing the inputs"
    function validateStr($str){
		$str = trim($str);
		$str = stripcslashes($str);
		$str = htmlspecialchars($str);
		return $str;
	}

    $errors = []; //empty array

    //Check if the user click the submit button
    //if(isset($_POST['submit'])){ //when you click on submit button
    if(isset($_POST["username"]) && isset($_POST["password"])){ //setting user and pw
        if(isset($_POST['submit'])){

            //this validates the string and removes malicious code
            $name = validateStr($_POST['username']);
            $validpw = validateStr($_POST['password']);

            //check if the user exists
            $login = array("username" => $name, "password" => $validpw);

            $file = 'accounts.json'; //grab info from this guy
            $current = file_get_contents($file); //grab current accounts from file

            $obj = json_decode($current, true); //put all accounts in anther array to compare with login

            if(in_array($login, $obj)){ //check if input is in the decoded json str
                //login is the input and obj is the whole array
                //echo"Hello there!";
                header('Location: welcome.php?username='.$name);  //this is where you will go if info is validated
                //the ?username passes the username to the welcome page
            } else {
                $errors['username'] = "Username and / or password is incorrect";
            }
        }
    }

?>