<html>
<head><tittle><h1 align="center">LEAVES AVAILABLE</h1></tittle></head>
<body background="rose.jpg">
<?php include 'database.php'; ?>
<?php 
session_start();
$i=$_SESSION['i'];
echo "<h1 align='center'>welcome</h1>"."<h1 align='center'>".$i."</h1>";
?>
<form method="post" action="insert.php">
<table align="center">
<tr><td>TYPE OF LEAVE</td>
<td><select name="leave">
<option value="0">--select--</option>
<option value="1">Casual Leave</option>
<option value="2">Medical Leave</option>
<option value="3">Earn Leave</option>
<option value="4">Onduty Leave</option>
<option value="5">Academic Leave</option>
</select></td></tr></br>
<tr><td>REASON</td><td><textarea name="reason" rows="5" cols="20"></textarea></td></tr></br>
<tr><td><label>From:</label></td><td><input type="date" name="frm"></td></tr>
<tr><td><label>To:</label></td><td><input type="date" name="to"></td></tr>
<tr><td><label>No of Leaves</label></td><td><input type="textbox" name="nol"</tr>
<tr><td colspan="2" align="center"><input type="submit" value="APPLY" ></td></tr>
</table>
</form>
</body>
<html>