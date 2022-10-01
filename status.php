<html>
<head>
<style>
table{
    font-style: italic;
    font-size: 25px;
    margin-top: 90px;
    margin-bottom: -10px;
    margin-right: 100px;
    margin-left: 370px;
}
</style></head>
<body>
<?php include 'database.php'; ?>
<?php 
session_start();
$i=$_SESSION['i'];
 $data = mysqli_query($conn,"SELECT CL,ML,EL,OL,AL FROM display WHERE fid='$i'") 
 or die(mysqli_error($conn)); 
echo "<h1 align='center'>welcome</h1>"."<h1 align='center'>".$i."</h1>";
 Print "<table border cellpadding=3 align='center'>"; 
 while($info = mysqli_fetch_array( $data )) 
 { 
 Print "<tr><td>CASUAL LEAVE:</td><td>".$info['CL'] . "</td></tr> "; 
 Print "<tr><td>MEDICAL LEAVE:</td><td>".$info['ML'] . "</td></tr> "; 
 Print "<tr><td>EARN LEAVE:</td><td>".$info['EL'] . "</td></tr> "; 
 Print "<tr><td>ONDUTY LEAVE:</td><td>".$info['OL'] . " </td></tr>";
 Print "<tr><td>ACADEMIC LEAVE:</td><td>".$info['AL'] . " </td></tr>"; 
 
 } 
 Print "</table>"; 
 ?> 
</br><a href="reason.php"><h3 align="center">Click Here</h3></a>
<label><h1 align="center">For Leave Application</h1></label></br>
</body>
</html>