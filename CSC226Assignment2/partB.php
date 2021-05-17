<!Doctype html>
<html>
    <head>
        <title>Part B Assignment 2</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!-- ^^ Link the bootstrap CSS file to make it display correctly -->
    </head>

    <style>
        html{ 
            background: #3C3D3F; 
            /* padding: 10px; */
        }
        h1{
            color: white;
            background-color:#4A4549;
            border-radius: 50px;
            text-align: center;
        }
        h3{
            text-align: center;
            color: #EE2649;
        }
        b{ color: cyan; }
        li{ color: #B4F64E; }
        .fullCard{
            background-color: #272822;
            border-radius: 50px;
            padding: 20px;
            margin: 10px;
        }
        body { background-color: #3C3D3F; }
        nav{ font-family: Helvetica; }
        .footer{ padding: 10px; text-align: center; font-family: Helvetica; color: white;}


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
                  <a class="dropdown-item" href="/../~mezzio/CSC226Assignment4/part1.php">Intro to DB</a>
                  <a class="dropdown-item" href="/../~mezzio/CSC226Assignment4/part2.php">SQL Queries</a>
                  <a class="dropdown-item" href="/../~mezzio/CSC226Assignment4/part3.php">MySQL in PHP</a>

                </div>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Adding the script allowed the dropdown menu to work -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <div class="fullCard" style="font-family: Consolas">
            <h1>Introduction to PHP</h1>
            <h3>Presented by Vincenzo Mezzio</h3>
        
            <ul>
                <li><b>What does PHP stand for?</b> <br>&emsp;PHP stands for "Hypertext Preprocessor".</li>
                <li><b>What is PHP?</b><br>&emsp;PHP is an open source general purpose scripting language for web development. It can be utilized in HTML (Hypertext Markup Language).</li>
                <li><b>How do we start PHP code?</b><br>&emsp;Whether we are inside a .html file or a .php file, to start writing PHP code we must open the PHP tag: "< ?php". We write PHP code inside of this tag. To close the PHP tag we write "?>".  </li>
                <li><b>How do we declare variables in PHP?</b><br>&emsp;To declare a PHP variable, we must use the "$" prior to the name of the variable. <br>For instance: $my_var = 'Hello'; <br>&emsp;Our PHP variable "$my_var" has a string "Hello" inside of it.</li>
                <li><b>How do we print our variable or any form of output?</b><br> &emsp;To print the variable we use the keyword "echo".<br> For instance: echo $my_var."< br >";<br>&emsp;The point of using ."< br >" is to make anything that will output after my_var go onto the next line. </li>
            </ul>
        </div>
    </body>
      <div class="footer">
        <p>© Vincenzo Mezzio 2021</p>
      </div>
   
</html>