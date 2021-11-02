<?php include $_SERVER["DOCUMENT_ROOT"] . "./styles.scss";

$host = "localhost";
$user = "root";
$pass = "";
$db = "form";

$con = new mysqli($host,$user,$pass,$db);
if(!$con){
echo "There are some problems while connecting the database";
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$query = "INSERT INTO `Black_Tech_Form`(`first_name`, `last_name`, `email`, `phone`, `address`) VALUES
('$firstname','$lastname','$email',$phone,'$address')";

$insert = mysqli_query($con, $query);

if(!$insert){
echo "There are some problems while inserting data";
} else {
echo "<body style='background:#060b23; color: white;'><div style='display:flex; justify-content:center; align-item:center; font-size:1.5rem; margin: 4rem 0 0 0'>Form submitted successfully. Thanks buddy! We will get in touch.</div></body>";
}
?>