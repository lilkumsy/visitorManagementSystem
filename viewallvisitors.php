<?php 
include 'connection.php';
?>
<center>
<a href='index.php'>HOME</a>
|<a href='addVisitorpage.php'>ADD VISITOR</a>
|<a href='viewallvisitors.php'>SIGNOUT VISITOR</a>
|<a href='viewall.php'>SEARCH ALL VISITORS</a>
<h3>ALL VISITORS STILL SIGN IN WITHOUT LOGGING OUT</h3>
<table  border="" >		
           	<tr bgcolor="">
			<th>ID</th>
			<th>FULLNAME</th>
            <th>WHOM TO VISIT</th>
            <th>PURPOSE</th>
			<th>PHONE NUMBER</th>
			<th>ADDRESS</th>
			<th>TIME IN</th> 
			<th>DATE IN</th>
			<th>ACTION</th> 
            </tr>
            <?php
	// 	
            $query="SELECT * FROM records WHERE time_out IS NULL OR dcreated_out = ''";
            $result=  mysqli_query($conn,$query);
            while /*($row= mysqli_fetch_array($result)&&*/
			($row = mysqli_fetch_array($result)){  
            ?>
            		<tr bgcolor="">
				<td><?php echo $row["id"];?></td>			
                		<td><?php echo $row["fullname"];?></td>
				<td><?php echo $row["wtvisit"];?></td>
                		<td><?php echo $row["purpose"];?></td>
                		<td><?php echo $row["pheno"];  ?></td>
				<td><?php echo $row["address"]; ?></td>
				<td><?php echo $row["time_in"]; ?></td>
				<td><?php echo $row["dcreted_in"]; ?></td>
				<td><a href='signoutVisitor.php?id=<?php echo $row["id"]; ?>'>Click to sign out the visitor</a></td>
    			</tr>
			 <?php 
			}
			 ?>
		 </table>
		 <h4>All rights reserved.Powerd by ITMB IT DEPT-<?php echo date("Y");?></h4>
		 </center>
				   
                    