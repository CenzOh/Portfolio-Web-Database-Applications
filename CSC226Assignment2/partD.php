<!Doctype html>
<html>
    <head>
        <title>Part D Assignment 2</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>

    <style>
        body{ background-color: #fffdd0;}
        table, th, td {
            width: 40%;
            margin: 10px;
            text-align: center;
            font-family: Bahnschrift;
            border-style: solid;
            border-width:2px;
            border-color: purple;
            background-color: pink;
        }
        .array, .arsort, .krsort, .userpass, .total{ 
            padding: 10px;
            border-radius: 20px;
            /* margin-bottom: 340px; */
            font-family: Helvetica;
/* I wanted to display the data in an html table */
        }
        /* body { padding-top: 65px; } */
        nav{ font-family: Helvetica; }
        .footer{ padding: 10px; text-align: center; font-family: Helvetica; }
    </style>

    <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark"> <!-- Dark theme -->
          <a class="navbar-brand" href="/../~mezzio/vincenzoMezzioPortfolio.php">Vincenzo Mezzio</a> <!-- Left most side of navbar -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/../~mezzio/vincenzoMezzioPortfolio.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <!-- The current ^^ keeps "Home" highlighted-->
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/CenzOh" target="_blank">GitHub</a> <!-- Target=_blank opens the link in a new tab -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.linkedin.com/in/vincenzomezzio/" target="_blank">LinkedIn</a> 
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink-4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Assignments
                </a>
                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                  <a class="dropdown-item" href="/../~mezzio/CSC226Assignment2/partB.php">Intro to PHP</a>
                  <a class="dropdown-item" href="/../~mezzio/CSC226Assignment2/partC.php">PHP Basic Loop</a>
                  <a class="dropdown-item" href="/../~mezzio/CSC226Assignment2/partD.php">PHP Basic Array</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/../~mezzio/CSC226Assignment3/part1.php">Simple Form</a>
                  <a class="dropdown-item" href="/../~mezzio/CSC226Assignment3/part2.php">Log-in Form</a>
                  <a class="dropdown-item" href="/../~mezzio/CSC226Assignment3/part3.php">Signup Form</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Coming Soon!</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Adding the script allowed the dropdown menu to work -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

    <div class="array"> 

        <!-- <table 
            align = "left"
            border = "5"
            cellpadding = "10"
            cellspacing = "0" 
        >  -->

            <?php
                echo "<table border='5' cellpadding = '10' cellspacing = '0'>";
                echo "<tr> <th>Name</th> <th>Calories</th> </tr>"; //using a similar table to the one in part c
                $fruits = array( //outer array, associative array
                    array("name" => "Banana", "calories" => 105),
                    array("name" => "Strawberry", "calories" => 4),
                    array("name" => "Grape", "calories" => 62),
                    array("name" => "Apple", "calories" => 95),
                    array("name" => "Orange", "calories" => 45)
                );
                // var_dump($fruits);

                // for each to display the array
                foreach($fruits as $fruit) { //just call name and calories. Fruit is an associative array
                    echo "<tr> <td> $fruit[name] </td> <td> $fruit[calories] </td> </tr>"; //using quotes in name or calories d/n work
                }
                echo"<br></table>";

            ?>
        <!-- </table> -->

    </div>

    <div class="arsort">

        <!-- <table
            align = "left"
            border = "10"
            cellpadding = "12"
            cellspacing = "1"

        > -->

            <?php //making a new php so we can have two seperate tables

                $cp_fruits = $fruits; //this is a copy of the array
                arsort($cp_fruits);
                // var_dump($cp_fruits);
                echo"<table border='5' cellpadding = '10' cellspacing = '0'>";
                echo "<b>arsrot()</b> is a function that sorts the array from bottom to top according to the value. In our case, from Z to A. This function is also able to keep the associated indicies together. For instance, Banana and 105 will (together) go from index 1 to index 5. Note that 105 is the largest number in the array but it will stay conjoined to Banana's position.<br>";
                
                // Display the array using for each()
                echo "<tr> <th>Name</th> <th>Calories</th> </tr>";
                foreach($cp_fruits as $cp_fruit) {
                    echo "<tr> <td> $cp_fruit[name] </td> <td> $cp_fruit[calories] </td></tr>";
                }
                echo"<br></table>";

            ?>
        <!-- </table> -->

    </div>

    <div class="krsort">

        <!-- <table
            align = "left"
            border = "11"
            cellpadding = "14"
            cellspacing = "2"
        > -->
            <?php //sort the array in descending order using the key. krsort
                $cp_fruits2 = $fruits;
                krsort($cp_fruits2);
                //var_dump($cp_fruits2);            

                echo"<table border='5' cellpadding = '10' cellspacing = '0'>";
                echo "<b>krsort()</b> is a function that sorts the array from bottom to top according to the key. For instance, in the original fruits array, Orange is the last key in the array, krsort will reverse the order making Orange the first key in the new array. krsort() is also able to keep the associated indicies together. In this case, when Orange becomes the first index, it's associated variable, calories = 45, will join Orange as the top index.<br>";

                //display the array once more using foreach
                echo "<tr> <th>Name</th> <th>Calories</th> </tr>";
                foreach($cp_fruits2 as $cp_fruit2) {
                    echo "<tr><td> $cp_fruit2[name] </td><td> $cp_fruit2[calories] </td></tr>";
                }
                echo"<br></table>";

            ?>
        <!-- </table> -->
    </div>

    <div class="total">
        <?php
            $totalcal = 0; //traverse through the array, calc total calories
            foreach($fruits as $cp_fruit3) {
                $totalcal += " $cp_fruit3[calories] " ; //grabs each individual calorie and adds it to the total counter
            }
            echo"<br>";
            echo "The total number of calories of the combined fruits is: <b>".$totalcal."</b> calories."; //displaying the total calories
            echo"<br>";
        ?>
      
    </div>

    <div class="userpass">
    <!-- <table
            align = "left"
            border = "15"
            cellpadding = "20"
            cellspacing = "5"
        > -->
        <?php
            $users = array(
                1 => array("user1" => "password1"),
                2 => array("user2" => "password2"),
                "3" => array("user3" => "password3"),
                array("user4" => "password4"),
            );
            echo "The structure of the users array is a multidimensional array, inside points to another associative array. Each value is an array initself as a linear array. Inside the array, the left side of the => us the key, while the right side of the => is the value. We seperate each element with a comma. The indexes of the array are the keys.";

            //display this new array using foreach
            echo"<table border='5' cellpadding = '10' cellspacing = '0'>";
            echo "<tr> <th>Username</th> <th>Password</th> </tr>";
            foreach($users as $key => $value) {
                echo "<tr>"; //start of the table row
                foreach($value as $theusername => $thepassword) {
                    echo "<td>".$theusername."</td><td>".$thepassword."</td>";
                } // theusername is the inner key and thepassword is the inner value
                echo"</tr>"; //end of row
            }
            echo"<br></table>";


        ?>
        <!-- </table> -->
    </div>
        <div class="footer">
          <p>© Vincenzo Mezzio 2021</p>
        </div>
  

</html>
