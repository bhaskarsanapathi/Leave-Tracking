<?php include 'database.php'; ?>
<?php
session_start();
$i=$_SESSION['i'];
$tol=$_POST['leave'];
$rea=$_POST['reason'];
$frm=$_POST['frm'];
$t=$_POST['to'];
if($tol==1)
	$tol="CL";
if($tol==2)
	$tol="ML";
if($tol==3)
	$tol="EL";
if($tol==4)
	$tol="OL";
if($tol==5)
	$tol="AL";
$nol=$_POST['nol'];
/*mysqli_query($conn,"INSERT INTO applies (fid,tol,reason,frm,tod,nod)
		        VALUES ('$i',$tol,'$rea','$frm','$t',$nol)");*/
$sql = "INSERT INTO applies (fid,tol, reason, frm, tod, nod)
VALUES ('$i','$tol','$rea','$frm','$t',$nol)";
if ($conn->query($sql) === TRUE) {
    echo "<script>location.href='applied.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>