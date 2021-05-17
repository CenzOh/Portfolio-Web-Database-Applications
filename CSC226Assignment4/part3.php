<DOCTYPE html> <!-- Works on Local Host -->
    <html>
         <head>
             <title>Part 2 Assignment 4</title>
         </head>

        <style>
            .section{
            background-color: #dbdbdb;
            border-radius: 50px;
            padding: 20px;
            margin: 10px;
            }

        </style>
        <?php include "../navbar.php"; ?> 

        <body> 
            <div class="section">
<?php

    include_once "dbconnect.inc.php";

    echo "1.	Write PHP code to connect with database and display all customers’ information whose has credit limit less than or equal to $7500 in table format.<br>";
    echo "HINT: Suppose that 7500 is from user input, so make sure you create a variable for the condition and use prepared statement for this question.<br>";
//
    //using capital letters for select and from so it can read the query properly
    //SOLUTION: table name needs to be in caps
    $query1 = "SELECT customer_name FROM CUSTOMER where credit_limit <= ?";
    // ? would be the user input and is not a hardcoded number. It is a placeholder
    $num = 7500;
    //prepare the query with $conn from the dbconnect.php file
    $stmt = $conn->prepare($query1);
    //now we bind variables with the datatype
    //$credit_limit should be replaced with what we need

    //when binding the param we need to specify what each type is. i - int, s - string, etc.
    $stmt->bind_param("i", $num);
    $stmt->execute();

    //getting the results
    $result = $stmt->get_result();
    //check the number of rows fetched from database
    // echo $result->num_rows; //in our case, it is 10
    // echo "<br>";

    if($result->num_rows === 0) exit('No Rows');
    while($row = $result->fetch_assoc()){//while there is one row, keep assigning in array $arr. Get data in associative array
        $arr[] = $row;
    }
//
    //print array into table
    echo "<table>";
    foreach($result as $key=>$row){
        echo "<tr>";
        foreach($row as $subkey=>$subrow){
            echo "<td>".$subrow."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
//    
?>
            </div>
        <div class="section">

<?php
    $query2 = $conn->query("SELECT DISTINCT part_num FROM PART"); //to display drop down menu, retrieving from db
?>
<form>
    <select name ="part_number"> <!-- Select used here for drop down menu -->
        <?php
            while($rows = $query2->fetch_assoc()){ //fetch data as associative array
                $part_num = $rows['part_num']; //put the rows inside a var called "part_num"
                echo "<option value='$part_num'>$part_num</option>"; //use option for drop down selection, display the values
            }
        ?>
    </select>
        <input type="submit" value="Submit">
</form>
<?php
    $part_num2 = $_GET['part_number'] ?? ""; // this grabs the data from submit button (can see it in the address bar). The ?? "" is a fallback incase part_number is empty (it is on initial load)
    if(!$part_num2){ //by default, get does not grab selected data
        $part_num2 = 'AT94';
    }
    $query3 = "SELECT * FROM PART WHERE part_num = ? "; //one row should print
    $stmt = $conn->prepare($query3);
    $stmt->bind_param("s",$part_num2);
    $stmt->execute();
    $result2 = $stmt->get_result()->fetch_assoc();
    // var_dump($result2);
    echo "<table style='width:100%'><tr>";
    foreach($result2 as $thename => $item) { //displaying the associative array data as a table 
        echo "<th>".$thename."</th>";
    }
    echo "</tr><tr>";
    foreach($result2 as $thename => $item) { //I was unable to do this in one foreach loop
        echo "<td>".$item."</td>";
    }
    echo "</tr></table>";

?>



        </div>
        </body>
        <?php include "../footer.php"; ?>
    </html>
</DOCTYPE>