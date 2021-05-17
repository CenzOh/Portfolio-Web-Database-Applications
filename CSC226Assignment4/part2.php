<!-- 
    1.	List the names of customers with credit limits of $7500 or less.

    select customer_name from customer where credit_limit <= 7500;

+---------------------------+
| customer_name             |
+---------------------------+
| Al's Appliance and Sport  |
| Ferguson's                |
| The Everything Shop       |
| Lee's Sport and Appliance |
| Deerfield's Four Seasons  |
| All Season                |
+---------------------------+

    2.	List all the orders placed by all customers. The output should have customer name, order number and order date.

    select customer_name, order_num, order_date from orders o join customer c on c.customer_num = o.customer_num;

+----------------------------+-----------+------------+
| customer_name              | order_num | order_date |
+----------------------------+-----------+------------+
| Al's Appliance and Sport   | 21608     | 2007-10-20 |
| Ferguson's                 | 21610     | 2007-10-20 |
| The Everything Shop        | 21613     | 2007-10-21 |
| Brookings Direct           | 21614     | 2007-10-21 |
| Johnson's Department Store | 21617     | 2007-10-23 |
| Al's Appliance and Sport   | 21619     | 2007-10-23 |
| Johnson's Department Store | 21623     | 2007-10-23 |
+----------------------------+-----------+------------+

    3.	How many customers have balances which are less than their credit limits? Hint: Use Count() function

    select count(customer_name) as "balance_less_than_credit_limit" from customer where balance < credit_limit;

+--------------------------------+
| balance_less_than_credit_limit |
+--------------------------------+
|                              8 |
+--------------------------------+

    4.	Get representatives with their number of orders that they helped each customer. The output should have rep_num, rep_name, customer_name and the count.
    Hint: you should use GROUP BY to count based on the rep_num and customer_name. To concatenate the string to have Firstname Lastname use function CONCAT()

    select concat(first_name," ", last_name) as rep_name, rep.rep_num, customer_name, count(customer.rep_num) as num_orders_rep_helped_customer from rep inner join customer on rep.rep_num = customer.rep_num group by customer.rep_num, customer_name; 

+----------------+---------+----------------------------+--------------------------------+
| rep_name       | rep_num | customer_name              | num_orders_rep_helped_customer |
+----------------+---------+----------------------------+--------------------------------+
| Valerie Kaiser | 20      | Al's Appliance and Sport   |                              1 |
| Valerie Kaiser | 20      | All Season                 |                              1 |
| Valerie Kaiser | 20      | Kline's                    |                              1 |
| Richard Hull   | 35      | Brookings Direct           |                              1 |
| Richard Hull   | 35      | Deerfield's Four Seasons   |                              1 |
| Richard Hull   | 35      | Lee's Sport and Appliance  |                              1 |
| Richard Hull   | 35      | The Everything Shop        |                              1 |
| Juan Perez     | 65      | Bargains Galore            |                              1 |
| Juan Perez     | 65      | Ferguson's                 |                              1 |
| Juan Perez     | 65      | Johnson's Department Store |                              1 |
+----------------+---------+----------------------------+--------------------------------+

 -->

 <!-- I just did the queries inside command prompt and will paste the output and query here. I am aware I can connect to the DB and create the query through PHP -->

 <DOCTYPE html>
     <html>
         <head>
             <title>Part 2 Assignment 4</title>
         </head>

         <style>
             /* .fullCard{
                /* padding: 20px;
                margin: 2px; } */
             
             .section{
                background-color: #e3e3e3;
                border-radius: 50px;
                padding: 20px;
                margin: 10px;
             }

         </style>
    <?php include "../navbar.php"; ?> 

    <div class="fullCard" style="font-family: Consolas">
        <div class="section">

            <?php

                echo "1.	List the names of customers with credit limits of $7500 or less.<br><br>";

                echo "&emsp;select customer_name from customer where credit_limit <= 7500;<br><br>";

                echo "<table style='width:100%'><tr>
                <th><b>customer_name</th>
                </tr>
               
                <tr><td>Al's Appliance and Sport</td></tr>
                <tr><td>Ferguson's</td></tr>
                <tr><td>The Everything Shop</td></tr>
                <tr><td>Lee's Sport and Appliance</td></tr>
                <tr><td>Deerfield's Four Seasons</td></tr>
                <tr><td>All Season</td></tr>
                </table>
                
                ";
            ?>
        </div>

        <div class="section">

            <?php

            echo "2.	List all the orders placed by all customers. The output should have customer name, order number and order date.<br><br>";

            echo "&emsp;select customer_name, order_num, order_date from orders o join customer c on c.customer_num = o.customer_num;<br><br>";
        
            echo"<table style='width:100%'><tr>
            <td><b>customer_name</td> <td><b>order_num</td> <td><b>order_date</td></tr>
           
            <tr><td>Al's Appliance and Sport</td>  <td>21608</td>    <td>2007-10-20</td></tr>
            <tr><td>Ferguson's</td>                 <td>21610</td>     <td>2007-10-20</td></tr>
            <tr><td> The Everything Shop</td>                 <td>21613 </td>     <td>2007-10-21</td></tr>
            <tr><td>Brookings Direct </td>                 <td>21614</td>     <td>2007-10-21</td></tr>
            <tr><td>Johnson's Department Store</td>                 <td>21617 </td>     <td>2007-10-23</td></tr>
            <tr><td>Al's Appliance and Sport</td>                 <td>21619 </td>     <td>2007-10-23</td></tr>
            <tr><td>Johnson's Department Store</td>                 <td>21623</td>     <td>2007-10-23 </td></tr>
            </table>
            ";
            ?>
        </div>
        <div class="section">
            <?php
        
            echo "3.	How many customers have balances which are less than their credit limits? <br>Hint: Use Count() function<br><br>
        
            &emsp;select count(customer_name) as 'balance_less_than_credit_limit' from customer where balance < credit_limit;<br><br>
        
            <table style='width:100%'><tr>

            <tr><td><b>balance_less_than_credit_limit</td></tr>

            <tr><td>8</tr></td>
            </table>
