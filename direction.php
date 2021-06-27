<!DOCTYPE html >
<html>
<head>
<title>direction</title>
<link rel="stylesheet" href="dirct.css">
</head>
<body>
<?php  
 $on = mysqli_connect("localhost","root","","rop_arm");
if (!$on)
  {
  die('Could not connect: ' . mysqli_error());
  }
$opr= ("select * from directions");
$work= mysqli_query($on,$opr);	
	if ($work == true ){ ?>
      <table class="dir">
	   <td>current direction</td>
       <?php
				while($list_info= mysqli_fetch_object ($work))
				{
					print"<tr>"; 
					print"<td>".$list_info->direction."</td>";
					print"</tr>";}?>
      </table>
      <?php	}
           else
             { echo "<h2>No Records Found...</h2>";}
        ?>
</body>
</html>