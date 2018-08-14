

<!DOCTYPE html>
<html>
<body>

<?php
$servername = "rds-mysql-phpsampleapp.czmimpdrs5zu.eu-west-1.rds.amazonaws.com";
$username = "phpsampleapp";
$password = "philips1";
$dbname = "ics_aws_amazon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, first_name, last_name FROM test_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["first_name"]. " " . $row["last_name"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

<?php echo "Declan Testing elastic beanstalk application" ?>
<br>
<br>
<?php echo "If you can read this then code pipeline has been successfull" ?>
<br>
<br>
<?php echo "Testing that pipeline only updates on pushes and not commits" ?>
<br>
<br>
<?php echo "Testing sql connection" ?>

</body>
</html>
