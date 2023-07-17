<!DOCTYPE html>
<html>
    <head>
        <title>Koovi Registration form</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="formstyle.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>

         *{box-sizing:border-box;}
 body
    {
      left:0px; 
      /* right:0px; */
      bottom:0px;    
      /* width: 100%; */
    }

          /* header {
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
        }

        header li a {
        color: lightblue;
        text-decoration: none;
        font-size:14px;
        font-family:'Lucida Sans';
        } */

        .button1
        {
            background-color:grey;
            border: none;
            color: white;
            padding: 8px 1px; 
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 1px 1px;
            cursor: pointer;
            width: 72px;
            height: auto;
            margin-right:2px;
            border-radius: 4px;
          }
          button1:hover
          {
                opacity:0.6;
          }
          #goback
          {
            color:blue; font-size: 17px;float:right;
            /* padding-left : 20px;
            padding-right: 2px; */
          }
    /* .footer
    {
        width: 180%;
        position: relative;
        text-align: center;        
        background-color:grey;
        color: white;
        left: -6px;
        right: -100px;        
        bottom:-12px;
        font-family:'Lucida Sans';
    } */
    /* .kanavu
    {
      text-shadow: 4px 4px 6px cyan;
      color:white;
      text-align: justify;
      text-decoration: double;
      background-color:grey;
      width: 100%;
      height: 50px;
      padding-top: 2px;
      padding-bottom: 10px;
      padding-left: 10px;
      padding-right: 10px;
      font-size: 16px;
      margin-top: 6px;
      margin-bottom: 0;
    }
    .img
    {
        width: 24px;
        height: 2px;
        padding-top: 2px;
        padding: left 600px;
    } */
    #clearall
    {
      padding: 8px 1px;
      border:none;
      color:white;
      text-align:center;
      background-color:grey;
      align:right;
      margin: top 4px;
      margin: left 2px;
      margin: right 60px;
      width: 72px;
      height: auto;
      font-size: 14px;
      border-radius :4px;
      cursor: pointer;
    }
    #btnview
    {
      padding: 8px 1px;
      border:none;
      color:white;
      text-align:center;
      background-color:grey;
      align:right;
      margin: top 4px;
      margin: left 2px;
      margin: right 0px;
      width: 72px;
      height: auto;
      font-size: 14px;
      border-radius :4px;
      cursor: pointer;
    }
    /* hr{
    border: 1px solid lightslategrey;
    margin-bottom: 2px;
    width:100%;
  } */
  .container
 {
    border : 1px solid lightgrey;
    border-radius:4px;
    padding: 14px;
    text-align:left;
    margin-top: 0;
    /* margin-left: 360px;
    margin-right: -200px; */
    margin-bottom: 100px;
    background-color:white;
    width: 50%;
  }
  label {
    padding: 2px 4px 4px 0;
    display: inline-block;
   font-family: cursive;
   color:grey;
   font-size:14px;
  }
  hr{
    border: 1px solid lightslategrey;
    margin-bottom: 2px;
    width:100%;
  }
  input{
    text-align:left;
    height: 28px;
    width: 88%;   
    padding-left: 10px;
    background:white;
    margin-left: 30px;
    margin-right: 10px;
    border : 1px solid lightgrey;
    border-radius:2px;
  }
  #sub_input
  {
    background-color: blue;
    margin-left:auto;
    margin-right:8px;
    padding-bottom:2px;
    width: 12px;
  }
  #goback
  {
  color:blue;
  margin-left:70px;
  padding-left: 70px;
  font-size: 17px;
  }
  #goback:hover
  {
    color:darkred;
  }
header a{color:yellow;}
  @media screen and (max-width: 600px)
 {
  #lblerror,h3{left:0; text-align: left;}
    .clearall, .btnView {
      width: 100%;
    }
    
    li{float:left;}
  .container {width:100%;}
  }
  
