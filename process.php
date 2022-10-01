<?php include 'database.php'; ?>
<?php
$name=$_POST['name'];
$id=$_POST['id'];
$pswd=$_POST['password'];
$cpswd=$_POST['confirmpassword'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$desg=$_POST['desg'];
$dept=$_POST['dept'];
if($desg==1)
	$desg="professor";
if($desg==2)
	$desg="Associateprofessor";
if($desg==3)
	$desg="Assistant professor";
if($dept==1)
	$dept="CSE";
if($dept==2)
	$dept="ECE";
if($dept==3)
	$dept="EEE";
if($dept==4)
	$dept="MECH";
if($dept==5)
	$dept="CIV";
if($dept==6)
	$dept="CHEM";
if($dept==7)
	$dept="IT";
mysqli_query($conn,"INSERT INTO registration (name,id,pswd,cpswd,email,phno,desg,dept)
		        VALUES ('$name','$id','$pswd','$cpswd','$email','$phno','$desg','$dept')");
mysqli_query($conn,"INSERT INTO display (fid, CL, ML, EL, OL, AL)
VALUES ('$id', 15, 8, 6, 20, 30)");
	echo "<script>location.href='success.php';</script>";
?>