
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "survey_data";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
if(!empty($_POST['field']) && !empty($_POST['field1']) && !empty($_POST['field2']) && !empty($_POST['field3']))
{   
    $field=$_POST['field'];
    $field1=$_POST['field1'];
    $field2=$_POST['field2'];
    $field3=$_POST['field3'];
    $sql = "INSERT INTO survey_values(field,field1,field2,field3) VALUES ('$field','$field1','$field2','$field3')";
    mysqli_query($conn,$sql);
    header("Location: Survey.php?success");
    exit();
}else{
    echo 'Fill all fields';
}
//$conn = new mysqli('localhost','root','','survey_data');
?>