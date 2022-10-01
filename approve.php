<html>
<head>
<style>
body{
    font-style: italic;
    font-size: 25px;
    margin-top: 200px;
    margin-bottom: -10px;
    margin-right: 100px;
    margin-left: 100px;
}
</style></head>
<body background="bg1.jpg">
<?php include 'database.php'; ?>
<?php
session_start();
$i=$_SESSION['i'];

$result = mysqli_query($conn,"select * from display d,applies a where a.fid=d.fid");

while($rowval = mysqli_fetch_array($result))

 {
  $fid=$rowval['fid'];
  $tol=$rowval['tol'];
  $reason=$rowval['reason'];
  $frm=$rowval['frm'];
$to=$rowval['tod'];
  $nol=$rowval['nod'];
}
$sql = "update display set $tol = $tol - $nol where fid = '$fid'";
if ($conn->query($sql) === TRUE) {
    echo '<h1 align="center">Leave Approved</h1>';
} else {
    echo 'Error: ' . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>
