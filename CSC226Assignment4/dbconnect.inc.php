<?php //for security concerns, include the file OUTSIDE public folder (outside htdocs for localhost)

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try{
        //define constants. Using constants connects successfully for me
        define("DOMAIN", "localhost");
        define("USERNAME", "root");
        define("PWD", "");
        define("DATABASE", "PREMIERE");

        $conn = new mysqli(DOMAIN, USERNAME, PWD, DATABASE);
        echo "&emsp;"; //success!
        //may be a conflict with utf8 which is up to 4 bytes on the website and utf8, about 2-3 bytes in the database
        $conn->set_charset("utf8mb4");

    } catch(Exception $e) {
        error_log($e->getMessage());
        exit('Error connecting to database'); //what the user will see
    }

?>