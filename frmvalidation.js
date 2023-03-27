function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
alert("Valid email address!");
document.form1.text1.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.text1.focus();
return false;
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