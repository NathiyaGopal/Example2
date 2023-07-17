<!DOCTYPE html>
<html>
    <head>
      <title>Koovi Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <style>
  
* { 
  box-sizing: border-box;
  }

/* Style the top navigation bar */
/*
.topnav
{
  overflow: hidden;
  background-color:lightskyblue;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align:center;
  padding: 6px 12px;
  text-decoration: none;
}

/* Change color on hover */
header a:hover 
{
  color:lightgreen;
}

/*
@media screen and (max-width: 600px) {
 div
 {
  font-size:10px;
 }
    li
    {
      float:left;
      font-size:14px;
    }
}  */

body
{
   /* background-color :lightskyblue; */
    margin-top: 1px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    background-image : url('bgimg21.jpg');
    background-repeat:no-repeat;
    background-size:cover;
    opacity: 6px;
    color:white;
}
  
/*
header {
background-color: black;
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
}*/
/*
.header
    {
        width: 100%;
        margin-top: 0;
        font-size: 14px;
        text-align: right;
        margin-bottom: 0;
    }*/
    /*
    .footer
    {
        width: 100%;        
        text-align: center;        
        background-color:black;
        color: white;
        left: 0;
        right: -10px;
        bottom:0;
        position: relative;
        margin-top:380px;
        font-family:'Lucida Sans';
        height:30px;
    }*/
    /* .kanavu
    {
      text-shadow: 4px 4px 6px cyan;
      color:white;
      text-align: justify;
      text-decoration: double;
      background-color:grey;
      width: 100%;
      height: 50px;
      padding-top: 4px;
      padding-bottom: 4px; 
      padding-left: 10px;
      padding-right: 20px;
      font-size: 18px;
      margin-top: 0.8px;
      margin-bottom: 1px;
      margin-left: 20px;
      margin-right: 20px;
    } */
    .mask1 
    {
    /*color:darkslategrey;
    text-shadow: 2px 2px 10px darkred;*/
    padding-top: 40px;
    padding-left: 20px;
    padding-right: 4px;
    text-align: center;
    font-size : 16px;
  /*  -webkit-mask-image: linear-gradient(black, transparent);
    mask-image: linear-gradient (black, transparent);*/
  }
  
/* Change color on hover */
.clickhere
  {
    color: white;
    font-size: 13px;
    text-align: center;
    font-family:'Lucida Sans';
  }
  
  a{
    color: yellow;
  }
  a:hover 
  {
    color:lightgreen;  
  }

  .active{
    color:lightgreen;
  }
        </style>
        <!--<link rel="stylesheet" href="hmpg.css">-->
<!--    
          <header>
          <nav><div class="Htitle">
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="NewHomePage.php">KOOVI</a></u> &nbsp;Digital</span></div>
          <div style="margin-left:710px;margin-right:4px;text-align:right;">
          <ul>         
          <b>          
            <li><i class='fas fa-home' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="NewHomePage.php" class="active">Home</a></li>
            <li><i class='fas fa-registered' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="NewRegisterform1.php">Registration</a></li>
            <li><i class='fas fa-user' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="Login.php">Login</a></li>
            <li><i class='fas fa-address-card' style='font-size:18px;color:lightblue'></i>&nbsp;<a href="aboutus.php">About us</a></li>
          </b>
        </ul>
        </div>
        </nav>/*
        <p class="kanavu">-->
          <!---<b><u>KANAVU</u><br> School of English</b>-->
          <!--<b><u>KOOVI</u><br>Digital</b>
        </p>*/
        </header> -->
        </head>
        <body>
        <div>
        <?php include 'header.html';?>
        </div>
        <!-- <br><br><br> -->
        <div class="mask1"><br><br><br><br><br><br><br><p style="font-size:24px;"> Welcome to</p> <p style="color:chocolate; font-size:30px;">
        <b>KOOVI Digital</b></p>
        <p class="clickhere">Not yet an account? you may join us... <a href="NewRegisterform1.php">Click here </a>to Register</p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>        
        </div>
        <div><?php include 'footer.html';?></div>
        <!--<img src="bgimg5.jpg">-->
       
      </body>
        <!-- <footer>
            <div class="footer">
            copy rights received @ 2023.All Rights Received.
            </div>
        </footer> -->
    
</html>