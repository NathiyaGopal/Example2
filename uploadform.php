<!DOCTYPE html>
<html>
<head>
        <title>Koovi Upload Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="Lgform.css">
        <link rel="stylesheet" href="hmpg.css">-->
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
        body
            {
            margin-top: 10px;
            margin-bottom: 0;
            margin-left:0;
            margin-right:0;
            background-color:white;
            font-size:24px;
            color:limegreen;
            background
            }
       </style>
       <header>
          <nav><div class="Htitle">
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>KOOVI</u> &nbsp;Digital</span></div>
          <div style="margin-left:710px;margin-right:4px;text-align:right;">
          <ul>         
          <b>          
            <li><a href="NewHomePage.php">Home</a></li>
            <li><a href="NewRegisterform1.php">Registration</a></li>
            <li><a href="Login.php" class="active">Login</a></li>
            <li><a href="aboutus.php">About us</a></li>
          </b>
        </ul>
        </div>
        </nav>
    </header>     
    <br>
    <script type="text/javascript">
        
function readURL(input) 
{
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah').attr('src', e.target.result).width(100).height(70);
    };

    reader.readAsDataURL(input.files[0]);
    echo("<img src= '$('#blah')'>");
  }
}
        </script>
       </head> 
<body>
<br><br>
<form action="uploadfile.php" method="post" enctype="multipart/form-data">
  <label> &nbsp;&nbsp;Select image to upload:</label>
  <input type="file" name="fileToUpload" id="fileToUpload" onclick="readURL(this);">
  <input type="submit" value="Upload Image" name="submit">
  </form>

</body>
</html>