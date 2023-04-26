<!DOCTYPE html>
<html>
    <head>
        <title>KSV Registration form</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="formstyle.css">
        
        <style>
        .button1 {
            background-color:darkblue;
            border: none;
            color: white;
            padding: 8px 1px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin: 1px 1px;
            cursor: pointer;
            width: 70px;
            height: auto;
            margin-right:10px;
            border-radius: 10%;
          }
          button1:hover
          {
                opacity:0.6;
          }
          #goback
          {
            padding-left : 20px;
            padding-right: 2px;
          }
    .footer
    {
        width: 100%;
        position: fixed;
        text-align: center;        
        background-color:dodgerblue;
        color: white;
        left: 1px;
        right: 1px;        
        bottom:0;
    }
    .kanavu
    {
      text-shadow: 4px 4px 6px cyan;
      color:white;
      text-align: justify;
      text-decoration: double;
      background-color:brown;
      width: 100%;
      height: 50px;
      padding-top: 2px;
      padding-bottom: 10px;
      padding-left: 10px;
      padding-right: 10px;
      font-size: 18px;
      margin-top: 6px;
      margin-bottom: 0;
    }
    .img
    {
        width: 24px;
        height: 2px;
        padding-top: 2px;
        padding: left 600px;
    }
    #clearall
    {
      padding: 8px 1px;
      border:none;
      color:white;
      text-align:center;
      background-color:darkblue;
      align:right;
      margin: top 4px;
      margin: left 2px;
      margin: right 80px;
      width: 70px;
      height: auto;
      font-size: 18px;
      border-radius :6px;
      cursor: pointer;
    }
    #btnview
    {
      padding: 8px 1px;
      border:none;
      color:white;
      text-align:center;
      background-color:darkblue;
      align:right;
      margin: top 4px;
      margin: left 2px;
      margin: right 0px;
      width: 70px;
      height: auto;
      font-size: 18px;
      border-radius :6px;
      cursor: pointer;
    }
    
        </style>
        <header>
            <p class="kanavu">
                <b><u>KANAVU</u><br>School of English</b>
            </p>
        </header>     
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
          else if(!inputText.value.match(mailformat))
          {
              /*alert("Valid email address!");*/ 
              alert("You have entered an invalid email address!");
              document.registerform.txtemail.focus(); 
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
            document.registerform.newpswd.focus();
            return false;            
          }
          else
          {
            alert("All validation is  checked!");            
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
    </script>
    </head>
    <body>
      <!--<p class="lblerror"><label id="lblResult">.</label>
      </p>-->     
  
  <?php 
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
        $sqlselect = "Select FirstName,LastName,Contact_No,Email_Id from register_data where Register_Id = '".$id. " '" ;
        $resultselect = mysqli_query($conn,$sqlselect);
      if (mysqli_num_rows($resultselect) > 0)
      {
        while($row = mysqli_fetch_assoc($resultselect))
        {
          $tfn = $row['FirstName']; 
          $tln = $row['LastName']; 
          $ctno = $row['Contact_No']; 
          $eml = $row['Email_Id']; 
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
    echo " Record was updated successfully";    
    }
    else
      {
        echo "Not Updated";
      }
      mysqli_close($conn);
   }
?> 
      <h3> <u>Create an account </u></h3>
    <form name="registerform" action="" method="POST">
    <div class="container">
        <p>Please fill in this form to create an account.</p>
        
        <label>Fist Name :</label> <input type="text" name="txtfirst" id="txtfirst" value= "<?php echo $tfn; ?>" require><br>
        <label>Last Name :</label> <input type="text" class="input-field" name="txtlast" id="txtlast" value="<?php echo $tln; ?>"> <br> 
        <!--<label>Date Of Birth </label> <input type="text" id="in_sub"><input type="text" id="in_sub"><input type="text" id="in_sub"><br>-->
        <label>Contact No : </label> <input type="text" name="txtmob" id="txtmob" maxlength="10" minlength="10"  value= "<?php echo $ctno; ?>"  require><br>
        <label>Email - id :</label> <input type="email" name="txtemail" id="txtemail" value= "<?php echo $eml; ?>" ><br>
        <label>New Password :</label><input type="password" name="newpswd" maxlength="14" minlength="8"  id="newpswd"><br>
        <label>Re-Password : </label> <input type="password" name="repswd" minlength="8" maxlength="14" id="repswd"><br><hr>
        <label>
            <input type="checkbox" name="rememberme[]" id="sub_input" checked="checked" > Remember me
          </label>
        <!--<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>-->
        <p> <input type="submit"  class="button1" name="submit" value="Update">
        <input type="button" name="btnclear" id="clearall" value="ClearAll" onclick= "fnClearAll()"> 
        <a href= "RecordView.php"><input type="button"  id="btnview" name="review" value="View"></a>
        <a href="HomePage.php" id="goback">go home</a>         
      </p>        
    </div>    
</form>
<footer>
  <p class="footer">
  copy rights @ 2023
  </p>
</footer>
</body>
</html>