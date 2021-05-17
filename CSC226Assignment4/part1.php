<!DOCTYPE html> <!-- php form -->
  <html>

    <head>
        <title>Part 1 Assignment 4</title>
        
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
    
        h1{
            color: white;
            background-color:#dedede;
            border-radius: 50px;
            text-align: center;
        }
        h3{
            text-align: center;
            /* color: #b5b5b5; */
            background-color: #b5b5b5;
            border-radius: 50px;
        }
        b{ color: white; }
        li{ color: #a3fa9d; }
        .fullCard{
            background-color: #000000;
            border-radius: 50px;
            padding: 20px;
            margin: 10px;
        }
        
        nav{ font-family: Helvetica; }
        .footer{ padding: 10px; text-align: center; font-family: Helvetica; color: black;}


    </style>

    <?php include "../navbar.php"; ?> 
    
    <body>

    <div class="fullCard" style="font-family: Courier">
            <h1>Introduction to Database</h1>
            <h3>Presented by Vincenzo Mezzio</h3>
        
            <ul>
                <li><b>What is a database and why do we need to implement it in our website / system?</b> <br>&emsp;A database is a collection of information / data stored in an accessible structure to retrieve said information. We need this system to save information such as a user's account or a list of items in a cart.</li>
                <li><b>What is the advantage of using a relational database management system?</b><br>&emsp;Relational database systems are used to join tables together which will help us understand the relationship between the tables or between the data (which columns are referenced. We can also use different functions to group, count, or combine these queries in the SQL language.</li>
                <li><b>List the different types of relations in a database.</b><br>&emsp;There are three different relationships; one-to-one, one-to-many, and many-to-many. Examples: <br>One-to-one; given an employee, they would be managing one project (at a time). <br>One-to-many: Given a County, it can have one or many cities located in it. <br>Many-to-many: Given a driver, they can drive many cars. Also, many cars can be driven by many drivers.
                <li><b>Explain the difference between key, primary key and foreign key.</b><br>&emsp;Primary Key: Guarantees a certain column is unique in value. One primary key is allowed in a table and can not contian NULL values. <br>Foreign Key: Provides a link between data in two tables, can have many foreign keys and can contain duplicate values.
            </ul>
        </div>

    </body>

    <?php include "../footer.php"; ?>
</html>
