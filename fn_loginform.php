<?php

if(isset($_POST['submit']))
{
    
$e_mail = $_POST['txtuserid'];
$epswd = $_POST['txtlgpswd'];
$sqllgid = "select Email_Id,New_Pswd from register_data where Email_Id ='". $e_mail."'and New_Pswd ='". $epswd."' ";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$resultid = mysqli_query($conn,$sqllgid);

if (mysqli_num_rows($resultid) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($resultid))
    {
      echo "  id: " . $row["Email_Id"]. " - pswd:" . $row["New_Pswd"]. "<br>";
      if(($row["Email_Id"] == $e_mail) and ($row["New_Pswd"] == $epswd))
      {
        echo 'you are logined .';
      }
      else if($row["New_Pswd"] == $epswd)
      {
        echo 'wrong password';
      }
      else
      {
        echo 'wrong email-id';
      }
    }
}
else
{
    echo " Given e-mail id or password is not correct.";
}

mysqli_close($conn);

}
?>