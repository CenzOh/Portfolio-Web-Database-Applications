<!Doctype html>
<html>
    <head>
        <title>Part C Assignment 2</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!-- ^^ Link the bootstrap CSS file to make it display correctly -->
    </head>

    <style>
        body{ background-color: lavender;}
        table{
            margin: 20px;
            font-family: arial;
            text-align: center;
            /* Define table properties here and declare the table inside php code not in html */
            border-style: solid;
            border-width:2px;
            border-color: pink;
            background-color: #fffdd0;
        }
        nav{ font-family: Helvetica; }
        /* body { padding-top: 65px; } */
        s{margin: 100px;}
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


    
  <div class="s">
    <!-- <table 
        align = "left"
        border = "5"
        cellpadding = "10"
        cellspacing = "0" 
    >  -->
        <!-- defining our table ^^ -->
    <?php
        echo "<table border='5' cellpadding = '10' cellspacing = '0'>";
        //th defines a table header
        //First row is the header saying | Number | Results |
        echo "<tr> <th>Number</th> <th>Results</th> </tr>"; //both headers in one row

        for($row = 1; $row <= 100; $row++){
            $result = "Even"; //our result row will be even by default because we will be getting the remainder. Also this will always be redefined
            if($row % 2 == 1) 
                $result = "Odd";
            echo "<tr> <td> $row </td> <td> $result </td> </tr>";
            // this prints our the row with left column of $row value and right side column with $result value either being even or odd
        }
    echo "</table>";
    ?>
    <!-- </table> -->
  </div>

    <div class="footer">
      <p>© Vincenzo Mezzio 2021</p>
    </div>
  </body>
</html>
