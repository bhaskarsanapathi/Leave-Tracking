<?php include 'database.php'; ?>
<?php
session_start();
$_SESSION['i']=$_POST['i'];
$i=$_POST['i'];
$p=$_POST['pswd'];
if($i=='15331')
{
if($p=='sohith@123')
{
 echo "<script>location.href='pro.php';</script>";
}
}
else
{
$result = mysqli_query($conn,"SELECT name FROM registration WHERE id = '$i' and pswd='$p'");
//$row= mysqli_fetch_row($result);
/*if (!$result) {
    echo "<script>location.href='login.php';</script>";
}
else
{
	//$sql = "INSERT INTO display (fid, CL, ML, EL, OL, AL)VALUES ('$i', 15, 8, 6, 20, 30)";
        echo "<script>location.href='frame1.php';</script>";
}*/
$count=mysqli_num_rows($result);
if($count==1)  
    header("Location:frame1.php");
else 
 header("Location:login.php");
}
?>