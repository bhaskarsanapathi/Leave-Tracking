<html>
<body>
<?php include 'database.php'; ?>
<?php

          echo "<h1 align='center'>welcome admin</h1>";
	  echo "<h1 align='center'>leave requests</h1>";
 $data = mysqli_query($conn,"SELECT * FROM applies") 
 or die(mysqli_error($conn)); 
 Print "<table border cellpadding=3 align='center'>"; 
 while($info = mysqli_fetch_array( $data )) 
 { 
 Print "<tr><th>fid</th><td>".$info['fid'] . "</td></th> "; 
 Print "<th>type of leave</th><td>".$info['tol'] . "</td> "; 
 Print "<th>reason</th><td>".$info['reason'] . "</td> "; 
 Print "<th>from</th><td>".$info['frm'] . "</td> "; 
 Print "<th>to</th><td>".$info['tod'] . " </td>";
 Print "<th>no of leaves</th><td>".$info['nod'] . " </td>"; 
 print "<td><a href='approve.php'>approve</td>";
 } 
 Print "</table>"; 
 ?> 
</body>
</html>