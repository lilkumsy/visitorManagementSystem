<?php 
include 'connection.php';
?>
<center>
<a href='index.php'>HOME</a>
|<a href='addVisitorpage.php'>ADD VISITOR</a>
|<a href='viewallvisitors.php'>SIGNOUT VISITOR</a>
|<a href='viewall.php'>SEARCH ALL VISITORS</a>
<h3>SEARCH VISITORS BY DATE</h3>
<a href='searchbydate.php'>SEARCH BY DATE</a>|
<a href='searchbyorg.php'>SEARCH BY ORGANISATION VISITED</a>
<center>
<form method='post'>
    <table>
        <tr>
            <td>DATE</td>
            <td><input type='date' name='dcreted_in'value='' required/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="SEARCH RECORDS"></td>
        </tr>
    </table>
</form>
</center>

<center>
<table border="1">		
    <tr bgcolor="">
        <th>ID</th>
        <th>FULL NAME</th>
        <th>WHOM TO VISIT</th>
        <th>PURPOSE</th>
        <th>PHONE NUMBER</th>
        <th>ADDRESS</th>
        <th>TIME IN</th> 
        <th>DATE IN</th>
        <th>TIME OUT</th> 
	<th>DATE OUT</th> 
    </tr>
    <?php
    include 'connection.php';
    if(isset($_POST['submit'])){
        // Capture the selected office from the form
        $dcreted_in = $_POST['dcreted_in'];

        // Update the query to search based on the selected office
        $query = "SELECT * FROM records WHERE dcreted_in='$dcreted_in'";
        $result = mysqli_query($conn, $query);

        // Loop through and display the matching records
        while ($row = mysqli_fetch_array($result)) {  
    ?>
    <tr bgcolor="">
        <td><?php echo $row["id"]; ?></td>			
        <td><?php echo $row["fullname"]; ?></td>
        <td><?php echo $row["wtvisit"]; ?></td>
        <td><?php echo $row["purpose"]; ?></td>
        <td><?php echo $row["pheno"]; ?></td>
        <td><?php echo $row["address"]; ?></td>
        <td><?php echo $row["time_in"]; ?></td>
        <td><?php echo $row["dcreted_in"]; ?></td>
        <td><?php echo $row["time_out"]; ?></td>
	<td><?php echo $row["dcreated_out"]; ?></td>
    </tr>
    <?php 
        }
    }
    ?>
</table>
<h4>All rights reserved.Powerd by ITMB IT DEPT-<?php echo date("Y");?></h4>
</center>
