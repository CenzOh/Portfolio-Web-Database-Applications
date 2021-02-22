<!doctype html>
<!-- MAKE IT LIKE YOUR RESUME -->
<html>
    <head>
        <title>Vincenzo Mezzio Portfolio</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!-- ^^ Link the bootstrap CSS file to make it display correctly -->
    </head>

    <style>

    .email{
      color: blue;
      margin-bottom: 2px;
    }

    /* GIVE SOME ELEMENTS A FLOAT PROPERTY*/
    /* USE HOVER FCN AND TRANSFORM TO MAKE TEXT BIGGER */
    /* USE REPEATING-LINEAR-GRADIENT FCN AND SKEW FCN */
    /* USE CSS KEYFRAMES FOR AN ANIMATION */
    /* USE FLEX BOXES */

    .fullCard{
      border: 2px solid #ccc;
      /* makes the border */
      border-radius: 10px;
      /* rounds the edges */
      padding: 10px;
      /* pushes text in closer */
      margin: 15px 10px;
      /* adds padding to the bottom and right side of box */
      box-shadow:0 10px 20px rgba(0,0,0,0.19), 0 8px 8px rgba(0,0,0,0.23);
      /* gives drop shaodw */
    }

    h1{
      margin-bottom: 2px;
      background-color: rgba(60, 60, 60, 0.1);
      /* TODO: fix this */
      border-radius: 25px;
    }
    h2{ margin-bottom: 1px; }
    nav{ font-family: Helvetica; }
    /* body { padding-top: 65px; } */
    .footer{ padding: 10px; text-align: center; font-family: Helvetica; }

    </style>

      <body>

<!-- Nav bar -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark"> <!-- Dark theme -->
          <a class="navbar-brand" href="/../vincenzoMezzioPortfolio.php">Vincenzo Mezzio</a> <!-- Left most side of navbar -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/../vincenzoMezzioPortfolio.php">Home <span class="sr-only">(current)</span></a>
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
                  <a class="dropdown-item" href="/../CSC226Assignment2/partB.php">Assignment 2 Part B</a>
                  <a class="dropdown-item" href="/../CSC226Assignment2/partC.php">Assignment 2 Part C</a>
                  <a class="dropdown-item" href="/../CSC226Assignment2/partD.php">Assignment 2 Part D</a>
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

<!-- header -->
        <div class="fullCard" style="font-family: Garamond">
        <div style="text-align: center">
            <h1>Hello, my name is Vincenzo Mezzio</h1>

            <a href="https://github.com/CenzOh">My github</a>
         
            <p class="email">vincenzo.mezzio@cix.csi.cuny.edu</p>
          </div>
          <hr> 
          <!-- hr adds a horizonatl line -->
<!-- first para -->

            <h2>Education:</h2>
            <hr>
            <h3>The City University of New York, College of Staten Island</h3>
            <ul>
                <li>The Verrazano School: a 4-year selective undergraduate honors program</li>
                <li>Bachelor of Science, Information Systems and Informatics, May 2022</li>
              </ul>
<!-- second para -->
            <h2>Technical Skills:</h2>
            <hr>
              <ul>
                <li> C++, C#, Unity, Java</li>
                <li>Proficient in Microsoft Word, PowerPoint, Outlook, Adobe Acrobat, and Paint.net </li>
                <li>Basic knowledge of Microsoft Excel, Eclipse, and Visual Studio</li>
              </ul>
<!-- third para -->
              <h2>Work Experience:</h2>
              <hr>
              <h3>Richmond County Day Camp, Staten Island, New York</h3>

              <p><b>Camp Counselor</b>	 (07/19 – 08/19 and 07/20 – 08/20)</p>
              <ul>

                <li>Accountable for the care of a group of six to seven-year old campers, ensure safety and assist in fun activities</li>
                <li>Oversaw campers during meals and instructed them in daily routines and cleanup tasks</li>
                <li>Assisted with morning camp opening and provided each counselor their daily schedule</li>
                <li>Supervised with early morning drop off and afternoon pick-up of all campers</li>
              </ul>
<!--fourth para  -->
              <h2>Leadership and Volunteer Activities:</h2>
              <hr>
              <ul>
                <li>New York City Parks Stewardship, trained in installing deer guards</li>
                <li>Member of Computer Science Club, College of Staten Island (02/19 – Present) </li>
                <li>Member of Video Game Club, College of Staten Island (02/19 – Present)</li>
              </ul>
<!-- fifth para -->
              <h2>Honors and Awards:</h2>
              <hr>
              <ul>
                <li>Phillip Schain Scholarship (08/19)</li>
                <li>Vishwa Hindu Parishad of America Scholarship (08/19)</li>
                <li>Anthony Perriolo Memorial Edmund Scholarship (08/18)</li>
                <li>Dr. Mario J. Merlino Scholarship (08/18)</li>
                <li>John and Philomena Merlino Scholarship (08/18)</li>
                <li>National Society of Leadership and Success (08/19)</li>
                <li>National Society of Collegiate Scholars (03/19)</li>
                <li>Emerging Leaders Program (08/20)</li>
              </ul>
<!-- sixth para -->
              <h2>Interests/Activities:</h2>
              <hr>
              <ul>
                <li>Classical Guitar (07/19 – Present)</li>
                <li>Acoustic Guitar (05/18 – Present) </li>
                <li>Electric Guitar (12/16 – Present)</li>
                <li>Computer Art: (09/15 – Present)</li>
                <li>Fine Arts: (09/08) – (06/18)</li>
              </ul>

          </div>
        </body>
        <!-- footer -->
        <div class="footer">
          <p>© Vincenzo Mezzio 2021</p>
        </div>
</html> 


    