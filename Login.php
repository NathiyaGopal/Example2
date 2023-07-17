<!DOCTYPE html>
<html>
    <head>
        <title>Koovi Login Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="Lgform.css">
        <link rel="stylesheet" href="hmpg.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>

            header {
        background-color: grey;
        position: fixed;
        left: 0;
        right: 0;
        top: 0px;
        height: 50px;
        display: flex;
        align-items: center;
        box-shadow: 0 0 1px 0 black;
        }
        header * {
        display: inline;
        }
        header li {
        margin: 4px;
        padding-right:10px;
        }
        .Htitle
        {
            font-size:24px;
            color:white;
            padding-right:-50px;
        }

        header li a {
        color: lightblue;
        text-decoration: none;
        font-size:14px;
        font-family:'Lucida Sans';
        padding-right:-200px;
        }
            p
            {
                font-size: 16px;
                color:grey;
            }
            body
            {
            margin-top: 1px;
            margin-bottom: 0;
            margin-left:0;
            margin-right:0;
            background-color:white;
            }
            hr{
                border: 1px solid lightgray;
                margin-bottom: 4px;
                
            }
            input{
                text-align:left;
                height: 28px;
                width: 80%;   
                padding-left: 10px;
                background:white;
                margin-left: 12px;
                margin-right: 18px;
                border: 1px solid lightgrey;
                border-radius:4px;
            }

            .btn {
            /*float: center;*/
            border:none;
            color: white;
            margin: 1px 1px;
            text-align:center;
            padding: 12px 20px;
            font-size:20px;
            background-color:darkgrey;
            margin-left: 10px;
            margin-right: 100px; 
            margin-top: 30px;   
            width:50%;
            height: auto;    
        }
            .lgin
            {
                margin-top: 50px;
                margin-right: 260px;
                margin-bottom: 20px;
                margin-left: 100px;
                color:chocolate;
                text-align: center;
                font-size: 20px;
            }
           
    /* .kanavu
    {
      text-shadow: 4px 4px 6px cyan;  
      color:white;
      text-align: left;
      text-decoration: double;
      background-color:grey;
      width: 100%;
      height: 50px;
      padding-top: 4px;
      padding-bottom: 10px;
      padding-left: 10px;
      padding-right: 10px;
      font-size: 18px;
      margin-top: 12px;
      margin-bottom: 1px;
      /*margin-left: 18px;*/
   /* } */
    
  /* .footer
    {
      /*
        width: 100%;
        height:50%;
        position: fixed;
        text-align: center;        
        background-color:black;
        color: white;
        left: auto;
        *//*
        width: 100%;
        position: relative;
        text-align: center;        
        background-color:grey;
        color: white;
        left: 0px;
        right: 1px;        
        bottom:-14px;
        font-family:'Lucida Sans';
    } */
    .container
 {
    padding: 16px;
    text-align:left;
    margin-top: 20px;
    /* margin-left: 60%;
    margin-right: 140px; */
    margin-bottom: 300px;
    /*background-color:aliceblue;*/
    border: 1px solid lightgrey;
    border-radius:4px;
    width:40%;
  } 
.subcontainer
{
/*border: 1px solid white;*/
padding: 18px;
color:lightgray;
height: 20%;
background-color:white;

}
#goh
{
color:blue;
padding-left: 50px;

}
#goh:hover
{
color:darkred;
}
label {
    padding: 4px 2px 2px 0;
    display: inline-block;
    font-family: cursive;
  }
    @media screen and (max-width: 600px) {
      li{
           font-size:12px;    
           float:left;     
       }
       .container
       {
        width:100%;
       }
       btn{
          width:100%;
         
        }
        .lgin{
          text-align:center;
          font-size:14px;
        }
        .container
        {
          margin-left:30px;
          margin-right:30px;
        }
        input{width:100%;}
      /*
        btn,.container {
          width:80%;
        }
        .lgin{
          text-align:left;
          font-size:14px;
        }
        .container
        {
          margin-left:30px;
          margin-right:30px;
        }
        .Htitle
        {
          font:size 14px;
        }
        header{
          padding-top:-10px;
         /* margin-left:2px;
          display:flex;*//*
          flex-direction: column;
          font-size:10px;
          float:left;
          width:100%;
          text-align:center;
        }*/
      } 
  #lblerror
  {
    padding-left:20px;
    padding-right:-150px;
    color:red;
    border:none;
    width:90%;
  }
 header a{color:yellow;}
  a{
  color: blue;
}
a:hover 
{
  color:lightgreen;  
}
.active{
  color:lightgreen;
}