h3{
  color:brown; text-align: center;
  /*font-size: 20px; 
  margin-top: 2px;
  margin-left:580px;
  margin-right:10px;
  padding: top 0; */
}
#lblerror
  {
    /* margin-left:100px;
    margin-right:100px;
    padding-left:20px;
    padding-right:-150px; */
    color:limegreen;
    border:none;
   
  }

        </style>
        
            <!--<p class="kanavu">-->
                <!--<b><u>KANAVU</u><br>School of English</b>-->
              <!--  <b><u>KOOVI</u><br>Digital</b>
            </p>-->
            <!-- <header>
          <nav><div class="Htitle">
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="NewHomePage.php">KOOVI</a></u> &nbsp;Digital</span></div>
          <div style="margin-left:710px;margin-right:4px;text-align:right;">
          <ul>         
          <b>          
            <li><i class='fas fa-home' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="NewHomePage.php">Home</a></li>
            <li><i class='fas fa-registered' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="NewRegisterform1.php">Registration</a></li>
            <li><i class='fas fa-user' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="Login.php">Login</a></li>
            <li><i class='fas fa-address-card' style='font-size:18px;color:lightblue'></i><a href="aboutus.php">About us</a></li>
          </b>
        </ul>
        </div>
        </nav>
        </header>      -->
     <script type ="text/javascript">
      
    function ValidateEmail()
    {
      let inputText = document.registerform.txtemail;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var pswdlength = document.registerform.newpswd;
          if(document.registerform.txtfirst.value=="")
          {
            alert("You must enter firstname");
            document.registerform.txtfirst.focus();
            return false;
          }
          else if(document.registerform.txtmob.value=="")
          {
            alert("You must enter contact no");
            document.registerform.txtmob.focus();
            return false;
          }
          else if(!inputText.value.match(mailformat))
          {
              /*alert("Valid email address!");*/ 
              alert("You have entered an invalid email address!");
              document.registerform.txtemail.focus(); 
              return false;
          }
          else if(document.registerform.newpswd.value=="")
          {
            alert("Please you must enter password");
              document.registerform.newpswd.focus();
              return false;
          }
          else if(document.registerform.repswd.value=="")
          {
             alert("Please you must enter re-password");
              document.registerform.repswd.focus();
              return false;
          }
          else if( pswdlength.value.length < 8)
          {
              alert("Your password length is too low.");
              document.registerform.newpswd.focus();
              return false;
          }
          else if(document.registerform.newpswd.value != document.registerform.repswd.value)
          {
            alert("You have entered mismatch password");
            document.registerform.repswd.focus();
            return false;            
          }
          else
          {
            /*alert("All validation is  checked!");    */        
            return true;
          }
    }
    function fnClearAll()
    {
      document.registerform.txtfirst.value="";
      document.registerform.txtlast.value="";
      document.registerform.txtmob.value="";
      document.registerform.txtemail.value="";
      document.registerform.newpswd.value="";
      document.registerform.repswd.value="";
    }
    function ischecked()
    {
      if(document.registerform.rememberme.value ==checked)
        return 1;
      else
      return 0;
    }
    </script><br>
    </head>
     
 <?php
  $label = array();
  $label['data']="";
 $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$dbname);
      
  $id=$_REQUEST['id'];  
  /*echo $id;*/
  if(isset($_REQUEST['id']))
  {
      $sqlselect = "Select FirstName,LastName,Contact_No,Email_Id,New_Pswd from register_data where Register_Id = '".$id. " '" ;
      $resultselect = mysqli_query($conn,$sqlselect);
    if (mysqli_num_rows($resultselect) > 0)
    {
      while($row = mysqli_fetch_assoc($resultselect))
      {
        $tfn = $row['FirstName']; 
        $tln = $row['LastName']; 
        $ctno = $row['Contact_No']; 
        $eml = $row['Email_Id']; 
        $nwpswd=$row['New_Pswd'];
      }
    }
  }
