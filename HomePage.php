<!DOCTYPE html>
<html>
    <head>
      <title>Koovi Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  }

/* Style the top navigation bar */
.topnav
{
  overflow: hidden;
  background-color:lightskyblue
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align:center;
  padding: 6px 12px;
  text-decoration: none;
  
}

/* Change color on hover */
.header a:hover 
{
  background-color:white;
  
}

@media screen and (max-width: 600px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}  
body
{
    background-color :wheat;
    margin-top: 1px;
    margin-right: 2px;
    margin-bottom: 0;
    margin-left: 2px;
    background-image:none;
    background-repeat: no-repeat;
    background-size:cover;
    }
header {
background-color: grey;
position: fixed;
left: 0;
right: 0;
top: 5px;
height: 30px;
display: flex;
align-items: center;
box-shadow: 0 0 25px 0 black;
}
header * {
display: inline;
}
header li {
margin: 20px;
}
header li a {
color: blue;
text-decoration: none;
}
/*
.header
    {
        width: 100%;
        margin-top: 0;
        font-size: 14px;
        text-align: right;
        margin-bottom: 0;
    }*/
    .footer
    {
        width: 100%;
        position: relative;
        text-align: center;        
        background-color:dodgerblue;
        color: white;
        left: 0;
        right: -10px;
        bottom:0;
        margin-top:350px;
    }
    .kanavu
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
      
    }
        </style>
        <link rel="stylesheet" href="hmpg.css">
    </head>
    <body>
        <header>
          <nav>
          <ul>            
          <b>
          <li><u>KOOVI</u><br>Digital</li>
            <li><a href="HomePage.php">Home</a></li>
            <li><a href="NewRegisterform1.php">New_Register</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="aboutus.php">About us</a></li>
          </b>
        </ul></nav>
        <!--<p class="kanavu">
          <!---<b><u>KANAVU</u><br> School of English</b>-->
          <!--<b><u>KOOVI</u><br>Digital</b>
        </p>-->
        </header>
        
        <div class="mask1"><p> Welcome <br>to <p style="color:chocolate;"><b>KOOVI Digital</b></p></p>
        <p class="clickhere">Not yet an account? you may join us... <a href="NewRegisterform1.php">Click here to Register</a></p>
        </div>
        <footer>
            <p class="footer">
            copy rights received @ 2023
            </p>
        </footer>
    </body>
</html>