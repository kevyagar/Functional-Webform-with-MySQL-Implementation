<html>

<head>
<title>Process an HTML form</title>
</head>
<body>
          

<?php
        $fullname = $_POST['fullname'];             
        $address    = $_POST['address'];
        $sex    = $_POST['sex'];                 
        $age    = $_POST['age'];
        $status =$_POST['status'];        #checkboxes array
        $education = $_POST['education'];   #select list array
        $hobby = $_POST['hobby'];

        if (is_array($education))                          #select list
            $education  = implode(',' , $education);          
        if (is_array($status))                         #checkboxes
            $status = implode(',' , $status); 
        if(is_array($hobby))
            $hobby = implode(',' , $hobby);      

        
        
//----- Write data into Database ---------------------------------------------

        $host = 'localhost';
        $DBname    = 'kyagar';
        $DBuser    = 'kyagar';
        $DBpswd    = 'kyagar';
 
        $connect = mysqli_connect($host,$DBuser,$DBpswd,$DBname);   #connect to db server
 
        if (! $connect) 
            die('Could not connect: ' . mysqli_connect_error());

                    # &lt; &gt; &apos; &quote; &amp;

           

        $insert = "INSERT INTO collect
                   (fullname,address,sex,status,age,education,hobby) 
                   VALUES('$fullname','$address','$sex', '$status',
                            '$age','$education', '$hobby')";
        
        $result = mysqli_query($connect, $insert);                        #issue the query                        

        if (! $result) 
            die('Could not execute insert: ' . mysqli_error($connect));
       
        mysqli_close($connect);                                  #close connection

        print "<b>Information Processed Successfully!!!</b>";

//=============================================================================

?>


</body>
</html>
