function ValidateEmail1(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
alert("Valid email address!");
document.form1.text1.focus();
return false;
}
else
{
alert("You have entered an invalid email address!");
document.form1.text1.focus();
return true;
}
}
function isvalidPsswd(inputpswd1,inputpswd2)
{
    if(inputpswd1.value != inputpswd2.value)
    {
        alert("You have entered correct password");
        document.form1.newpswd();
        return true;
    }
}
function ValidateEmail()
    {
      let inputText = document.loginform.txtuserid;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var pswdlength = document.loginform.txtlgpswd;

          if(document.loginform.txtuserid.value=="")
          {
            alert("Please insert valid id.");
            return false;
          }
          else if(!inputText.value.match(mailformat))
          {
              /*alert("Valid email address!");*/
              alert("You have entered an invalid email address!");
             /*document.loginform.lblerrormsg.value="You have entered an invalid email address!";*/
              document.loginform.txtuserid.focus();
              return false;
          }
          else if( pswdlength.value.length < 8)
          {
              alert("Your password length is too low.");
              document.loginform.txtlgpswd.focus();
              return false;
          }
          
          else
          {
            /*alert("You have entered successfully.!");*/
            return true;
          }
    }

   