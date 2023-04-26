<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    
    $id=$_REQUEST['id'];  
    echo $id;
    if(isset($_REQUEST['id']))
    {
        $sqlselect = "Select FirstName,LastName,Contact_No,Email_Id from register_data where Register_Id = '".$id. " '" ;
        $resultselect = mysqli_query($conn,$sqlselect);
      if (mysqli_num_rows($resultselect) > 0)
      {
        while($row = mysqli_fetch_assoc($resultselect))
        {
          $_POST['txtfirst'] = $row['FirstName']; 
          $_POST['txtlast'] = $row['LastName']; 
        /*$resultselect['LastName'];
        $resultselect['Email_Id'];
        $resultselect['Contact_No'];*/

        }
      }
      else
      echo 'no data';
      
    }        
    ?>