</style>
    <script src="frmvalidation.js">    
    
    </script>
    </head>
    <?php
    /*session_start();*/

$label = array();

if(isset($_POST['submit']))
{
    
$e_mail = $_POST['txtuserid'];
$epswd = $_POST['txtlgpswd'];
$sqllgid = "select FirstName,Email_Id,New_Pswd from register_data where Email_Id ='". $e_mail."'and New_Pswd ='". $epswd."' ";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$resultid = mysqli_query($conn,$sqllgid);
if(!isset($resultid))
{
echo 'location.reload()';
}
  if (mysqli_num_rows($resultid) > 0) 
  {
    // output data of each row
    while($row = mysqli_fetch_assoc($resultid))
    {
      $urname= $row["FirstName"] ;
      /*echo "  id: " . $row["Email_Id"]. " - pswd:" . $row["New_Pswd"]. "<br>";*/
      if(($row["Email_Id"] == $e_mail) and ($row["New_Pswd"] == $epswd))
      {
        $word = "you are logined.";
        $label['data'] = $word;  
        
        /*header("location:redirectafterlogin.php");*/
        /*echo("<script>location.href = '".ADMIN_URL."/index.php?msg=$word';</script>");*/
        /*
        $page = $_SERVER['PHP_SELF'];
        $sec = "10";
        $label['data'] ="";
        header("Refresh: $sec;url=$page");   */          
        /*echo '<script>alert("Hi,you are logined.")</script>';*/
     /*   $_SESSION['success'] = "You have logged in!";*/
      }
     
    }
  }
  /*
 else if($row["Email_Id"] != $e_mail)
      {
        echo '<script> alert("you have entered wrong email-id")</script>';
      }
      else if($row["New_Pswd"]!= $epswd)
      {
         /*echo $_SESSION['success'];
          unset($_SESSION['success']);
        echo '<script> alert("you have entered wrong password")</script>';
        
      }     
     */
 else
      {
        /*echo '<script> alert(" Given e-mail id or password is incorrect.") </script>';*/
        $word = "Given e-mail id or password is incorrect.";
        $label['data'] = $word;
      }

mysqli_close($conn);
}
?>
    <body>
    <div>
        <?php include 'header.html';?>
    </div>
        <!--
        <header style="border: 1px;display: block;">
            <p class="kanavu">
                <!--<b><u>KANAVU</u><br>School of English</b>-->
               <!-- <b><u>KOOVI</u><br>Digital</b>
            </p>
    </header>   -->
    <br>
    <!-- <header>
          <nav><div class="Htitle">
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="NewHomePage.php">KOOVI</a></u> &nbsp;Digital</span></div>
          <div style="margin-left:710px;margin-right:4px;text-align:right;">
          <ul>         
          <b>          
            <li><i class='fas fa-home' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="NewHomePage.php">Home</a></li>
            <li><i class='fas fa-registered' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="NewRegisterform1.php">Registration</a></li>
            <li><i class='fas fa-user' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="Login.php" class="active">Login</a></li>
            <li><i class='fas fa-address-card' style='font-size:18px;color:lightblue'></i><a href="aboutus.php">About us</a></li>
          </b>
        </ul>
        </div>
        </nav>
    </header>      -->
    <br>
    <p class ="lgin">Login to <u><b>KOOVI Digital</b></u></p>
        <form name="loginform" action="" method="POST">
          <center>
        <div class="container">
            <!--<label name="lblerrormsg" value="">.</label>-->
            <p>Login in your account</p>
            <hr>
            <div class ="subcontainer">
              <p>
            <label>Email - id :</label> <input type="email" name="txtuserid" required></p>
            
            <p><label>Password : </label><input type="password" name="txtlgpswd" maxlength=14 minlength=8 required></p>
            
             <p><input type="submit" class="btn" name="submit" value="Login" onclick="return ValidateEmail()">
            <a href="NewHomePage.php" id="goh">Go home</a></p>
            </div>
            <hr>
            <input type="label" id="lblerror" name="word" value ="<?php echo isset($resultid)?$label['data']: '' ?>" />
            <p style="color:grey;padding-right:16px;">New to Koovi?<a href="NewRegisterform1.php" id="goh">create an account</a>
                
            </p>
        </div></center>
    </form>
    <!-- <footer>
        <p class="footer">
        copy rights received @ 2023. All Rights Received.
        </p>
    </footer> -->
    <div>
        <?php include 'footer.html';?>
    </div>
    </body>
</html>