if(isset($_POST['submit']))
{
    
  $fname =$_POST['txtfirst'];
  $lname = $_POST['txtlast'];
  $contact_mob = $_POST['txtmob'];
  $regemailId = $_POST['txtemail'];
  $npswd =$_POST['newpswd'];
  $regrepswd =$_POST['repswd'];
  /*$remme = $_POST['rememberme'];*/    
  
      if(isset($_GET['rememberme']))
      {
      $remvalue=1;
      }
      else
      {
      $remvalue=0; 
      }
    
  $sqlupdate = "Update register_data set FirstName='".$fname."',LastName='".$lname."',Contact_No='".$contact_mob."',Email_Id='".$regemailId."',New_Pswd='".$npswd."',Re_Pswd='".$regrepswd."',Rememberme='".$remvalue."' where Register_Id = '".$id. " '" ;
  $resultupdate = mysqli_query($conn,$sqlupdate);
  
  if($resultupdate) 
  {
  /*echo '<script>alert("Record was updated successfully")</script>';  
  header('location:NewUpdateform.php?');*/
  $word = "Registration has been updated successfully";
  $label['data'] = $word;
  }
  else
    {
      /*echo '<script>alert("Record was not updated")</script>';*/
      $word = "Registration was not updated.";
      $label['data'] = $word;
    }
    mysqli_close($conn);
 }
 /*
//at index page where you want to display message
if(isset($_GET['msg']) && !empty($_GET['msg'])){
    echo '<p class="myMsg">'.$_GET['msg'].'</p>'
} */
?> 

    <body>
    <div>
        <?php include 'header.html';?>
    </div>
      <!--<p class="lblerror"><label id="lblResult">.</label>
      </p>-->     
<br><br><br>

    <h3> <u>Update an account </u></h3>
    <form name="registerform" action="" method="POST">
    <input type="label" id="lblerror" name="word" value ="<?php echo isset($resultupdate)?$label['data']: '' ?>" />
    <center>
    <div class="container">
        <p style="color:grey;margin-top:4px;">Please fill in this form to Update an account.</p><hr><br> 
        
        <label>First Name :</label> <input type="text" name="txtfirst" id="txtfirst" value="<?php echo $tfn; ?>" required><br>
        <label>Last Name :</label> <input type="text" class="input-field" name="txtlast" id="txtlast" value="<?php echo $tln; ?>" > <br> 
        <!--<label>Date Of Birth </label> <input type="text" id="in_sub"><input type="text" id="in_sub"><input type="text" id="in_sub"><br>-->
        <label>Contact No : </label> <input type="text" name="txtmob" id="txtmob" maxlength="10" minlength="10" value= "<?php echo $ctno; ?>" required><br>
        <label>Email - id :</label> <input type="email" name="txtemail" id="txtemail" value= "<?php echo $eml; ?>" readonly><br>
        <label>New Password :</label><input type="password" name="newpswd" maxlength="14" minlength="8"  id="newpswd" value= "<?php echo $nwpswd; ?>" ><br>
        <label>Re-Password : </label> <input type="password" name="repswd" minlength="8" maxlength="14" id="repswd" value= "<?php echo $nwpswd; ?>"><br><hr>
        <label style="margin-top:-4px;">
            <input type="checkbox" name="rememberme[]" id="sub_input" checked="checked"> Remember me
          </label>
        <!--<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>-->
        <p> <input type="submit"  class="button1" name="submit" value="Update" onclick=" return ValidateEmail()">
        <input type="button" name="btnclear" id="clearall" value="ClearAll" onclick= "fnClearAll()">
        <a href= "RecordView.php"><input type="button"  id="btnview" name="review" value="View"></a>
        <a href="NewHomePage.php" id="goback">Go home</a>         
      </p>        
    </div>  </center>  
</form>
<!-- <footer>
  <p class="footer">
  copy rights received @ 2023.All Rights Received.
  </p>
</footer> -->
<div>
  <?php include 'footer.html';?>
</div>
</body>
</html>