<!DOCTYPE html>
<html>
    <head>
        <title>Koovi Login Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Lgform.css">
        <!--<link rel="stylesheet" href="hmpg.css">-->
        <style>
            p
            {
                font-size: 16px;
                color:grey;
            }
            body
            {
            margin-top: 1px;
            margin-bottom: 0;
            background-color:white;
            }
            hr{
                border: 1px solid lightgrey;
                margin-bottom: 2px;
            }
            .btn {
                /*float: center;*/
                
                border:none;
                color: white;
                margin: 1px 1px;
                text-align:center;
                padding: 12px 20px;
                font-size:16px;
                background-color:gray;
                margin-left: 10px;
                margin-right: 100px; 
                margin-top: 30px;   
                width:30%;
                height: auto;    
                border-radius:20px;
            }
            .lgin
            {
                margin-top: 24px;
                margin-right: 260px;
                margin-bottom: 20px;
                margin-left: 100px;
                color:white;
                text-align: right;
                font-size: 20px;
            }
            .container
            {
                padding: 10px;
                text-align:left;
                margin-top: 70px;
                margin-left: 60%;
                margin-right: 150px;
                margin-bottom: 48px;
                background-color:white;
                border: 1px solid lightgrey;
                border-radius:20px;
            } 
    .kanavu
    {
      text-shadow: 4px 4px 6px cyan;  
      color:white;
      text-align: left;
      text-decoration: double;
      background-color:gray;
      width: 100%;
      height: 50px;
      padding-top: 4px;
      padding-bottom: 10px;
      padding-left: 10px;
      padding-right: 10px;
      font-size: 18px;
      margin-top: -60px;
      margin-bottom: 1px;
      position: fixed;
      left:1px;
      right:1px;
      /*margin-left: 18px;*/
    }
    
  .footer
    {
      /*
        width: 100%;
        height:50%;
        position: fixed;
        text-align: center;        
        background-color:black;
        color: white;
        left: auto;
        */
        width: 100%;
        position: fixed;
        padding-top:100px;
        font-size:16px;
        text-align: left;        
        background-color:lightyellow;
        color: grey;
        border-top:1px solid lightgrey;
        left: 1px;
        right: 1px;        
        bottom:-8px;
    }

    input{
    text-align:left;
    height: 30px;
    width: 100%;   
    padding-left: 10px;
    background:white;
    margin-left: 12px;
    margin-right: 18px;
    border : 1px solid lightgrey;
    
  }
  
.subcontainer
{
/*border: 1px solid white;*/
padding: 16px;
color:darkgray;
height: 20%;
background-color:white;
}
        </style>
    <script src="frmvalidation.js">        
    </script>
    </head>
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
    <body>
        <header style="border: 1px;display: block;">
            <p class="kanavu">
                <!--<b><u>KANAVU</u><br>School of English</b>-->
                <b><u>KOOVI</u><br>Digital</b>
            </p>
    </header> 
       
        <form name="loginform" action="" method="POST">        
        <div class="container">
            <!--<label name="lblerrormsg" value="">.</label>-->
            <!--<p>Login to <u><b>KOOVI Digital</b></u></p>-->
            <p>Login in <b>KOOVI Digital</b> account</p>
            <hr>
            <p class ="subcontainer">
            <label>Email - id :</label> <input type="email" name="txtuserid" require><br>
            
            <label>Password : </label><input type="password" name="txtlgpswd" maxlength=14 minlength=8 require><br>
            
             <input type="submit" class="btn" name="submit" value="Login" onclick="return ValidateEmail()">
            <a href="HomePage.php">go home</a>
            </p><hr>
            <p style="color:grey;padding-right:20px;">New to Koovi?<a href="NewRegisterform1.php">create an account</a>
                
            </p>
        </div>
    </form>
    <footer>
        <p class="footer">
        copy rights received @ 2023
        </p>
    </footer>
    </body>
</html>