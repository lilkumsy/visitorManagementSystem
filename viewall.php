<?php 
include 'connection.php';
?>
<center>
<a href='index.php'>HOME</a>
|<a href='addVisitorpage.php'>ADD VISITOR</a>
|<a href='viewallvisitors.php'>SIGNOUT VISITOR</a>
|<a href='viewall.php'>SEARCH ALL VISITORS</a>
<h3>VIEW ALL VISITORS </h3>
<a href='searchbydate.php'>SEARCH BY DATE</a>|<a href='searchbyorg.php'>SEARCH BY ORGANISATION VISITED</a>
<br/><br/>
<table  border="" >		
           	<tr bgcolor="">
			
			<th>FULLNAME</th>
            		<th>WHOM TO VISIT</th>
            		<th>PURPOSE</th>
			<th>PHONE NUMBER</th>
			<th>ADDRESS</th>
			<th>TIME IN</th> 
			<th>DATE IN</th>
			<th>ORGANISATION</th>
			<th>TIME OUT</th> 
			<th>DATE OUT</th>
			<th>SIGNATURE</th> 
            </tr>
            <?php
	// 	
            $query="SELECT * FROM records ";
            $result=  mysqli_query($conn,$query);
            while /*($row= mysqli_fetch_array($result)&&*/
			($row = mysqli_fetch_array($result)){  
            ?>
            		<tr bgcolor="">
							
                		<td><?php echo $row["fullname"];?></td>
				<td><?php echo $row["wtvisit"];?></td>
                		<td><?php echo $row["purpose"];?></td>
                		<td><?php echo $row["pheno"];  ?></td>
				<td><?php echo $row["address"]; ?></td>
				<td><?php echo $row["time_in"]; ?></td>
				<td><?php echo $row["dcreted_in"]; ?></td>
				<td><?php echo $row["officevisited"];?></td>
				<td><?php echo $row["time_out"]; ?></td>
				<td><?php echo $row["dcreated_out"]; ?></td>
				<td><?php echo $row["consent"]; ?></td>
    			</tr>
			 <?php 
			}
			 ?>
		 </table>
<br/><br/><h3>All rights reserved.powered by IT Dept ITMB-<?php echo date('Y');?> </h3>

</center>
				   
                    