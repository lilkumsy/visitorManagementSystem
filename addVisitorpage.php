<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $fullname = $_POST['fname'];
    $wtvisit  = $_POST['whom'];
    $purpose = $_POST['purpose'];
    $pheno = $_POST['pheno'];
    $address = $_POST['adress'];
    $officevisited = $_POST['office'];
    $consent = $_POST['consent'];
    $time_in = date("h:i:s"); // autogenerated
    $time_out = ''; // autogenerated
    $id = rand(); // autogenerated 
    $dcreted_in = date("Y-m-d"); // autogenerated	
    $dcreated_out  = '';

    // Check required fields
    if( !empty($fullname) && !empty($wtvisit) && !empty($purpose) && !empty($pheno) && !empty($address)) {	
        // Use prepared statements to avoid SQL injection
        $query = "INSERT INTO records (id, fullname, wtvisit , purpose, pheno, address, time_in, time_out, consent, officevisited, dcreted_in, dcreated_out) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'isssssssssss', $id, $fullname, $wtvisit, $purpose, $pheno, $address, $time_in, $time_out, $consent, $officevisited, $dcreted_in, $dcreated_out);

        if(mysqli_stmt_execute($stmt)){
            echo "<script>alert('User record added successfully')</script>";
            header('Location: viewallvisitors.php');
        } else {
            echo "<script>alert('Error adding user record: ".mysqli_error($conn)."')</script>";
        }
    } else {
        echo "Please enter all required fields.";
    }
}
?>


<center><h2>ITMB VISITOR RECORD MANAGEMENT SYSTEM</h2>
<a href='index.php'>HOME</a>
|<a href='addVisitorpage.php'>ADD VISITOR</a>
|<a href='viewallvisitors.php'>SIGNOUT VISITOR</a>
|<a href='viewall.php'>SEARCH ALL VISITORS</a>
<h4>VISITOR SIGN IN FORM</h4>
<form method="POST">
    <table>
        <tr>
            <td>Full Name:</td>
            <td><input type='text' name='fname' value='' required></td>
        </tr>
        <tr>
            <td>Whom to see:</td>
            <td><input type='text' name='whom' value='' required></td>
        </tr>
        <tr>
            <td>Purpose:</td>
            <td><input type='text' name='purpose' value='' required></td>
        </tr>
        <tr>
            <td>Phone number:</td>
            <td><input type='text' name='pheno' value='' required></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><textarea name="adress" rows="4" required></textarea></td>
        </tr>
        <tr>
            <td>Consent to sign in and sign out:</td>
            <td>
                <input type='radio' name='consent' value='YES' required/>YES
                <input type='radio' name='consent' value='NO' required/>NO
            </td>
        </tr>
        <tr>
            <td>Office being visited:</td>
            <td>
                <select name='office'>
                    <option value='FINPAR'>FINPAR</option>
                    <option value='TORBITA'>TORBITA</option>
                    <option value='ITMB'>ITMB</option>
                    <option value='Others'>Others</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' name='submit' value='Submit'></td>
        </tr>
    </table>
</form>
<br/>
<h4>All rights reserved.Powerd by ITMB IT DEPT-<?php echo date("Y");?></h4>
</center>
