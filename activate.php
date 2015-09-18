<?php

$servername = "127.7.188.2";
$username = "admin39halFD";
$password = "Fdnv72D2mZjX";
$dbname = "app1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
///////////////
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
//////////////////

if (isset($_GET['email']) && preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/',
 $_GET['email'])) {
 $email = $_GET['email'];
}
if (isset($_GET['key']) && (strlen($_GET['key']) == 32))
 //The Activation key will always be 32 since it is MD5 Hash
 {
 $key = $_GET['key'];
}

if (isset($email) && isset($key)) {

 // Update the database to set the "activation" field to null

 $query_activate_account = "UPDATE members SET Activation=NULL WHERE(Email ='$email' AND Activation='$key')LIMIT 1";
 $result_activate_account = mysqli_query($dbc, $query_activate_account);

 // Print a customized message:
 if (mysqli_affected_rows($dbc) == 1) //if update query was successfull
 {
 echo '<div>Your account is now active. You may now <a href="login.php">Log in</a></div>';

 } else {
 echo '<div>Oops !Your account could not be activated. Please recheck the link or contact the system administrator.</div>';

 }

 mysqli_close($dbc);

} else {
 echo '<div>Error Occured .</div>';
}
?>