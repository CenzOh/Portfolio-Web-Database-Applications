<?php //form action redirects to the actual form. Include the handle form here
    // functions include and require used to include html and php files in a php file

    //Sign up form

     include '../CSC226Assignment3/handleSignUpForm.inc.php';
?>

<!DOCTYPE html> <!-- php form -->
  <html>

    <head>
        <title>Part 3 Assignment 3</title>
        
    </head>

    <style>
       .container{
           padding: 10px;
       }
       label {
           width: 210px;
           display: inline-block;
           /* makes text boxes same size */
       }
    </style>

    <?php include "../navbar.php"; ?> 
    
    <body>
        <div class="container">
        <form action="../CSC226Assignment3/part3.php" method="POST"> <!--Using HTTP method POST -->
            <p>
            <div class="title">
            <p> Signup Form
            </div>
            <p><!-- handle form processes the data -->
            <label>Username:
				<input type="text" name="username"
				value="<?php echo (isset($_POST['username'])) ? $_POST['username'] : '' ?>"> <!-- saves the username -->
			    <small>
				    <?php echo (isset($errors['username'])) ? $errors['username'] : ''; ?> <!-- prints out the error -->
			    </small>
			</label>
            <br>
<!-- check for type for password -->
            <label>Password:    
				<input type="password" name="password"
				>
                <!-- value="<?php echo (isset($_POST['password'])) ? $_POST['password'] : '' ?>" --> <!-- do not save the password!!!-->
			<small>
				<?php echo (isset($errors['password'])) ? $errors['password'] : ''; ?>
			</small>
			</label>

            <p>
			    <input type="submit" name="submit" value="Submit Information">
		    </p> <!--^^name = submit connects to if(isset($_POST['submit'])) -->

        </form>
        </div>
    </body>

    <?php include "../footer.php"; ?>

</html>