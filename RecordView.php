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
$sqllgid = "select Register_Id,FirstName,LastName,Contact_No,Email_Id from register_data";
$result = mysqli_query($conn,$sqllgid);

?>
<style>
    .kanavu
    {
      text-shadow: 4px 4px 6px cyan;
      color:white;
      text-align: justify;
      text-decoration: double;
      background-color:brown;
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
    }
body
{
background-color:lightblue;
}
h2
{
    color:Darkslategrey;
    text-shadow: 4px 4px 6px cyan;
}
table
{
border-color:darkgrey;
color:black;
font-size: 20px;
}
th
{
  color:Darkred;
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
        /*height:20px;*/
    }
    .homeicon
    {
      margin-top:-20px;
      margin-left:1000px;
      
    }
    img
    {
        width: 24px;
        height: 24px;
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
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <header>
            <div class="kanavu">
                <b><u>KOOVI</u><br>Digital</b>
            <span class="homeicon"> <a href="HomePage.php">
            <i class='fas fa-house-user' style='font-size:20px;color:white;'></i>
            </a></span>
            </div>
           
    </header>
</head>

<body>

  <form name= "Reportform"  action = "" method = "POST">
  
<table border ="1" cellspacing="0" cellpadding="10" align="center" name="myTable">
<thead><tr><td  colspan="6" align="center"><h2>Register Report</h2></td></tr> </thead>
<tr>
    <th>S.No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email_Id</th>
    <th>Contact_No</th>
    <th>for_Update</th>
  </tr>

<?php

if(isset($result))
{
if(mysqli_num_rows($result) > 0)
 {
  $sn=1;
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
   <td><?php echo $data['Email_Id']; ?> </td>
   <td><?php echo $data['Contact_No']; ?> </td>
   <td> <a href="Updateform.php?id=<?php echo $data["Register_Id"]; ?>"> <i class='fas fa-edit' style='font-size:18px;color:darkred'></i></a> &nbsp;&nbsp;
   <a href="RecordView.php?id=<?php echo $data["Register_Id"]; ?>"" onclick="return confirm('Are you sure? Do you want to delete this record')" ><i class='fas fa-trash' style='font-size:18px;color:darkred'></i></a>
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
echo 'Record has been deleted.';
}
 ?>
  </table>
  </form>
  </body>
  <footer>
  <p class="footer">
  copy rights @ 2023
  </p>
</footer>
