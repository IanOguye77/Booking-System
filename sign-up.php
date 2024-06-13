<?php
if(isset($_POST['submit'])){

    $name = $_POST['username_name'];
    $email = $_POST['email_name'];
    $number = $_POST['contact_no'];
    $pswrd = $_POST['password'];
    $cpswrd = $_POST['cpassword'];
   
    // Data base connection parameters
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="online_bus";

    // Create a connection
    $db=mysqli_connect($servername,$username, $password,$dbname) or die("Could not connect to Database");

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // SQL Query
    $query = "INSERT into user__details(name, email, password, cont_num) VALUES('$name', '$email', '$pswrd', $number)";

    // execute query
    mysqli_query($db, $querry) or die("Could not execute querry");
    // success message
    echo("<font color= 'green' size= '5'>Data inserted Successfully</font>");

    header('location: login_page.html');
    exit;
}
?>
