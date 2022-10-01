<html>
<?php
session_start();
$i=$_SESSION['i'];
echo "<h1 align='center'>WELCOME</h1>"."<h1 align='center'>".$i."</h1>";
?>
<body background=bg1.jpg>
<table border="1" align="center">
  <tr>
    <td colspan="2"><h2>leave status</h2></td>
    <td colspan="2"><h2>apply leave</h2></td>
  </tr>
  <tr>
    <td colspan="2"><a href="s.php"><h2>click here</h2></a></td>
    <td colspan="2"><a href="status.php"><h2>click here</h2></a></td>
  </tr>
 
</table>
</body>
</html>
