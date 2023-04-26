<?php

if(isset($_POST['submit']))
{
 //var $fname, $lname,$contact_mob,$regemailId, $npswd,$regrepswd,$rememberme, $sqlcmd,$remvalue;
    $fname = $_POST['txtfirst'];
    $lname = $_POST['txtlast'];
    $contact_mob = $_POST['txtmob'];
    $regemailId = $_POST['txtemail'];
    $npswd =$_POST['newpswd'];
    $regrepswd =$_POST['repswd'];
    $rememberme=$_POST['rememberme'];

        if(isset($rememberme))
        {
        $remvalue=1;
        }
        else
        {
        $remvalue=0; 
        }


 // database details
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project";

 // creating a connection
 $conn = mysqli_connect($host, $username, $password,$dbname);
 
 if(!$conn)
 {
  echo "not connect";
 }
 else
 {
  echo "connected.. ";
  }

$sqlcmd = "insert into register_data (FirstName,LastName,Contact_No,Email_Id,New_Pswd,Re_Pswd,Rememberme) Values ('$fname','$lname','$contact_mob','$regemailId','$npswd','$regrepswd','$remvalue')";

$result = mysqli_query($conn,$sqlcmd);

if($result) 
{
    echo " New record created successfully";
 }
 else
  {
    echo "not created";
  }
  mysqli_close($conn);
 
}
?>