";
            ?>
        </div>
        <div class="section">
            <?php
            
            echo "4.	Get representatives with their number of orders that they helped each customer. The output should have rep_num, rep_name, customer_name and the count.<br>
            Hint: you should use GROUP BY to count based on the rep_num and customer_name. To concatenate the string to have Firstname Lastname use function CONCAT()<br><br>
        
            &emsp;select concat(first_name,' ', last_name) as rep_name, rep.rep_num, customer_name, count(customer.rep_num) as num_orders_rep_helped_customer from rep inner join customer on rep.rep_num = customer.rep_num group by customer.rep_num, customer_name;<br><br>
            
            <table style='width:100%'><tr>

            <tr><td><b> rep_name </td>      <td><b> rep_num </td> <td><b> customer_name </td>  <td><b> num_orders_rep_helped_customer </td></tr>

            <tr><td> Valerie Kaiser </td> <td> 20   </td> <td>Al's Appliance and Sport  </td> <td> 1 </td></tr>
            <tr><td> Valerie Kaiser </td> <td> 20   </td> <td>All Season </td> <td> 1 </td></tr>
            <tr><td> Valerie Kaiser </td> <td> 20   </td> <td>Kline's  </td> <td> 1 </td></tr>
            <tr><td> Richard Hull </td> <td> 35   </td> <td>Brookings Direct </td> <td> 1 </td></tr>
            <tr><td> Richard Hull </td> <td> 35   </td> <td>Deerfield's Four Seasons   </td> <td> 1 </td></tr>
            <tr><td> Richard Hull </td> <td> 35   </td> <td>Lee's Sport and Appliance </td> <td> 1 </td></tr>
            <tr><td> Richard Hull </td> <td> 35   </td> <td>The Everything Shop </td> <td> 1 </td></tr>
            <tr><td> Juan Perez </td> <td> 65   </td> <td>Bargains Galore  </td> <td> 1 </td></tr>
            <tr><td> Juan Perez </td> <td> 65   </td> <td>Ferguson's  </td> <td> 1 </td></tr>
            <tr><td> Juan Perez </td> <td> 65   </td> <td>Johnson's Department Store </td> <td> 1 </td></tr>

           </table>
        ";
        ?>
        </div>


    </div>


    <?php include "../footer.php"; ?>
     </html>
 </DOCTYPE>