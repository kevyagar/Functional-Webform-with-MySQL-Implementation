<html>

<head>
<title>Take Information from Database into table</title>
</head>
<body>
          

<?php
$host = 'localhost';
$DBname    = 'kyagar';
$DBuser    = 'kyagar';
$DBpswd    = 'kyagar';

$dbConnect = mysqli_connect($host,$DBname,$DBuser,$DBpswd);
  if (! $dbConnect) 
   die("Could not connect to server: "  .  mysqli_connect_error( ) );

  $query  =  "SELECT fullname, address, sex, age, status, education, hobby 
             FROM collect 
             ORDER BY fullname" ;

$cursor = mysqli_query($dbConnect, $query);
if (! $cursor)  die("Could not execute query: "  .  mysqli_error($dbConnect) );

$data = array();
        $k=0;

        while ($row = mysqli_fetch_array($cursor))
          $data[$k++] = $row;

        print "<table border=10>";
        
        print "<th bgcolor=red> Name </th>";
        print "<th bgcolor=green> Address </th>";
        print "<th bgcolor=lightblue> Sex </th>";
        print "<th bgcolor=orange> Age </th>";
        print "<th bgcolor=pink> Status </th>";
        print "<th bgcolor=gray> Education </th>";
        print "<th bgcolor=yellow> Hobbies </th>\n";

        foreach($data as $row)
        {
          $name = $row["fullname"];
          $address = $row["address"];
          $sex = $row["sex"];
          $age = $row["age"];
          $status = $row["status"];
          $education = $row["education"];
          $hobby = $row["hobby"];

          print "<tr><td><tr>";
          print "<th>$name</th><td>$address</td><td>$sex</td><td>$age</td><td>$status</td><td>$education</td><td>$hobby</td>\n";
        }
        print "</table>\n";

  ?>
    </body>
    </html>

