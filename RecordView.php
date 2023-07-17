<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
/*
session_start();
session_register('regid');
*/
$sqllgid = "select Register_Id,FirstName,LastName,Contact_No,Email_Id,Password(New_Pswd) as 'newpwsd' from register_data";
$result = mysqli_query($conn,$sqllgid);

?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  
  *{box-sizing:border-box;}
/* 
  [class*="col-"] {
  float: left;
  padding: 15px;
  border: 1px solid red;
}

.col-1 {width: 12%;}
.col-2 {width: 20%;}
.col-3 {width: 30%;}
.col-4 {width: 20%;}
.col-5 {width: 25%;}
.col-6 {width: 20%;}
.col-7 {width: 20%;} */

@media screen and (max-width: 600px)
 {
    /* .clearall, .btnView {
      width: 100%;
    } 
    li{float:left;}*/
  
 .table,table {font-size:10px;float:center;align:left:}
  }

  /* }
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
} */
.table
{
bottom:400px;
padding-bottom:400px;
font-size:14px;

}
/* 
header li a {
color: lightblue;
text-decoration: none;
font-size:14px;
font-family:'Lucida Sans';
}
    .kanavu
    {
      text-shadow: 4px 4px 6px cyan;
      color:white;
      text-align: justify;
      text-decoration: double;
      background-color:grey;
      width: 100%;
      height: 44px;
      padding-top: 8px;
      padding-bottom: 6px;
      padding-left: 10px;
      padding-right: 10px;
      font-size: 18px;
      margin-top: 8px;
      margin-bottom: 30px;      
    }
    a
    {
        color:darkred;
    } */
    header a{color:yellow;}
body
{
/*   
background-color:white;
margin-bottom:0;
margin-left:0;
margin-right:0; */
left:0;
bottom:0;
right:0;
}
h2
{
    color:Darkslategrey;
    text-shadow: 1px 1px 1px cyan;
}
table
{
border-color:lightgrey;
color:gray;
font-size: 14px;
}
th
{
  color:Darkred;
  
}
/* }
.footer
    {
        width: 100%;
        position: relative;
        text-align: center;        
        background-color:grey;
        color: white;
        left: 0px;
        right: 0px;        
        bottom: 0px;       
        font-family:'Lucida Sans';
        /*height:20px;*/
     /* }*/
    .homeicon
    {
      margin-top:-20px;
      margin-left:1000px;
      
    }
    img
    {
        width: 24px;
        height: 24px;
    } */
    #lblerror
  {
    /* margin-top:20px;
    padding-left:20px;
    padding-right:-150px; */
    color:limegreen;
    border:none;
    /* width:90%; */
  }

    </style>
    <script type="text/javascript">
    function fnGetValue(element)
    {      
      var rowJavascript = element.parentNode.parentNode;
      var rowjQuery = $(element).closest("tr");
    /*var X = document.getElementById("myTable").rows[this.rowIndex].cells[0].innerHTML;*/
      alert(rowjQuery); 
    }
  </script>

<head>
  
    <title> Register Report</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="formstyle.css">-->
     <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->

     <!-- <link rel="javascript" href="https://kit.fontawesome.com/a076d05399.js"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--
     <header>
            <div class="kanavu"> 
                <b><u>KOOVI</u><br>Digital</b>
            <span class="homeicon"> <a href="NewHomePage.php">
            <i class='fas fa-house-user' style='font-size:20px;color:white;'></i>
            </a></span>
            </div>
           
    </header>-->
    <!-- <header>
          <nav><div class="Htitle">
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="NewHomePage.php">KOOVI</a></u> &nbsp;Digital</span></div>
          <div style="margin-left:710px;margin-right:4px;text-align:right;">
          <ul>         
          <b>          
            <li><i class='fas fa-home' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="NewHomePage.php">Home</a></li>
            <li><i class='fas fa-registered' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="NewRegisterform1.php">Registration</a></li>
            <li><i class='fas fa-user' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="Login.php">Login</a></li>
            <li><i class='fas fa-address-card' style='font-size:18px;color:lightblue'>&nbsp;</i><a href="aboutus.php">About us</a></li>
          </b>
        </ul>
        </div>
        </nav>
    </header>  <br>    -->
</head>

<body>
<div>
  <?php include 'header.html';?>
</div>
<br><br>
  <form name= "Reportform"  action = "" method = "POST">
    <div style="overflow-x:auto;">
  <table class="table" border ="1px" cellspacing="0" cellpadding="10" align="center" name="myTable">
<thead><tr><td  colspan="7" align="center"><h2>Register Report</h2></td></tr> </thead>
<tr>
    <th>S.No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Contact_No</th>
    <th>Email_Id</th>    
    <th>Password</th>
    <th>for_Update</th>
  </tr>

<?php
$label = array();
$label['data']="";
if(isset($result))
{
if(mysqli_num_rows($result) > 0)
 {
  $sn=1;
  $label['data']="";
  /*
  $x= mysqli_num_rows($result);
  $RegId = array($x);*/
 while($data = mysqli_fetch_assoc($result))
 {
    /*$RegId[$sn - 1] = $data['Register_Id'];*/
   ?>
 <!-- <input type=hidden id="rowid" name="rowid" value="php echo $RegId[$sn - 1];?>" > -->
 <tr>
   <td> <?php echo $sn;?></td>
   <td><?php echo $data['FirstName']; ?> </td>
   <td><?php echo $data['LastName']; ?> </td>
   <td><?php echo $data['Contact_No']; ?> </td>
   <td><?php echo $data['Email_Id']; ?> </td>
   <td><?php echo $data['newpwsd']; ?></td>
   <td> <a href="NewUpdateform.php?id=<?php echo $data["Register_Id"]; ?>" > <i class='fas fa-edit' style='font-size:18px;color:grey;'></i></a>&nbsp;&nbsp;
   <a href="RecordView.php?id=<?php echo $data["Register_Id"]; ?>" onclick="return confirm('Are you sure? Do you want to delete this record')" ><i class='fas fa-trash' style='font-size:18px;color:grey;'></i></a>
  </td>
  </tr>

  <?php
   $sn++;  
  }  
  } 
  else { ?>
    <tr>
     <td colspan="8">No data found</td> 
    </tr>

 <?php 
  }
}

if(isset($_REQUEST['id']))
{
 /*require_once('formconnection.php');*/
 $id=$_REQUEST['id'];
$query = "DELETE FROM register_data where Register_Id = $id"; 
$result = mysqli_query($conn,$query) or die (mysqli_error());
$word = "<label style='margin-left:100px;color:limegreen;'>Registration has been deleted successfully.</label>";
// $label['data'] = $word;
echo isset($result) ? $word: '';
// $_REQUEST['id']="";
echo '<script>window.location="/nathiyatest/RecordView.php"</script>';
//  window.location.load('/nathiyatest/NewHomePage.php');
// header("refresh");
// header('Location: '.$_SERVER['REQUEST_URI']);
//  header('Location: NewHomePage.php');

}
 ?>
  </table>
  </form></div>
  <div>
        <?php include 'footer.html';?>
  </div>
  <!-- <footer>
  <p class="footer">
  copy rights received @ 2023.All Rights Received.
  </p>
</footer> -->
</body></html>