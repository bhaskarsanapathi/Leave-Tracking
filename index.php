<html>
<head><h1>FACULTY REGISTRATION FORM</h1>
<style>
table{
    font-style: italic;
    font-size: 25px;
    margin-top: -140px;
    margin-bottom: 100px;
    margin-right: 50px;
    margin-left: 10px;
}
body{
    padding: 25px;
    background-repeat: no-repeat;
    background-size: 1500px 700px;
}
</style>
<script>
function check()
{
name=document.myform.name.value;
password=document.myform.password.value;
confirmpassword=document.myform.confirmpassword.value;
phno=document.myform.phno.value;
email=document.myform.email.value;
if(name.length==0)
{
  window.alert("name cannot be empty");
   return false;
 }
if(name.length<6)
{
window.alert("name should be atleast 6 characters");
return false;
}
if(password.length<6)
{
window.alert("password should contain atleast 6 characters");
return false;
}
m=confirmpassword.search(password)
if(m<0)
{
 window.alert("confirm password doesnot matching password");
return false;
}
len=email.length;
i=0;
c=0;
while(i<len)
{
if(email.charAt(i)=='@')
{
saveindex=i;
c++;
}
i++;
if((email.charAt(i)=='@' && email.charAt(i+1)=='.') || (email.charAt(i+1)=='@' && email.charAt(i)=='.'))
{
window.alert(". and @ should not be preceeded or succeded");
return false;
}
if(email.charAt(i)=='.')
{
if(i-saveindex<3)
window.alert("thier should be minimum length of two between . and @");
}
}
if(c>1)
{
window.alert("email should contain only one @");
return false;
}
if(email.charAt(0)=='@' || email.charAt(0)=='.' || email.charAt(len-1)=='@' || email.charAt(len-1)=='@' )
{
window.alert("email should not start or end with special chars");
return false;
}
if(isNaN(phno))
{
 alert("phno should contain digits");
 return false;
 }
if(phno.length!=10)
{
window.alert("phno should contain 10 digits");
return false;
}

 }
 </script>
</head>
<body background="logo3.jpg" align="center">
<form name="myform" method="get" onsubmit="return check()" action="process.php">
<table>
<tr><td><label>Enter name</label></td>
<td><input type="textbox" name="name"></td></tr></br>
<tr><td><label>Enter id</label></td>
<td><input type="textbox" name="id"></td></tr></br>
<tr><td><label>Enter password</label></td>
<td><input type="password" name="password"></td></tr></br>
<tr><td><label>Re-enter password</label></td>
<td><input type="password" name="confirmpassword"></td></tr></br>
<tr><td><label>Enter E-mail</label></td>
<td><input type="textbox" name="email"></td></tr></br>
<tr><td><label>Enter phone number</label></td>
<td><input type="textbox" name="phno"></td></tr></br>
<tr><td><label>Designation</label></td>
<td><select name="desg">
<option value="0">--select--</option>
<option value="1">Professor</option>
<option value="2">Associate professor</option>
<option value="3">Assistant professor</option>
</select></td></tr></br>
<tr><td><label>Department</label></td>
<td><select name="dept">
<option value="0">--select--</option>
<option value="1">CSE</option>
<option value="2">ECE</option>
<option value="3">EEE</option>
<option value="4">MECH</option>
<option value="5">CIV</option>
<option value="6">CHEM</option>
<option value="7">IT</option>
</select></td></tr></br>
<tr><td colspan="2" align="center"><input type="submit"></td></tr>
</table>
</form>
</body>
</html>
