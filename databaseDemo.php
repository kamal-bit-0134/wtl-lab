<?php
echo "Database Program" ;

// Ways to connect to Mysql Databae
// 1. MySQLi extension
// 2. PDO

$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$database = "harry" ;

$connect  = mysqli_connect("localhost","root","",$database ) ;

// $query1 = " CREATE DATABASE harry" ;
// mysqli_query($connect,$query1) ;
// $query2 = "CREATE TABLE `harry1`(`no` INT, `name` VarChar(30))" ;
// mysqli_query($connect,$query2) ;

// $query3 = "INSERT INTO `harry1` (`no`, `name`) VALUES ('1', 'Kamal1'), ('2', 'Kamal2')" ;
// mysqli_query($connect,$query3) ;

// $query4 = "UPDATE harry SET no=3,name='kamal3' WHERE no is 2 "
// $query4 = "UPDATE harry1 SET `no`= 3, `name` = 'kamal3' WHERE `no` is 2 " ;


// mysqli_query($connect,"UPDATE harry1 SET no='3', name='kamal3' WHERE no=2"); 
// mysqli_query($connect,"SELECT * FROM harry1 "); 

$result = mysqli_query($connect,"SELECT * FROM harry1 ") ;
if (mysqli_num_rows($result) >0){
    echo "<table>" ;
    echo "<tr>" ;
    echo "<th>id</th>";
    echo "<th>first_name</th>"; 
    echo "</tr>" ;
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>" . $row['no'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            // echo "<td>" . $row['last_name'] . "</td>";
            // echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
    // echo "</table>" ;

}

?>
